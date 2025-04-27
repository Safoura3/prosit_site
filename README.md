# prosit_site


# Lebonplan

Projet PHP réalisé dans le cadre d'un exercice scolaire.

## Description

Lebonplan est un site web d'annonces d'offres avec la possibilité de :

- **Consulter les offres disponibles** 
- **Cliquer sur une offre** pour accéder à un formulaire personnalisé adapté à l'offre choisie.
- **Ajouter des offres à une wishlist personnelle** (fonctionnalité non terminée actuellement).
- **Gérer son compte** (inscription / connexion) avec un message de confirmation .
- **Accéder aux mentions légales**.
- **Naviguer sur la pages "postuler" via un menu burger responsive** (réalisé en JavaScript).
- **Postuler directement à une offre** depuis la page des offres avec un bouton "Postuler" qui renvoie à un formulaire pré-rempli avec les informations de l'offre.
- **Télécharger un CV et l'envoyer** via le formulaire de candidature.
- **Bouton de retour en haut** disponible sur toutes les pages principales.

## Technologies utilisées

- **PHP**
- **HTML / CSS**
- **JavaScript** (menu burger, gestion dynamique des formulaires)
- **Serveur local XAMPP** (Apache, MySQL)
- **Base de données MySQL**

## Installation

### Prérequis

- **Apache** : Assurez-vous d'avoir installé un serveur local comme XAMPP.
- **PHP** : Le projet utilise PHP, donc vous devez également avoir PHP installé avec XAMPP ou MAMP.
- **MySQL** : Une base de données MySQL doit être configurée pour ce projet.

### Instructions d'installation en local

1. Cloner le dépôt sur votre machine locale :

   ```bash
   git clone [url-du-repo]
   ```

2. Placer le dossier du projet dans le répertoire `htdocs` pour XAMPP (ou dans le dossier correspondant pour MAMP).

3. Lancer Apache et MySQL via XAMPP.

4. Créer la base de données :

   - Ouvrir phpMyAdmin via `http://localhost/phpmyadmin/`.
   - Créer une base de données nommée `safoura_db` (ou un autre nom de votre choix).
   - Importer le fichier SQL contenant les tables `entreprises` et `offres` dans cette base de données.

5. Configurer la connexion à la base de données :

   Ouvrez le fichier `db.php` situé dans le dossier `/script/models/` et mettez à jour les informations suivantes pour correspondre à votre environnement local :
   ```php
   $host = 'localhost';  // Ou l'adresse de votre serveur de base de données
   $dbname = 'safoura_db'; // Nom de la base de données
   $username = 'root';    // Nom d'utilisateur par défaut de MySQL
   $password = '';        // Mot de passe, généralement vide par défaut sur XAMPP
   ```

6. Accéder au projet via votre navigateur :
   ```bash
   http://localhost/script/
   ```

### Installation des dépendances (si nécessaire)

Si des dépendances doivent être installées via Composer, assurez-vous d'avoir Composer installé sur votre machine. Pour récupérer les dépendances, exécutez la commande suivante dans le répertoire du projet :

```bash
composer install
```

Note : Ce projet ne nécessite pas de dépendances externes.

## Fonctionnalités principales

### Accueil

- **Page statique d'accueil** qui présente un formulaire simple pour accéder aux autres pages (Entreprises, Offres, etc.).
- **Redirection vers d'autres pages** telles que "Offres", "Entreprises", "Contact", etc.

### Offres

- **Liste des offres disponibles** avec possibilité de filtrer et d'afficher les détails d'une offre.
- **Postuler à une offre** : En cliquant sur un bouton "Postuler", l'utilisateur accède à un formulaire pré-rempli avec les informations liées à l'offre sélectionnée (titre de l'offre, entreprise, etc.).
- **Télécharger un CV et envoyer la candidature** via un formulaire spécifique dans la section de chaque offre.
- **Réinitialiser le formulaire** via un bouton dédié.

### Entreprises

- **Page listant toutes les entreprises** avec des informations pertinentes.
- **Affichage dynamique des entreprises** avec des détails supplémentaires .

### Wishlist

- **Liste des offres ajoutées à la wishlist**.
- **Fonctionnalité d'ajout / retrait d'offres** de la wishlist (ajout non fonctionnel actuellement).

### Inscription et Connexion

- **Formulaire d'inscription** avec des champs personnalisés.
- **Formulaire de connexion** pour se connecter à son compte utilisateur.
- **Message de confirmation** après l'inscription ou la connexion.

### Mentions légales

- **Page des mentions légales** accessible depuis le menu de navigation.

### Menu burger

- **Menu de navigation responsive** en JavaScript, permettant de naviguer facilement sur toutes les pages du site(mais il n est que sur la page postuler ).

### Retour en haut

- **Bouton "Retour en haut"** disponible sur les pages principales, permettant de remonter en haut de la page d'un simple clic.

## Organisation des fichiers

- `/prosit/vue/` : Gestion des vues pour les offres, entreprises, wishlist, formulaire de candidature
- `/prosit/controllers/` : Gestion de la logique métier pour les entreprises et les offres
- `/prosit/models/` : Connexion à la base de données et gestion des données (notamment le fichier `db.php` pour la connexion)

## Auteur

**Mamboune Ndam Safoura**

## Version en ligne

Vous pouvez accéder à la version en ligne du site à l'adresse suivante :

[Lebonplan en ligne] https://safoura.alwaysdata.net/
