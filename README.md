# mini_insta
# mini_insta

Une application web simple de partage de photos. Uploadez une photo avec un titre, elle s'affichera sur la page d'accueil.

## Fonctionnalités

- Upload de photos (JPG, PNG, GIF, WEBP, etc.)
- Ajout d'un titre à chaque photo
- Affichage de toutes les photos sur la page d'accueil

## Stack technique

- PHP 8.2
- Apache
- CSS

## Lancer avec Docker (sans installer PHP)

### Prérequis

- Docker
- Docker Compose

### Étapes

```bash
git clone https://github.com/YnYnm8/mini_insta.git
cd mini_insta
docker compose up --build
```

Puis ouvrir http://localhost:8080 dans le navigateur.

## Structure des fichiers

```
mini_insta/
├── index.php       # Page d'accueil (galerie + formulaire d'upload)
├── upload.php      # Traitement de l'upload
├── style.css       # Styles
└── photos/         # Dossier de stockage des photos uploadées
```