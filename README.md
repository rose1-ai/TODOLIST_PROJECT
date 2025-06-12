# README - Infrastructure du projet ToDo List

Ce dossier contient l'ensemble des fichiers nécessaires à la mise en place de l'infrastructure de déploiement de l'application ToDo List dans un environnement Dockerisé.

## Contenu

- \Dockerfile\ : Image personnalisée contenant PHP et Apache pour héberger l'application.
- \docker-compose.yml\ : Fichier d'orchestration des conteneurs (PHP + MySQL).

## Lancement de l'environnement

Dans le terminal, depuis la racine du projet, exécuter :

\\\bash
docker-compose up --build
\\\

L'application sera accessible via : [http://localhost:8080](http://localhost:8080)

## Base de données

Le service \db\ utilise MySQL avec :

- Nom de la base : \	todo_db\
- Utilisateur : \todo\
- Mot de passe : \todopass\

Les données sont persistées grâce à un volume Docker nommé \db_data\.

## Objectif

Cette partie du projet a été développée dans le respect des pratiques DevOps, avec une séparation claire entre le développement applicatif et l'infrastructure de déploiement.
