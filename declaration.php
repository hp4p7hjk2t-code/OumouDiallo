<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="form-container">
        <div class="top-band">Déclaration et demande d'extrait de naissance</div>
    <div class="info-block">Bienvenue, remplissez le formulaire de déclaration ici</div>
    <div class="form-wrap">

  <form method="post">

    <!-- Bébé -->
    <div class="card">
      <div class="section-header">
      
        <div>
          <div class="section-title">Identité du bébé</div>
        
        </div>
      </div><br><br>

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
          <label>Date de naissance</label>
          <input type="date" name="D">
        </div>
        <div class="field">
          <label>Heure de naissance</label>
          <input type="time" name="E">
        </div>
      </div>
    </div>

    <!-- Père -->
    <div class="card">
      <div class="section-header">
       
        <div>
          <div class="section-title">Informations du père</div>
        
        </div><br><br>
      </div>

      <div class="field-grid">
        <div class="field">
          <label>Nom</label>
          <input type="text" name="F" placeholder="Nom de famille">
        </div>
        <div class="field">
          <label>Prénom</label>
          <input type="text" name="G" placeholder="Prénom">
        </div>
      </div>

      <div class="divider"></div>

      <div class="field-grid thirds">
        <div class="field">
          <label>Date de naissance</label>
          <input type="date" name="H">
        </div>
        <div class="field">
          <label>Profession</label>
          <input type="text" name="I" placeholder="Profession">
        </div>
        <div class="field">
          <label>Nationalité</label>
          <input type="text" name="J" placeholder="Ex: Sénégalaise">
        </div>
      </div>
    </div>

    <!-- Mère -->
    <div class="card">
      <div class="section-header">
        <div>
          <div class="section-title">Informations de la mère</div>
        
        </div>
      </div><br><br>

      <div class="field-grid">
        <div class="field">
          <label>Nom</label>
          <input type="text" name="K" placeholder="Nom de famille">
        </div>
        <div class="field">
          <label>Prénom</label>
          <input type="text" name="L" placeholder="Prénom">
        </div>
      </div>

      <div class="divider"></div>

      <div class="field-grid thirds">
        <div class="field">
          <label>Date de naissance</label>
          <input type="date" name="M">
        </div>
        <div class="field">
          <label>Profession</label>
          <input type="text" name="N" placeholder="Profession">
        </div>
        <div class="field">
          <label>Nationalité</label>
          <input type="text" name="O" placeholder="Ex: Sénégalaise">
        </div>
      </div>
    </div>

    <!-- Déclarant & Filiation -->
    <div class="card">
      <div class="section-header">
        <div>
          <div class="section-title">Déclarant & filiation</div>
        
        </div>
      </div><br><br>

      <div class="field-grid">
        <div class="field">
          <label>Filiation des parents</label>
          <input type="text" name="P" placeholder="Ex: Mariés, Concubinage...">
        </div>
        <div class="field">
          <label>Déclarant</label>
          <input type="text" name="Q" placeholder="Nom du déclarant">
        </div>
      </div>

      <div class="divider"></div>

      <div class="field-grid">
        <div class="field">
          <label>Lien avec l'enfant</label>
            <input type="text" name="R" placeholder="Ex: Père, Mère, Tuteur...">
        </div>
        <div class="field">
          <label>Adresse</label>
          <input type="text" name="S" placeholder="Adresse complète">
        </div>
      </div>

      <div class="divider"></div>

      <div class="field-grid thirds">
        <div class="field">
          <label>Ville</label>
          <input type="text" name="T" placeholder="Ville">
        </div>
        <div class="field">
          <label>Quartier</label>
          <input type="text" name="U" placeholder="Quartier">
        </div>
        <div class="field">
          <label>Centre d'état civil</label>
          <input type="text" name="V" placeholder="Centre">
        </div>
      </div>
    </div>

<button type="submit" name="enregistrer" class="btn-submit">Envoyer la demande</button>
  </form>

  <a href="accueil.php" class="retour">← Retour à l'accueil</a>
  <style>
    .btn-submit { width: 100%; padding: 12px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; border: none; background: #1D9E75; color: #fff; transition: background 0.2s; margin-top: 1rem; }
    .section-title{
 width: 2; padding: 5px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; border: none; background: #210aa7; color: #fff; transition: background 0.2s; margin-top: 5rem;
text-align: center; } 

        

    
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
        .form-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: #ffffff;
            border: 1px solid #dcdcdc;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .info-block {
            background: #007bff;
            color: white;
            margin: 0 auto 20px;
            padding: 12px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            max-width: 900px;
            text-align: center;
            font-weight: bold;
        }
        .field-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 10px;
}

.field {
    display: flex;
    flex-direction: column;
}

.field label{
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

/* Champs */
.field input{
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 14px;
    transition: all 0.3s ease;
}

/* Effet au survol */
.field input:hover{
    border-color: #1D9E75;
}

/* Effet quand on clique dans le champ */
.field input:focus{
    border-color: #1D9E75;
    box-shadow: 0 0 6px rgba(29,158,117,0.4);
    outline: none;
    transform: scale(1.02);
}

/* Responsive mobile */
@media (max-width:600px){
    .field-grid{
        grid-template-columns: 1fr;
    }
}
  
  </style>
</div>
<?php


$A = $_POST['A'] ?? "";
$B = $_POST['B'] ?? "";
$C = $_POST['C'] ?? "";
$D = $_POST['D'] ?? "";
$E = $_POST['E'] ?? "";
$F = $_POST['F'] ?? "";
$G = $_POST['G'] ?? "";
$H = $_POST['H'] ?? "";
$I = $_POST['I'] ?? "";
$J = $_POST['J'] ?? "";
$K = $_POST['K'] ?? "";
$L = $_POST['L'] ?? "";
$M = $_POST['M'] ?? "";
$N = $_POST['N'] ?? "";
$O = $_POST['O'] ?? "";
$P = $_POST['P'] ?? "";
$Q = $_POST['Q'] ?? "";
$R = $_POST['R'] ?? "";
$S = $_POST['S'] ?? "";
$T = $_POST['T'] ?? "";
$U = $_POST['U'] ?? "";
$V = $_POST['V'] ?? "";




     
     $CONNECTION=mysqli_connect("localhost","root","","actes");
     $REQUET=mysqli_query($CONNECTION, " INSERT INTO declaration(nom_bebe, prenom_bebe, sexe, date_naissance, heure_naissance, nom_pere, prenom_pere, date_naissance_pere, profession_pere, nationalite_pere,nom_mere, prenom_mere, date_naissance_mere,profession_mere, nationalite_mere, filiation, declarant, lien_enfant, adresse, ville, quartier, centre) VALUES ('$A','$B','$C','$D','$E','$F','$G','$H','$I','$J','$K','$L','$M','$N','$O','$P','$Q','$R','$S','$T' ,'$U','$V')");
?>

</body>
</html>