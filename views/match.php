<div class="row">
    <div class="col-md-8">
        <h1><?= htmlspecialchars($match['home_team']) ?> vs <?= htmlspecialchars($match['away_team']) ?></h1>
        <div class="card mb-4">
            <div class="card-header">Détails du match</div>
            <div class="card-body">
                <p><strong>Date :</strong> <?= date('d/m/Y H:i', strtotime($match['match_date'])) ?></p>
                <p><strong>Stade :</strong> <?= htmlspecialchars($match['stadium']) ?></p>
                
                <h3>Billets disponibles</h3>
                <?php foreach($ticketCategories as $category): ?>
                    <div class="mb-3">
                        <h5><?= htmlspecialchars($category['name']) ?></h5>
                        <p>Prix : <?= number_format($category['price'], 2) ?> €</p>
                        <p>Places disponibles : <?= $category['quantity_available'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>