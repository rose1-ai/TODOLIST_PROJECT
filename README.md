 TODOLIST : Application Web avec Docker

Ce projet consiste en la réalisation d'une application web de gestion de tâches (ToDo List) dans un environnement collaboratif base sur les pratiques DevOps. Il a été développé dans le cadre d'un travail de groupe visant à mettre en œuvre une séparation claire entre les responsabilités applicatives et l'infrastructure de déploiement.

Lancement rapide

Pour exécuter le projet local, il est impératif d'avoir Docker installé sur la machine. Une fois cela fait, il suffit d'ouvrir un terminal dans le répertoire du projet, puis d'exécuter la commande suivante : docker-compose up --build

L'application sera accessible à l'adresse continue : http://localhost:8080

Structure du projet

Le projet est organisé selon une structure en dossiers bien défini :

-Le dossier application/contient le code source de l'application web, développé en HTML, CSS (avec Bootstrap) et PHP.

Le dossier infrastructure/groupe les fichiers liés au déploiement via Docker, notamment le Dockerfile, le fichier docker-compose.yml, ainsi que les éventuelles configurations de service (Apache, MySQL).
Un fichier README.md est présent à la racine du projet pour l'installation et l'utilisation du documenteur.
Technologies utilisées

Le projet repose sur les technologies suivantes :

-Frontend : HTML, CSS, Bootstrap -Backend : PHP -Base de données : MySQL -Serveur Web : Apache (intégré dans un conteneur Docker) -Conteneurisation et orchestration : Docker et Docker Compose

Fonctionnalités de l'application

L'application permanente à l'utilisateur :

-D'ajouter une touche

De consulter la liste des tâches
De modifier une tâche existante
De supprimer une tâche
De conserver les tâches de manière persistantes via une base de données MySQL
Organisation DevOps et gestion Git

Le projet à l'aide de GitHub, en respectant une structure de branches claire et cohérente :

La branche développe une étude utilisée pour le développement de l'application.
La branche infrastructure un service à la mise en place de l'environnement Docker et des configurations associées.
La branche principale groupe l'ensemble du projet validé et fusionné, prêt pour la mise en production.
Les fusions ont été réalisées via des Pull Requests afin d'assurer un contrôle qualité et une traçabilité des modifications.

Projet d'équipement

Le travail à temps partiel entre les membres de l'équipe selon deux pôles principes :

Application de développement :

Bassirou Ndiaye Ndeye Amy Gallo Diop

Infrastructures et déploiement :

Rose Diakhate Makha Camara
