<?php

$connection = mysqli_connect("localhost","root","","actes");

$id_demande = $_GET['id'];

$demande = mysqli_query($connection,"
SELECT * FROM demande
WHERE id_demande='$id_demande'
");

$row_demande = mysqli_fetch_assoc($demande);
$id_declaration = $row_demande['id_declaration'];

$declaration = mysqli_query($connection,"
SELECT * FROM declaration
WHERE id_declaration='$id_declaration'
");

$row = mysqli_fetch_assoc($declaration);

// ✅ GÉNÉRER LE PDF EN PREMIER
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFillColor(240, 246, 255);
$pdf->Rect(0, 0, 210, 297, 'F');
$pdf->SetDrawColor(31, 97, 151);
$pdf->SetLineWidth(1.2);
$pdf->Rect(8, 8, 194, 281);
$pdf->SetMargins(16, 16, 16);
$pdf->SetAutoPageBreak(true, 20);

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0, 10, 'REPUBLIQUE DU SENEGAL', 0, 1, 'C');
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0, 10, 'EXTRAIT D\'ACTE DE NAISSANCE', 0, 1, 'C');
$pdf->Ln(4);

// Fonction helper pour section PDF
function pdfSection($pdf, $titre, $champs) {
    $pdf->SetFont('Arial','B',11);
    $pdf->SetFillColor(26, 86, 219);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(0, 9, $titre, 0, 1, 'L', true);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    foreach ($champs as $label => $valeur) {
        $pdf->SetFillColor(232, 240, 255);
        $pdf->Cell(70, 8, $label, 1, 0, 'L', true);
        $pdf->SetFillColor(255,255,255);
        $pdf->Cell(120, 8, $valeur, 1, 1, 'L', true);
    }
    $pdf->Ln(3);
}

pdfSection($pdf, 'INFORMATIONS DU NOUVEAU-NE', [
    'Nom'              => $row['nom_bebe'],
    'Prenom'           => $row['prenom_bebe'],
    'Sexe'             => $row['sexe'],
    'Date de naissance'=> $row['date_naissance'],
]);

pdfSection($pdf, 'INFORMATIONS DU PERE', [
    'Nom'              => $row['nom_pere'],
    'Prenom'           => $row['prenom_pere'],
    'Date de naissance'=> $row['date_naissance_pere'],
    'Profession'       => $row['profession_pere'],
]);

pdfSection($pdf, 'INFORMATIONS DE LA MERE', [
    'Nom'              => $row['nom_mere'],
    'Prenom'           => $row['prenom_mere'],
    'Date de naissance'=> $row['date_naissance_mere'],
    'Profession'       => $row['profession_mere'],
]);

pdfSection($pdf, 'DECLARANT & FILIATION', [
    'Filiation'        => $row['filiation'],
    'Declarant'        => $row['declarant'],
    'Lien avec enfant' => $row['lien_enfant'],
]);

pdfSection($pdf, 'ADRESSE', [
    'Adresse'  => $row['adresse'],
    'Ville'    => $row['ville'],
    'Quartier' => $row['quartier'],
    'Centre'   => $row['centre'],
]);

$pdf->Ln(4);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0, 8, 'Fait a la mairie de Sacre Coeur', 0, 1, 'C');
$pdf->Cell(0, 8, 'Signature de l\'officier d\'etat civil', 0, 1, 'C');

$pdf->Output('F', 'pdf/extrait_'.$id_demande.'.pdf');
?>
<!DOCTYPE html>
<html>
<head>
<title>Extrait de naissance</title>
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        background: linear-gradient(120deg, #f5f7fb 0%, #e8edf4 100%);
        font-family: Arial, sans-serif;
        padding: 20px;
        min-height: 100vh;
    }

    .card {
        background: #ffffff;
        border: 2px solid #2f5597;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        max-width: 900px;
        margin: 0 auto;
        padding: 24px;
        overflow-x:auto;
    }

    header {
        background: linear-gradient(135deg, #1a56db, #1e3a8a);
        box-shadow: 0 4px 15px rgba(26,86,219,0.5);
        padding: 18px 30px;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    header h5 {
        color: white;
        font-size: 16px;
        letter-spacing: 1px;
        text-shadow: 0 1px 4px rgba(0,0,0,0.3);
    }

    .titre-doc {
        text-align: center;
        margin-bottom: 20px;
    }

    .titre-doc h2 {
        font-size: 18px;
        color: #1e3a8a;
        text-transform: uppercase;
    }

    .titre-doc h3 {
        font-size: 15px;
        color: #2f5597;
        font-weight: normal;
        margin-top: 4px;
    }

    /* ✅ TABLEAU PRINCIPAL */
    .info-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        font-size: 15px;
        table-layout: fixed;
    }
    .info-table td{
        word-wrap: break-word;
        padding:break-word;
    }

    .info-table thead tr th {
        background: linear-gradient(135deg, #1a56db, #1e3a8a);
        color: white;
        padding: 10px 14px;
        text-align: left;
        font-size: 13px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .info-table thead tr th:first-child {
        border-radius: 8px 0 0 0;
    }
    .info-table thead tr th:last-child {
        border-radius: 0 8px 0 0;
    }

    .info-table tbody tr:nth-child(even) {
        background-color: #f0f5ff;
    }

    .info-table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .info-table tbody tr:hover {
        background-color: #dbeafe;
        transition: background 0.2s;
    }

    .info-table tbody td {
        padding: 9px 14px;
        border-bottom: 1px solid #d1dff8;
        color: #1e293b;
    }

    .info-table tbody td:first-child {
        font-weight: bold;
        color: #1e3a8a;
        width: 38%;
        border-right: 2px solid #bfdbfe;
    }

    .section-title {
        background: #1e3a8a;
        color: white;
        padding: 8px 14px;
        border-radius: 8px 8px 0 0;
        font-size: 13px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 16px;
    }

    .validation-box {
        border: 1.5px solid #2f5597;
        border-radius: 10px;
        padding: 14px 18px;
        background: #f8fbff;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .validation-box div {
        flex: 1;
        border: 1px solid #bdd7ee;
        border-radius: 8px;
        background: white;
        padding: 10px 14px;
        font-size: 14px;
        color: #1e3a8a;
    }

    .validation-box div strong {
        display: block;
        margin-bottom: 6px;
        font-size: 13px;
    }

    /* ACTIONS */
    .actions-grid {
        display: flex;
        flex-direction: column;
        gap: 12px;
        max-width: 340px;
        margin: 0 auto;
    }

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 14px 20px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 15px;
        border: none;
        cursor: pointer;
        transition: background 0.2s, transform 0.1s;
        color: white;
        font-family: Arial, sans-serif;
    }

    .btn:active { transform: scale(0.97); }

    .btn-whatsapp { background-color: #25D366; box-shadow: 0 4px 10px rgba(37,211,102,0.4); }
    .btn-whatsapp:hover { background-color: #1ebe57; }

    .btn-download { background-color: #1a56db; box-shadow: 0 4px 10px rgba(26,86,219,0.4); }
    .btn-download:hover { background-color: #1440a8; }

    .btn-email { background-color: #f97316; box-shadow: 0 4px 10px rgba(249,115,22,0.4); }
    .btn-email:hover { background-color: #ea6a05; }

    .btn-print { background-color: #6b7280; box-shadow: 0 4px 10px rgba(107,114,128,0.4); }
    .btn-print:hover { background-color: #4b5563; }

    .btn-back { background-color: #e53e3e; box-shadow: 0 4px 6px rgba(229,62,62,0.4); }
    .btn-back:hover { background-color: #c53030; }

    @media print {
        .actions-grid, header { display: none; }
    }
</style>
</head>
<body>
<div class="card">

    <header>
        <h5>DEMANDES D'EXTRAIT DE NAISSANCE – MAIRIE DE SACRÉ CŒUR</h5>
    </header>

    <div class="titre-doc">
        <h2>République du Sénégal</h2>
        <h3>Extrait d'Acte de Naissance</h3>
    </div>

    <!-- NOUVEAU-NÉ -->
    <div class="section-title"> Informations PERSONNELLES</div>
    <table class="info-table">
        <tbody>
            <tr><td>Nom</td><td><?php echo $row['nom_bebe']; ?></td></tr>
            <tr><td>Prénom</td><td><?php echo $row['prenom_bebe']; ?></td></tr>
            <tr><td>Sexe</td><td><?php echo $row['sexe']; ?></td></tr>
            <tr><td>Date de naissance</td><td><?php echo $row['date_naissance']; ?></td></tr>
        </tbody>
    </table>

    <!-- PÈRE -->
    <div class="section-title"> Informations du père</div>
    <table class="info-table">
        <tbody>
            <tr><td>Nom</td><td><?php echo $row['nom_pere']; ?></td></tr>
            <tr><td>Prénom</td><td><?php echo $row['prenom_pere']; ?></td></tr>
            <tr><td>Date de naissance</td><td><?php echo $row['date_naissance_pere']; ?></td></tr>
            <tr><td>Profession</td><td><?php echo $row['profession_pere']; ?></td></tr>
        </tbody>
    </table>

    <!-- MÈRE -->
    <div class="section-title"> Informations de la mère</div>
    <table class="info-table">
        <tbody>
            <tr><td>Nom</td><td><?php echo $row['nom_mere']; ?></td></tr>
            <tr><td>Prénom</td><td><?php echo $row['prenom_mere']; ?></td></tr>
            <tr><td>Date de naissance</td><td><?php echo $row['date_naissance_mere']; ?></td></tr>
            <tr><td>Profession</td><td><?php echo $row['profession_mere']; ?></td></tr>
        </tbody>
    </table>

    <!-- DÉCLARANT -->
    <div class="section-title"> Déclarant & Filiation</div>
    <table class="info-table">
        <tbody>
            <tr><td>Filiation</td><td><?php echo $row['filiation']; ?></td></tr>
            <tr><td>Déclarant</td><td><?php echo $row['declarant']; ?></td></tr>
            <tr><td>Lien avec l'enfant</td><td><?php echo $row['lien_enfant']; ?></td></tr>
        </tbody>
    </table>

    <!-- ADRESSE -->
    <div class="section-title"> Adresse</div>
    <table class="info-table">
        <tbody>
            <tr><td>Adresse</td><td><?php echo $row['adresse']; ?></td></tr>
            <tr><td>Ville</td><td><?php echo $row['ville']; ?></td></tr>
            <tr><td>Quartier</td><td><?php echo $row['quartier']; ?></td></tr>
            <tr><td>Centre</td><td><?php echo $row['centre']; ?></td></tr>
        </tbody>
    </table>

    <!-- VALIDATION -->
    <div class="validation-box">
        <div><strong> Lieu de validation</strong>Fait à la mairie de Sacré Cœur</div>
        <div><strong> Signature</strong>Signature de l'officier d'état civil</div>
    </div>

    <!-- ACTIONS -->
    <div class="actions-grid">

        <a href="https://wa.me/221789690557?text=Bonjour%20voici%20votre%20extrait%20de%20naissance%20:%20http://192.168.92.1/sacrecoeur/pdf/extrait_<?php echo $id_demande; ?>.pdf"
           target="_blank" class="btn btn-whatsapp">
            📱 Envoyer par WhatsApp
        </a>

        <a href="pdf/extrait_<?php echo $id_demande; ?>.pdf" download class="btn btn-download">
            ⬇️ Télécharger votre extrait
        </a>

        <a href="envoyeemail.php?id=<?php echo $id_demande; ?>" class="btn btn-email">
            ✉️ Envoyer par Email
        </a>

        <button onclick="window.print()" class="btn btn-print">
            🖨️ Imprimer
        </button>

        <a href="accueil.php" class="btn btn-back">
            ← Retour à l'accueil
        </a>

    </div>

</div>
</body>
</html>