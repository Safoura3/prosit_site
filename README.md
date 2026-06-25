# lebonplan — Site d'offres de stages et d'alternances (PHP / MySQL)

**lebonplan** est un projet academique (site web d'**offres de stages et d'alternances en informatique**.)
Les visiteurs peuvent consulter les offres, explorer les entreprises, sauvegarder
des offres dans une **wishlist**, et **postuler** via un formulaire pré-rempli.

Projet réalisé en **PHP / MySQL** selon une architecture **MVC**
(Modèle – Vue – Contrôleur), avec une interface entièrement **redessinée** et **responsive**.


---

## Fonctionnalités

- **Catalogue d'offres** chargé depuis une base MySQL, avec **pagination**
- **Liste des entreprises** partenaires (paginée)
- **Wishlist** personnelle (sauvegarde des offres côté navigateur)
- **Candidature en ligne** : formulaire pré-rempli avec l'offre choisie + aperçu du CV (PDF)
- **Formulaire de contact** avec validation
- **Connexion / inscription**
- **Menu responsive** (mobile) et bouton « retour en haut »

## Points techniques

- **Architecture MVC** : `controlleur/` (logique), `models/` (accès BDD), `vue/` (interface)
- **PDO** + **requêtes préparées** → protection contre les **injections SQL**
- **`htmlspecialchars`** à l'affichage → protection contre les **failles XSS**
- **Pagination** des résultats
- Interface **responsive** avec un design system unifié (`vue/global.css`)

## Technologies

PHP · MySQL (PDO) · HTML5 · CSS3 · JavaScript · XAMPP (Apache + MySQL)

---

## Installation (en local avec XAMPP)

1. **Cloner le dépôt** dans le dossier `htdocs` de XAMPP :
   ```bash
   git clone https://github.com/Safoura3/prosit_site.git
   ```
2. **Démarrer** Apache et MySQL depuis le panneau XAMPP.
3. **Créer la base de données** : ouvrir phpMyAdmin et **importer** le fichier
   [`prosit/models/database.sql`](prosit/models/database.sql)
   (il crée la base `entlebonplan`, les tables et des données d'exemple).
4. Vérifier les identifiants de connexion dans `prosit/models/db.php`
   (par défaut : utilisateur `root`, mot de passe vide — config XAMPP standard).
5. Ouvrir dans le navigateur :
   ```
   http://localhost/prosit_site/prosit/index.php
   ```

## Structure du projet

```
prosit/
├── index.php                 # page d'accueil
├── controlleur/
│   ├── offres.php            # liste des offres (BDD + pagination)
│   └── entreprises.php       # liste des entreprises (BDD + pagination)
├── models/
│   ├── db.php                # connexion PDO à la base
│   └── database.sql          # schéma + données d'exemple
└── vue/
    ├── global.css            # design system unifié (toutes les pages)
    ├── app.js                # menu responsive + retour en haut
    ├── connexion.html, inscription.html, contact.html
    ├── prosit.html           # formulaire de candidature
    ├── wishlist.html, mention.html
    └── *.js                  # scripts (wishlist, contact, validations)
```

---

## Auteure

Projet réalisé par **Safoura Mamboune Ndam** — étudiante en ingénierie informatique.
