# Projet : Enregistrement utilisateur simple

## Description
Cette petite application permet d’enregistrer des utilisateurs dans une base MySQL avec email et mot de passe. Le mot de passe est sécurisé via **bcrypt**.

## Structure
- `index.html` : formulaire d'inscription
- `register.php` : traitement et insertion
- `config.php` : connexion à la base de données

## Utilisation
1. Créer la base MySQL et la table `utilisateurs` :
```

## Mise en route rapide
1. Installez PHP (XAMPP/WAMP ou package officiel) et assurez-vous que la commande `php` est disponible dans un terminal Windows.
2. Créez une base MySQL et un utilisateur si nécessaire, puis adaptez `config.php` avec ces informations.
3. Dans le dossier du projet, lancez :
   ```bash
   php init.php    # crée la table si besoin
   php -S localhost:8000 -t .
   ```
4. Visitez `http://localhost:8000` dans votre navigateur et testez le formulaire d'inscription.

> Si la commande `php` n'est pas reconnue, ajoutez l'exécutable à votre PATH ou servez le projet via Apache/Nginx de votre stack.
sql
CREATE TABLE utilisateurs (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);