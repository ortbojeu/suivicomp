# SuiviComp
Application de suivi de compétence pour des enseignants et étudiants.

## Déploiement
* /!\ Le projet doit être déployer dans une solution WAMP.
* Récupérer l'archive suivicomp_vX.zip et la dézipper dans le répertoire /www.
* Ajouter un vhost pour ce projet:
	** dans le fichier apache/{version}/conf/extra/httpd-vhosts.conf ajouter le vhost.
	** dans le fichier C:\Windows\System32\drivers\etc\hosts ajouter l'ip et le nom du vhost.

## Config BDD
* Créer une bdd competence
* Importer les fichiers .sql du dossier documentation du projet dans l'ordre indiqué.

## Config prod
Pour passer de prod en test et inversement, il faut changer les 'app_dev' en 'app' du fichier web/.htaccess.
