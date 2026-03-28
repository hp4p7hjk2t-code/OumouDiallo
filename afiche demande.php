<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des demandes</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h5 { text-align: center; }
    </style>

</head>
<body>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "actes");
    if (!$connection) {
        die('Connexion impossible : ' . mysqli_connect_error());
    }

    if (isset($_GET['delete_id'])) {
        $delete_id = intval($_GET['delete_id']);
        mysqli_query($connection, "DELETE FROM demande WHERE id_demande = $delete_id");
        header('Location: afiche demande.php');
        exit;
    }
    ?>

    <header>
        <h5>DEMANDES D’EXTRAIT DE NAISSANCE – MAIRIE DE SACRÉ CŒUR</h5>
    </header>

    <table>
        <tr>
           
            <th>ID Demande</th>
            <th>ID Déclaration</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Telephone</th>
            <th>Date naissance</th>
            <th>Nom père</th>
            <th>Prénom père</th>
            <th>Nom mère</th>
            <th>Prénom mère</th>
            <th>Email</th>
            <th>date demande</th>
            <th>Statut</th>
            <th>Action</th>
            <th>Extraction</th>
            <th>Supprimer</th>
           
        </tr>
       

        <?php
        $connection = mysqli_connect("localhost", "root", "", "actes");
        $A="SELECT *  FROM demande";
        $result = mysqli_query($connection, $A);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                $pdfFileName = 'extrait_' . $row['id_demande'] . '.pdf';
                $pdfFilePath = 'pdf/' . $pdfFileName;
                $pdfUrl = 'http://192.168.92.1/sacrecoeur/' . $pdfFilePath;

                echo "<tr>";
                echo "<td>".$row['id_demande']."</td>";
                echo "<td>".$row['id_declaration']."</td>";
                 echo "<td>".$row['nom']."</td>";
                 echo "<td>".$row['prenom']."</td>";
                 echo "<td>".$row['sexe']."</td>";
                 echo "<td>".$row['telephone']."</td>";
                 echo "<td>".$row['date_naissance']."</td>";
                 echo "<td>".$row['nom_pere']."</td>";
                 echo "<td>".$row['prenom_pere']."</td>";
                 echo "<td>".$row['nom_mere']."</td>";
                 echo "<td>".$row['prenom_mere']."</td>";
                 echo "<td>".$row['email']."</td>";
                 echo "<td>".$row['date_demande']."</td>";
                 echo "<td>".$row['statut']."</td>";
                 echo "<td><a href='verification_demande.php?id=".$row['id_demande']."' class='btn-verifier'>Vérifier</a></td>";
                 echo "<td><a href='genere_pdf.php?id=".$row['id_demande']."' class='btn-extraction'>Partage</a></td>";
                 echo "<td><a href='afiche demande.php?delete_id=".$row['id_demande']."' class='btn-supprimer' onclick='return confirm(\"Confirmer la suppression de cette demande ?\")'>Supprimer</a></td>";
                 echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='17'>Aucune demande trouvée</td></tr>";
        
        }
        ?>
    
    </table>
    <style>
table {
text-align: center;
border-collapse: collapse;
width: 90%;s
margin-top: auto;
border: 2px solid black;
font-size: 12px;
}

th, td {
border: 2px solid black;
padding: 8px;
text-align: left;
}

th {
background-color: #f2f2f2;
}

h5 {
text-align: center;
}

/* bouton vérifier */
.btn-verifier{
background-color: #007bff;
color: white;
padding: 6px 12px;
text-decoration: none;
border-radius: 5px;
box-shadow: 0 3px 6px rgba(0,0,0,0.3);
}

/* bouton extraction */
.btn-extraction{
background-color: #28a745;
color: white;
padding: 6px 12px;
text-decoration: none;
border-radius: 5px;
box-shadow: 0 3px 6px rgba(0,0,0,0.3);
}

/* bouton partage */
.btn-partage {
background-color: #6c757d;
color: white;
padding: 6px 10px;
text-decoration: none;
border: none;
border-radius: 5px;
font-size: 12px;
margin: 2px;
}

.btn-partage:hover {
background-color: #5a6268;
}

.btn-supprimer {
    background-color: #dc3545;
    color: white;
    padding: 6px 10px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 12px;
    margin: 2px;
    display: inline-block;
}

.btn-supprimer:hover {
    background-color: #c82333;
}
        .top-band {
            background-color: #007bff;
        }
        .retour{
        background-color: #dc3545;
    color: white;
    padding: 6px 10px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 12px;
    margin: 2px;
    display: inline-block;
    }

</style>
  <a href="accueil.php" class="retour">← Retour à l'accueil</a>


</body>
</html>