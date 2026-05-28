# meikosan/mini_insta

Une application web simple de partage de photos.
Uploadez une photo avec un titre, elle s'affichera sur la page d'accueil.

## Fonctionnalités
- Upload de photos (JPG, PNG, GIF, WEBP, etc.)
- Ajout d'un titre à chaque photo
- Affichage de toutes les photos sur la page d'accueil

## Stack technique
- PHP 8.2
- Apache

## Prérequis
- Docker

## Lancer le conteneur

```bash
docker run -d -p 8074:80 meikosan/mini_insta
```

Puis ouvrir http://localhost:8074 dans le navigateur.

## Ports
| Port interne | Port externe | Description |
|---|---|---|
| 80 | 8074 | Serveur Apache |
