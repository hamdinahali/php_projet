<div class="row">
    <div class="col-md-8">
        <h2>Prochains matchs</h2>
        <div class="row">
            <?php foreach ($upcomingMatches as $match): ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <?= htmlspecialchars($match['league']) ?>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="text-center">
                                    <h5><?= htmlspecialchars($match['home_team']) ?></h5>
                                </div>
                                <div class="text-center">
                                    <span class="badge bg-secondary">VS</span>
                                </div>
                                <div class="text-center">
                                    <h5><?= htmlspecialchars($match['away_team']) ?></h5>
                                </div>
                            </div>
                            <p class="card-text">
                                <i class="bi bi-calendar"></i> 
                                <?= date('d/m/Y H:i', strtotime($match['match_date'])) ?>
                            </p>
                            <p class="card-text">
                                <i class="bi bi-geo-alt"></i> 
                                <?= htmlspecialchars($match['stadium']) ?>, <?= htmlspecialchars($match['location']) ?>
                            </p>
                            <a href="match.php?id=<?= $match['id'] ?>" class="btn btn-primary">Réserver</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                Calendrier
            </div>
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>