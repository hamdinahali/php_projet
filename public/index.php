<?php

file_put_contents(__DIR__.'/debug.log', "Accès à index.php\n", FILE_APPEND);
// ... reste du code
require __DIR__.'/../config/bootstrap.php';

header("Location: match.php?id=1");
exit;