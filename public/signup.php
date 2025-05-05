<?php
require_once __DIR__.'/../config/bootstrap.php';
$pageTitle = "Inscription";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire ici
}

require __DIR__.'/../views/header.php';
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow">
            <div class="card-body p-4">
                <h2 class="text-center mb-4">Inscription</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                </form>
                <div class="text-center mt-3">
                    <a href="/php_projet/public/login.php">Déjà un compte ? Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__.'/../views/footer.php'; ?>