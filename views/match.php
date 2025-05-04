<div class="container mt-4">
    <?php if($match): ?>
        <h1><?= htmlspecialchars($match['home_team'] ?? '') ?> vs <?= htmlspecialchars($match['away_team'] ?? '') ?></h1>
        
        <div class="card mb-4">
            <div class="card-header">
                Détails du match
            </div>
            <div class="card-body">
                <p><strong>Date :</strong> <?= date('d/m/Y H:i', strtotime($match['match_date'])) ?></p>
                <p><strong>Ligue :</strong> <?= htmlspecialchars($match['league']) ?></p>
                <p><strong>Stade :</strong> <?= htmlspecialchars($match['stadium']) ?></p>
            </div>
        </div>

        <h3>Billets disponibles</h3>
        <?php if(!empty($ticketCategories)): ?>
            <ul class="list-group">
                <?php foreach($ticketCategories as $category): ?>
                    <li class="list-group-item">
                        <?= htmlspecialchars($category['name']) ?> - 
                        <?= number_format($category['price'], 2) ?> €
                        (<?= $category['quantity_available'] ?> disponibles)
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div class="alert alert-warning">Aucun billet disponible pour ce match.</div>
        <?php endif; ?>
    <?php else: ?>
        <div class="alert alert-danger">Match non trouvé.</div>
    <?php endif; ?>
</div>