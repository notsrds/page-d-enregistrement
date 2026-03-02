<?php
// script utilitaire pour initialiser la base de données SQLite
// lancez-le une fois depuis la ligne de commande :
//    php init.php
// ou depuis un navigateur (si le serveur est déjà en route)

require 'config.php';

try {
    $sql = <<<'SQL'
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL UNIQUE,
    mot_de_passe TEXT NOT NULL,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);
SQL;

    $pdo->exec($sql);
    echo "Table 'utilisateurs' est prête.\n";
} catch (PDOException $e) {
    die("Erreur lors de la création de la table : " . $e->getMessage());
}
