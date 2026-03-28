<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Demande extrait</title>
</head>

<body>

<form method="post">
<div class="form-wrap">

         <div class="top-band">Faite une demande d'extrait de naissance</div>


  <form method="post">

    <!-- Demandeur -->
    <div class="card">
      <div class="section-header">
        <div class="section-icon icon-baby">👤</div>
        <div>
          <div class="section-title">Informations du demandeur</div>
          <div class="section-subtitle">Identité et coordonnées</div>
        </div>
      </div>

      <div class="field-grid">
        <div class="field">
          <label>Nom</label>
          <input type="text" name="A" placeholder="Nom de famille">
        </div>
        <div class="field">
          <label>Prénom</label>
          <input type="text" name="B" placeholder="Prénom">
        </div>
      </div>

      <div class="divider"></div>

      <div class="field-grid thirds">
        <div class="field">
          <label>Sexe</label>
          <select name="C">
            <option value="M">Masculin</option>
            <option value="F">Féminin</option>
          </select>
        </div>
        <div class="field">
          <label>Téléphone</label>
          <input type="text" name="D" placeholder="Ex: 77 000 00 00">
        </div>
        <div class="field">
          <label>Email</label>
          <input type="text" name="E" placeholder="email@exemple.com">
        </div>
      </div>

      <div class="divider"></div>

      <div class="field-grid">
        <div class="field">
          <label>Date de naissance</label>
          <input type="date" name="F">
        </div>
      </div>
    </div>

    <!-- Père -->
    <div class="card">
      <div class="section-header">
        <div class="section-icon icon-father">👨</div>
        <div>
          <div class="section-title">Informations du père</div>
          <div class="section-subtitle">Pour retrouver la déclaration</div>
        </div>
      </div>

      <div class="field-grid">
        <div class="field">
          <label>Nom du père</label>
          <input type="text" name="G" placeholder="Nom de famille">
        </div>
        <div class="field">
          <label>Prénom du père</label>
          <input type="text" name="H" placeholder="Prénom">
        </div>
      </div>
    </div>

    <!-- Mère -->
    <div class="card">
      <div class="section-header">
        <div class="section-icon icon-mother">👩</div>
        <div>
          <div class="section-title">Informations de la mère</div>
          <div class="section-subtitle">Pour retrouver la déclaration</div>
        </div>
      </div>

      <div class="field-grid">
        <div class="field">
          <label>Nom de la mère</label>
          <input type="text" name="I" placeholder="Nom de famille">
        </div>
        <div class="field">
          <label>Prénom de la mère</label>
          <input type="text" name="K" placeholder="Prénom">
        </div>
      </div>
    </div>

    <button type="submit" name="enregistrer" class="btn-submit">Envoyer la demande</button>

  </form>

  <a href="accueil.php" class="retour">← Retour à l'accueil</a>
<style>
.btn-submit { width: 100%; padding: 12px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; border: none; background: #1D9E75; color: #fff; transition: background 0.2s; margin-top: 1rem; }
.btn-submit:hover { background: #0F6E56; }
.retour { display: block; text-align: center; margin-top: 1rem; font-size: 13px; color: #1D9E75; text-decoration: none; }
.retour:hover { text-decoration: underline; }
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
 body {
            background-color: #f6f2eb;
            margin: 0;
            padding-top: 55px;
            font-family: Arial, sans-serif;
        }
        .top-band {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background: linear-gradient(90deg, #009900 0%, #ffcc00 50%, #cc0000 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            z-index: 999;
        }
        .card{
    background:#ffffff;
    padding:20px;
    border-radius:10px;
    margin-top:20px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.section-header{
    display:flex;
    align-items:center;
    gap:15px;
}

/* Icône */
.section-icon{
    width:45px;
    height:45px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    border-radius:50%;
    background:#1D9E75;
    color:white;
}

/* Titre */
.section-title{
    font-size:18px;
    font-weight:bold;
    color:#333;
}

/* Sous titre */
.section-subtitle{
    font-size:13px;
    color:#666;
    margin-top:3px;
}
/* Grille des champs */
.field-grid{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:20px;
    margin-top:15px;
}

/* Bloc champ */
.field{
    display:flex;
    flex-direction:column;
}

/* Label */
.field label{
    font-size:14px;
    font-weight:600;
    color:#444;
    margin-bottom:6px;
}

/* Champ input */
.field input{
    padding:12px;
    border-radius:8px;
    border:1px solid #ccc;
    font-size:14px;
    transition:all 0.3s ease;
}

/* Effet hover */
.field input:hover{
    border-color:#1D9E75;
}

/* Effet focus */
.field input:focus{
    border-color:#1D9E75;
    box-shadow:0 0 6px rgba(29,158,117,0.4);
    outline:none;
    transform:scale(1.02);
}

/* Placeholder */
.field input::placeholder{
    color:#999;
}

/* Responsive mobile */
@media (max-width:600px){
    .field-grid{
        grid-template-columns:1fr;
    }
}
        
</style>




<?php

if(isset($_POST['enregistrer'])){

$A = $_POST["A"];
$B = $_POST["B"];
$C = $_POST["C"];
$D = $_POST["D"];
$G = $_POST["E"];
$H = $_POST["F"];
$L = $_POST["G"];
$M = $_POST["H"];
$O = $_POST["I"];
$N = $_POST["K"];

$connection = mysqli_connect("localhost","root","","actes");

# 1️⃣ chercher la déclaration correspondante
$recherche = mysqli_query($connection,"
SELECT id_declaration
FROM declaration
WHERE date_naissance='$D'
AND nom_pere='$G'
AND prenom_pere='$H'
AND nom_mere='$L'
AND prenom_mere='$M'
");

if(mysqli_num_rows($recherche) > 0){

$row = mysqli_fetch_assoc($recherche);

$id_declaration = $row['id_declaration'];

# 2️⃣ insérer la demande avec le bon id_declaration
$requete = "INSERT INTO demande
(id_declaration, nom , prenom, sexe, telephone, email, date_naissance, nom_pere, prenom_pere, nom_mere, prenom_mere, statut)
VALUES
('$id_declaration','$A','$B','$C','$D','$E','$F','$G','$H','$I','$K','en attente')";

mysqli_query($connection,$requete);

echo "Demande enregistrée avec succès";

}else{
echo "Aucune déclaration trouvée pour ces informations. Veuillez vérifier les données saisies.";

}

}
?>

</body>
</html>
