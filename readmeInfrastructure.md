﻿ infrastructure
# README - Infrastructure du projet ToDo List

Ce dossier contient l'ensemble des fichiers nécessaires à la mise en place de l'infrastructure de déploiement de l'application ToDo List dans un environnement Dockerisé.

## Contenu

- \Dockerfile\ : Image personnalisée contenant PHP et Apache pour héberger l'application.
- \docker-compose.yml\ : Fichier d'orchestration des conteneurs (PHP + MySQL).
- \sql/init.sql\ : Script d'initialisation de la base de données.

## Lancement de l'environnement

Dans le terminal, depuis la racine du projet, exécuter :

\\\bash
docker-compose up --build
\\\

L'application sera accessible via : [http://localhost:8080](http://localhost:8080)

## Base de données

Le service \db\ utilise MySQL avec :

- Nom de la base : \    todo_db\
- Utilisateur : \todo\
- Mot de passe : \todopass\

Les données sont persistées grâce à un volume Docker nommé \db_data\.

## Objectif

Cette partie du projet a été développée dans le respect des pratiques DevOps, avec une séparation claire entre le développement applicatif et l'infrastructure de déploiement.
=======
  
TODOLIST : Application Web avec Docker

Ce projet consiste en la réalisation d’une application web de gestion de tâches (ToDo List) dans un environnement collaboratif basé sur les pratiques DevOps. Il a été développé dans le cadre d’un travail de groupe visant à mettre en œuvre une séparation claire entre les responsabilités applicatives et l’infrastructure de déploiement.

Lancement rapide    

Pour exécuter le projet localement, il est impératif d’avoir Docker installé sur la machine. Une fois cela fait, il suffit d’ouvrir un terminal dans le répertoire du projet, puis d’exécuter la commande suivante : docker-compose up --build


L’application sera accessible à l’adresse suivante :
[http://localhost:8080](http://localhost:8080)

Structure du projet

Le projet est organisé selon une structure en dossiers bien définie :

-Le dossier application/ contient le code source de l’application web, développé en HTML, CSS (avec Bootstrap) et PHP.
- Le dossier infrastructure/ regroupe les fichiers liés au déploiement via Docker, notamment le Dockerfile, le fichier docker-compose.yml, ainsi que les éventuelles configurations de serveur (Apache, MySQL).
- Un fichier README.md est présent à la racine du projet pour documenter son installation et son utilisation.

Technologies utilisées

Le projet repose sur les technologies suivantes :

-Frontend : HTML, CSS, Bootstrap
-Backend: PHP
-Base de données: MySQL
-Serveur Web: Apache (intégré dans un conteneur Docker)
-Conteneurisation et orchestration: Docker et Docker Compose

Fonctionnalités de l’application

L’application permet à l’utilisateur :

 -D’ajouter une tâche
- De consulter la liste des tâches
- De filtrer les tâches
- De supprimer une tâche
- De conserver les tâches de manière persistante via une base de données MySQL

Organisation DevOps et gestion Git

Le projet a été géré à l’aide de GitHub, en respectant une structure de branches claire et cohérente :

- La branche develop a été utilisée pour le développement de l’application.
- La branche infrastructure a servi à la mise en place de l’environnement Docker et des configurations associées.
- La branche main regroupe l’ensemble du projet validé et fusionné, prêt pour la mise en production.

Les fusions ont été effectuées via des Pull Requests afin d’assurer un contrôle qualité et une traçabilité des modifications.

 Équipe projet

Le travail a été réparti entre les membres de l’équipe selon deux pôles principaux :

Développement applicatif :

Bassirou Ndiaye
Ndeye Amy Gallo Diop

Infrastructure et déploiement :

Rose Diakhate
Makha Camara


