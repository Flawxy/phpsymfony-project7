<img src="https://i.ibb.co/KwjmzfC/doc.png" alt="Screenshot-1" />

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/2bbeb09283a04056aacab52a0c3760cf)](https://www.codacy.com/manual/Flawxy/phpsymfony-project7?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Flawxy/phpsymfony-project7&amp;utm_campaign=Badge_Grade)

<img src="https://i.ibb.co/r2sV4QT/FR-France-Flag-icon.png" alt="FR-France-Flag-icon"/>

# Créer un web service exposant une API - Un projet OpenClassrooms par Yann Vogel

## Instructions d'installation

-  Créer le dossier qui accueillera le projet.
-  Cloner le projet dans le dossier créé :

`git clone https://github.com/Flawxy/phpsymfony-project7`

-  Accéder au dossier du projet :

`cd phpsymfony-project7`

-  Installer les dépendances avec Composer :

`composer install`

-  Créer le dossier qui accueillera les clés pour JWT :

`mkdir config/jwt`

-  Générer les clés pour JWT :

```
openssl genrsa -out config/jwt/private.pem -aes256 4096
 
 openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```
Une passphrase vous sera demandée. Choisissez et notez-la bien.

-  Renseigner la passphrase dans le fichier .env :

```
###> lexik/jwt-authentication-bundle ###
JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem
JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem
JWT_PASSPHRASE=VOTRE_PASSPHRASE
###< lexik/jwt-authentication-bundle ###
```
-  Créer la base de données :

`php bin/console doctrine:database:create`

-  Appliquer les migrations :

`php bin/console do:mi:mi`

-  Charger les fixtures :

`php bin/console doctrine:fixtures:load -n`

-  Lancer le serveur :

`symfony server:start`

La documentation est accessible à l'adresse <https://127.0.0.1:8000/doc>

Vous pouvez obtenir un JSON Web Token avec les identifiants suivants :
```
username : client1@bilemo.com
password : password
```
```
username : client2@bilemo.com
password : password
```
```
username : client3@bilemo.com
password : password
```

----

<img src="https://i.ibb.co/z5XtvLj/English-Language-Flag-1-icon.png" alt="English-Language-Flag-1-icon"/>

# Build a web service using an API - An OpenClassrooms project by Yann Vogel

## Installation instructions

-  Create the folder that will host the project.
-  Clone the project in the created folder :

`git clone https://github.com/Flawxy/phpsymfony-project7`

-  Access the project folder :

`cd phpsymfony-project7`

-  Install dependencies with Composer :

`composer install`

-  Create the folder that will contain the keys for JWT :

`mkdir config/jwt`

-  Generate the keys for JWT :

```
openssl genrsa -out config/jwt/private.pem -aes256 4096
 
 openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```
You will be asked for a passphrase. Choose it and write it down.

-  Declare the passphrase in the .env file :

```
###> lexik/jwt-authentication-bundle ###
JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem
JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem
JWT_PASSPHRASE=YOUR_PASSPHRASE
###< lexik/jwt-authentication-bundle ###
```
-  Create the database :

`php bin/console doctrine:database:create`

-  Apply migrations :

`php bin/console do:mi:mi`

-  Load fixtures :

`php bin/console doctrine:fixtures:load -n`

-  Start the server :

`symfony server:start`

The documentation is accessible at <https://127.0.0.1:8000/doc>

You can obtain a JSON Web Token with the following credentials :
```
username : client1@bilemo.com
password : password
```
```
username : client2@bilemo.com
password : password
```
```
username : client3@bilemo.com
password : password
```
