<?php
session_start();
$message = ""; // variable pour message d'erreur

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "1234"){
        $_SESSION['user'] = $user;
        header("location: accueil.php");
        exit();
    } else {
        $message = "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5deb3 0%, #e8d5b7 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-5">

            <!-- Card de connexion -->
            <div class="card shadow-lg">
                <div class="card-header text-center bg-info text-white">
                    <h4>Connexion Admin</h4>
                </div>

                <div class="card-body">
                    <!-- Message d'erreur -->
                    <?php if($message != ""): ?>
                        <div class="alert alert-danger"><?php echo $message; ?></div>
                    <?php endif; ?>

                    <!-- Formulaire -->
                    <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nom utilisateur</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="login" class="btn btn-primary">Se connecter</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- fin card -->

        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>