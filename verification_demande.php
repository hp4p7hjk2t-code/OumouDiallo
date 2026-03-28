<?php
$connection = mysqli_connect("localhost", "root", "", "actes");
if(!$connection){
    die("Erreur de connexion : ".mysqli_connect_error());
}

// Vérifier si un ID de demande est passé
if(!isset($_GET['id'])){
    die("ID de demande manquant !");
}

$id_demande = intval($_GET['id']);

// Récupérer la demande et les informations de la déclaration correspondante
$sql = "SELECT d.*, c.nom_bebe, c.prenom_bebe, c.sexe AS sexe_bebe, c.date_naissance AS date_naissance_bebe,
               c.nom_pere, c.prenom_pere, c.nom_mere, c.prenom_mere
        FROM demande d
        LEFT JOIN declaration c ON d.id_declaration = c.id_declaration
        WHERE d.id_demande = $id_demande";

$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) == 0){
    die("Demande introuvable !");
}

$row = mysqli_fetch_assoc($result);

// Vérification automatique : la naissance existe dans declaration ?
$verif_sql = "SELECT * FROM declaration WHERE id_declaration = ".$row['id_declaration'];
$verif_result = mysqli_query($connection, $verif_sql);
$naissance_exist = mysqli_num_rows($verif_result) > 0;

// Traitement du formulaire Valider / Rejeter
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = intval($_POST['id_demande']);

    if(isset($_POST['valider'])){
        if($naissance_exist){
            mysqli_query($connection, "UPDATE demande SET statut='validée' WHERE id_demande=$id");
            $message = "✅ Demande validée avec succès !";
        } else {
            $message = "❌ Impossible de valider : la naissance n'existe pas dans le registre.";
        }
    }

    if(isset($_POST['rejeter'])){
        mysqli_query($connection, "UPDATE demande SET statut='rejetée' WHERE id_demande=$id");
        $message = "⚠️ Demande rejetée !";
    }

    // Rafraîchir les données pour afficher le nouveau statut
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification de la demande</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .info { margin-bottom: 15px; }
        .message { font-weight: bold; margin-top: 10px; }
        button { margin-right: 10px; padding: 8px 15px; }
    </style>
</head>
<body>
    <h2>Vérification de la demande ID : <?php echo $row['id_demande']; ?></h2>

    <?php if(isset($message)) echo "<p class='message'>$message</p>"; ?>

    <div class="info">
        <p><strong>Bébé :</strong> <?php echo $row['nom_bebe']." ".$row['prenom_bebe']; ?></p>
        <p><strong>Sexe :</strong> <?php echo $row['sexe']; ?></p>
        <p><strong>Date de naissance :</strong> <?php echo $row['date_naissance']; ?></p>
        <p><strong>Père :</strong> <?php echo $row['nom_pere']." ".$row['prenom_pere']; ?></p>
        <p><strong>Mère :</strong> <?php echo $row['nom_mere']." ".$row['prenom_mere']; ?></p>
        <p><strong>Statut actuel :</strong> <?php echo $row['statut']; ?></p>
    </div>

    <?php if($naissance_exist): ?>
        <p style="color:green;">La naissance est enregistrée dans le registre.</p>
    <?php else: ?>
        <p style="color:red;">La naissance n'existe pas dans le registre.</p>
    <?php endif; ?>

    <form method="post">
        <input type="hidden" name="id_demande" value="<?php echo $row['id_demande']; ?>">
        <button type="submit" name="valider" <?php echo (!$naissance_exist) ? "disabled" : ""; ?>>Valider</button>
        <button type="submit" name="rejeter">Rejeter</button>
    </form>

    <p><a href="afiche%20demande.php">← Retour à la liste des demandes</a></p>
</body>
</html>