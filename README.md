<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
teste dev
## Installer Laragon

Laragon est le logiciel que nous allons utiliser pour mettre en place l'environnement de travail en local.  
https://github.com/leokhoa/laragon/releases/download/5.0.0/laragon-wamp.exe

Dans le dossier www (accessible en cliquant en bas à droite de l'interface de laragon) faite un git clone de ce projet.

## Mise en place du projet

En utilisant le terminal de laragon (ou un autre), rendez vous dans le dossier ou vous avez cloné le projet.

-   Dupliquez le fichier .env.example et le renommer en .env
-   Faites la commande **composer install**. Elle permet d'installer les dépendances php
-   Lancez le serveur en appuyant sur **Démarrer** dans l'interface laragon.
-   Faites la commande **npm install**. Elle permet d'installer les dependances js.
-   Faites la commande **npm run dev**. Elle permet de voir les modifications que vous avez faites sur vos fichiers js. Vous pouvez utiliser **npm run hot** pour voir vos modifications dès que vous sauvegardez un fichier.
-   Accédez au site en allant dans **Menu>Projets>Votre nom de projet** sur laragon (il va sans doute vous demander de générer des clés, faites le en appuyant sur le bouton affiché).

## Modifier la page

En vous randant dans le dossier **resources>views** vous trouverez le fichier welcome.blade.php qui est le template utilisé pour la page d'accueil. Il utilise deux Vue components titre et example qui se trouve dans le dossier **ressources>js>components**.
