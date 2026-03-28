<?php
$connection = mysqli_connect("localhost","root","","actes");

$id_demande = $_GET['id'];

$demande = mysqli_query($connection,"SELECT * FROM demande WHERE id_demande='$id_demande'");
$row_demande = mysqli_fetch_assoc($demande);
$id_declaration = $row_demande['id_declaration'];

$declaration = mysqli_query($connection,"SELECT * FROM declaration WHERE id_declaration='$id_declaration'");
$row = mysqli_fetch_assoc($declaration);

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_dest = $_POST['email_destinataire'];
    $nom_complet = $row['prenom_bebe'].' '.$row['nom_bebe'];
    $pdf_path = 'pdf/extrait_'.$id_demande.'.pdf';

    // Paramètres mail
    $sujet = "Extrait de naissance - ".$nom_complet;
    $corps = "Bonjour,\n\nVeuillez trouver ci-joint l'extrait de naissance de $nom_complet.\n\nCordialement,\nMairie de Sacré Cœur";
    $boundary = md5(time());

    $headers  = "From: mairie@sacrecoeur.sn\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    $body  = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
    $body .= $corps."\r\n";

    if (file_exists($pdf_path)) {
        $pdf_data = chunk_split(base64_encode(file_get_contents($pdf_path)));
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: application/pdf; name=\"extrait_naissance.pdf\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "Content-Disposition: attachment; filename=\"extrait_naissance.pdf\"\r\n\r\n";
        $body .= $pdf_data."\r\n";
    }

    $body .= "--$boundary--";

    if (mail($email_dest, $sujet, $body, $headers)) {
        $message = "success";
    } else {
        $message = "error";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Envoyer par Email</title>
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
        background: linear-gradient(135deg, #f97316, #ea580c);
        padding: 18px;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 24px;
        box-shadow: 0 4px 15px rgba(249,115,22,0.4);
    }
    header h5 {
        color: white;
        font-size: 15px;
        letter-spacing: 0.5px;
    }
    .info-bebe {
        background: #f0f5ff;
        border: 1.5px solid #bfdbfe;
        border-radius: 10px;
        padding: 14px 18px;
        margin-bottom: 24px;
        font-size: 14px;
        color: #1e3a8a;
    }
    .info-bebe strong { display: block; margin-bottom: 6px; font-size: 13px; color: #6b7280; }
    label {
        display: block;
        font-size: 14px;
        font-weight: bold;
        color: #1e3a8a;
        margin-bottom: 8px;
    }
    input[type="email"] {
        width: 100%;
        padding: 13px 16px;
        border: 2px solid #bfdbfe;
        border-radius: 10px;
        font-size: 15px;
        outline: none;
        transition: border 0.2s;
        margin-bottom: 20px;
    }
    input[type="email"]:focus { border-color: #1a56db; }
    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 14px;
        border-radius: 10px;
        border: none;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
        color: white;
        font-family: Arial, sans-serif;
        transition: background 0.2s, transform 0.1s;
        text-decoration: none;
    }
    .btn:active { transform: scale(0.97); }
    .btn-send { background: #f97316; box-shadow: 0 4px 10px rgba(249,115,22,0.4); margin-bottom: 12px; }
    .btn-send:hover { background: #ea6a05; }
    .btn-back { background: #e53e3e; box-shadow: 0 4px 6px rgba(229,62,62,0.3); }
    .btn-back:hover { background: #c53030; }
    .alert {
        padding: 14px 18px;
        border-radius: 10px;
        margin-bottom: 20px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
    }
    .alert-success { background: #dcfce7; color: #166534; border: 1.5px solid #86efac; }
    .alert-error   { background: #fee2e2; color: #991b1b; border: 1.5px solid #fca5a5; }
</style>
</head>
<body>
<div class="card">

    <header>
        <h5>✉️ ENVOYER L'EXTRAIT PAR EMAIL – MAIRIE DE SACRÉ CŒUR</h5>
    </header>

    <?php if ($message === "success"): ?>
        <div class="alert alert-success">✅ Email envoyé avec succès !</div>
    <?php elseif ($message === "error"): ?>
        <div class="alert alert-error">❌ Échec de l'envoi. Vérifiez la configuration mail.</div>
    <?php endif; ?>

    <div class="info-bebe">
        <strong>Extrait pour :</strong>
        <?php echo $row['prenom_bebe'].' '.$row['nom_bebe']; ?> —
        né(e) le <?php echo $row['date_naissance']; ?>
    </div>

    <form method="POST">
        <label for="email_destinataire">📧 Adresse email du destinataire</label>
        <input type="email" name="email_destinataire" id="email_destinataire"
               placeholder="exemple@email.com" required>

        <button type="submit" class="btn btn-send">✉️ Envoyer l'extrait par Email</button>
    </form>

    <a href="extrait.php?id=<?php echo $id_demande; ?>" class="btn btn-back">← Retour à l'extrait</a>

</div>
</body>
</html>