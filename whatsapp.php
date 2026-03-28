<?php
$connection = mysqli_connect("localhost","root","","actes");

$id_demande = $_GET['id'];

$demande = mysqli_query($connection,"SELECT * FROM demande WHERE id_demande='$id_demande'");
$row_demande = mysqli_fetch_assoc($demande);
$id_declaration = $row_demande['id_declaration'];

$declaration = mysqli_query($connection,"SELECT * FROM declaration WHERE id_declaration='$id_declaration'");
$row = mysqli_fetch_assoc($declaration);

$nom_complet  = $row['prenom_bebe'].' '.$row['nom_bebe'];
$date_naissance = $row['date_naissance'];
$pdf_url = "http://192.168.92.1/sacrecoeur/pdf/extrait_".$id_demande.".pdf";

$message_wa = urlencode(
    "Bonjour 👋,\n\n".
    "Voici l'extrait de naissance de *$nom_complet*,\n".
    "né(e) le : *$date_naissance*.\n\n".
    "📄 Télécharger le document ici :\n$pdf_url\n\n".
    "— Mairie de Sacré Cœur"
);

$numero = "221789690557";
$whatsapp_url = "https://wa.me/$numero?text=$message_wa";
?>
<!DOCTYPE html>
<html>
<head>
<title>Envoyer par WhatsApp</title>
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
        background: linear-gradient(120deg, #f5f7fb, #e8edf4);
        font-family: Arial, sans-serif;
        padding: 30px 20px;
        min-height: 100vh;
    }
    .card {
        background: white;
        border: 2px solid #2f5597;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        max-width: 520px;
        margin: 0 auto;
        padding: 30px;
    }
    header {
        background: linear-gradient(135deg, #25D366, #128C7E);
        padding: 18px;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 24px;
        box-shadow: 0 4px 15px rgba(37,211,102,0.4);
    }
    header h5 { color: white; font-size: 15px; letter-spacing: 0.5px; }

    .info-bebe {
        background: #f0fff4;
        border: 1.5px solid #86efac;
        border-radius: 10px;
        padding: 14px 18px;
        margin-bottom: 20px;
        font-size: 14px;
        color: #166534;
    }
    .info-bebe strong { display: block; margin-bottom: 6px; font-size: 13px; color: #6b7280; }

    .preview-message {
        background: #f0fdf4;
        border: 1.5px solid #25D366;
        border-radius: 10px;
        padding: 16px 18px;
        margin-bottom: 24px;
        font-size: 14px;
        color: #1a1a1a;
        white-space: pre-line;
        line-height: 1.7;
    }
    .preview-message strong { display: block; margin-bottom: 10px; color: #128C7E; font-size: 13px; }

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 15px;
        border-radius: 10px;
        border: none;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
        color: white;
        font-family: Arial, sans-serif;
        text-decoration: none;
        transition: background 0.2s, transform 0.1s;
        margin-bottom: 12px;
    }
    .btn:active { transform: scale(0.97); }
    .btn-wa   { background: #25D366; box-shadow: 0 4px 10px rgba(37,211,102,0.4); }
    .btn-wa:hover { background: #1ebe57; }
    .btn-back { background: #e53e3e; box-shadow: 0 4px 6px rgba(229,62,62,0.3); }
    .btn-back:hover { background: #c53030; }
</style>
</head>
<body>
<div class="card">

    <header>
        <h5>📱 ENVOYER L'EXTRAIT PAR WHATSAPP – MAIRIE DE SACRÉ CŒUR</h5>
    </header>

    <div class="info-bebe">
        <strong>Extrait pour :</strong>
        <?php echo $nom_complet; ?> — né(e) le <?php echo $date_naissance; ?>
    </div>

    <div class="preview-message">
        <strong>📋 Aperçu du message qui sera envoyé :</strong>
Bonjour 👋,

Voici l'extrait de naissance de *<?php echo $nom_complet; ?>*,
né(e) le : *<?php echo $date_naissance; ?>*.

📄 Télécharger le document ici :
<?php echo $pdf_url; ?>

— Mairie de Sacré Cœur
    </div>

    <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-wa">
        📱 Ouvrir WhatsApp et envoyer
    </a>

    <a href="extrait.php?id=<?php echo $id_demande; ?>" class="btn btn-back">
        ← Retour à l'extrait
    </a>

</div>
</body>
</html>