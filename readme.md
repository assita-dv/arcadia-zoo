# Arcadia
arcadia est site web pour un zoo

# installation
README : Projet Arcadia Zoo
Description du projet
Arcadia Zoo est une application web

LIRE
Description du projet
Le projet Arcadia Zoo est une application web

Étapes déjà accomplies
1. Développement 
Création du site web avec HTML , CSS , *JavaScript et PHP le framework bootstrap .
Mise en place de fonctionnalités interactives telles que :
Consultation d'animaux

3. Base de donnée
Création de la base de données locale avec MySQL .
Conception des tables nécessaires ( animaux, services, consultations, avis horaire, ect..).
Exporter la base de données dans un fichier base_export.sql .
4.
Héber
Ajout de l'add-on JawsDB MySQL pour gérer la b
Problèmes rencontrés
1. Importation de la base de donnée
Le fichier base_export.sql, contenant la
Les tentatives d'importation ont échoué en raison des problèmes suivants :
Erreur Access deniedpour l'utilisateur MySQL malgré l'utilisation
Commandes
2. Limitations
L'exécution des commandes MySQL sur Heroku ( heroku run) 
Prochaines étapes pour résoudre les problèmes
Réessayer l'importation avec un tunnel SSH

Utah
Importer la base de données en exécutant la commande suivante sur Heroku :
frapper

mysql -u [USER] -p -h [HOST] [DATABASE] < base_export.sql
Configurer manuellement la base de données

Si l'importation échoue encore, recréer les tables et les données essentielles à partir du fichier base_export.sql.
Utiliser de
Tester l'application avec la base de données hébergée

Une fois la base de données configurée, t
Instructions temporaires pour utiliser le projet
Paramètres régionaux d'installation

Cloner le p
Importer le fichier base_export.sqldans une base locale via la comm
frapper

Copier le code
mysql -u [USER] -p [DATABASE] < base_export.sql
Configuration des paramètres

Dans le fichier config.php, modifier l
Lancement du projet

Ouvrir
Conclusion
Malgré les difficultés

