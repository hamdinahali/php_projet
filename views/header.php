<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'FootTickets' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/php_projet/assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/php_projet/public/">
                <i class="fas fa-ticket-alt me-2"></i>FootTickets
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/php_projet/public/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php_projet/public/match.php?id=1">Matchs</a>
                    </li>
                </ul>
                
                <?php if (isset($_SESSION['user'])): ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-1"></i>
                                <?= htmlspecialchars($_SESSION['user']['username']) ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/php_projet/public/profile.php">Profil</a></li>
                                <li><a class="dropdown-item" href="/php_projet/public/reservations.php">Mes réservations</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item text-danger" href="/php_projet/public/logout.php">
                                        <i class="fas fa-sign-out-alt me-1"></i> Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/php_projet/public/login.php">
                                <i class="fas fa-sign-in-alt me-1"></i> Connexion
                            </a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="btn btn-outline-light" href="/php_projet/public/signup.php">
                                <i class="fas fa-user-plus me-1"></i> Inscription
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container mt-4">