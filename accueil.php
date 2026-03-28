<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Mairie Sacré-Cœur</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #cfe8ff 0%, #dff7ff 100%);
            min-height: 100vh;
        }
        .top-band {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 45px;
            background: linear-gradient(90deg, #009900 0%, #ffcc00 50%, #cc0000 100%);
            z-index: 999;
        }
        .band-text {
            position:relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-weight: bold;
            font-size: 12px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        .page-banner {
            margin-top: 70px;
            background: linear-gradient(135deg, #90e0ef 0%, #48cae4 100%);
            padding: 14px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 85%;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
        .banner-content {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #04396b;
            font-weight: 600;
            font-size: 14px;
        }
        .banner-flag {
            height: 45px;
            width: 45px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.8);
            object-fit: cover;
        }
        .content-container {
            margin: 30px auto 20px;
            width: 80%;
            max-width: 680px;
        }
        .content-container .d-flex {
            justify-content: center;
        }
        .btn-custom {
            width: 70%;
            min-width: 220px;
            margin: 0 auto;
            box-shadow: 0 8px 20px rgba(0, 92, 173, 0.25);
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 11px 26px rgba(0, 92, 173, 0.35);
        }
        .btn-custom:active {
            transform: translateY(0);
            box-shadow: 0 6px 14px rgba(0, 62, 118, 0.35);
        }
        .btn-blue {
            background-color: #0096c7;
            color: white;
            border: 1px solid #0077a8;
        }
        .btn-sky {
            background-color: #48cae4;
            color: white;
            border: 1px solid #1db5d8;
        }
        .btn-mint {
            background-color: #90e0ef;
            color: #023e8a;
            border: 1px solid #52b8d2;
        }
        .flag-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            height: 35px;
            width: 35px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3), 0 0 15px rgba(255,255,255,0.4);
            border: 2px solid rgba(255,255,255,0.6);
        }
    
    </style>
</head>
<body class="bg-light">
<div class="top-band">
      <div class="band-text">REPUBLIQUE DU SENEGALE Bienvenue sur le portail officiel de la mairie de Sacré-Cœur. Utilisez les liens ci-dessous pour déclarer ou demander un extrait de naissance.</div><br></p>
   
    <img src="drapeau.png" alt="Drapeau" class="flag-icon">
    </div>
</div><br><br>

<!-- Conteneur principal -->

<div class="container">
    

    <!-- Navigation avec boutons -->

   <div class="content-container shadow p-3 mb-3 bg-body rounded">  <div class="d-flex flex-column gap-3 mb-4">
        <a href="declaration.php" class="btn btn-custom btn-blue btn-lg">Déclaration de naissance</a>
          </div>
    </div>

     <div class="content-container shadow p-3 mb-3 bg-body rounded">  <div class="d-flex flex-column gap-3 mb-4">
        <a href="demamde.php" class="btn btn-custom btn-sky btn-lg">Demande d'extrait de naissance</a>
          </div>
</div>
           <div class="content-container shadow p-3 mb-3 bg-body rounded">  <div class="d-flex flex-column gap-3 mb-4">
        <a href="afiche demande.php" class="btn btn-custom btn-mint btn-lg">Affichage les demandes en cours</a>
          </div>
    </div>
    <!-- Collapse example -->
   
        <div class="collapse mt-2" id="collapseExample">
            <div class="card card-body">
                Contenu affiché/masqué
            
        </div>
    </div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>