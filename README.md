# phpmatch
## Description du projet
- Gestion des scores des matches en PHP
- Projet expérimental pour tester phpunit

## Installation PHP7 et PHPUnit
### Vérfier que l'utilisateur est bien sudo
```
id <nomutilisateur>
```

### Vérifier quelle version de PHP est installée sur la machine
```
sudo dpkg -l | grep php
```

### Supprimer PHP5 si installé sur la machine
```
sudo apt-get purge php*
```

### Supprimer les dépendants orphelins
```
sudo apt-get autoremove
```

### Démarrer l'installation PHP7
Pb : PHP7 n'est pas dans les dépôts officiels de Debian => il faut donc ajouter un dépôt externe qui contiennent PHP7

```
cd /etc
ls | grep apt
cd apt
cat sources.list
```

Page pour installer PHP7 dans debian : https://angristan.fr/installer-php-7-debian-8-jessie-depot-dotdeb/

### Modifier la liste des paquets en ajoutant le dépôt dotdeb
```
sudo su
cd /etc/apt/sources.list.d
touch dotdeb.list
atom dotdeb.list
```

Ajouter la ligne suivante :

deb http://packages.dotdeb.org jessie all

- Sauvegarder la modification et quitter

Installer PHP7

```
exit
sudo apt update
sudo apt install php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-json php7.0-gd php7.0-mcrypt php7.0-msgpack php7.0-memcached php7.0-intl php7.0-sqlite3 php7.0-gmp php7.0-geoip php7.0-mbstring php7.0-xml php7.0-zip
```
### Vérification
```
php --version
```

### Installation de PHPUnit
https://phpunit.de/getting-started.html
```
cd
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit
```

### Vérification PHPUnit OK
```
phpunit --version
```

### Faire le test PHPUnit sur l'exemple fourni par les développeurs
```
cd
mkdir phptest
cd phptest
atom Email.php
```
Copier coller du fichier Email.php fourni par phpunit.de en version 7.0

Sauvegarder/quitter

```
atom EmailTest.php
```
Copier coller du fichier EmailTest.php


### Lancer le test unitaire
```
phpunit --bootstrap Email.php EmailTest.php
```

## Mise en place de l'environnement de développement
### Installer git sur la machine
```
sudo apt-get install git
```

### Clone du répertoire du projet
```
cd
git clone https://github.com/mdautrey/phpmatch.git
git remote show
git remote show origin
```

## Finaliser le mini-projet de vendredi
A partir de l'exemple et des spécifications définies vendredi, écrire les tests et le code de l'objet match.

# NodeJS
## Tester l'installation de nodejs
Créer un répertoire nodetest et copier coller le fichier server.js :
```
var http = require("http");
var name=process.argv[2];
function myserver(request, response) 
{
  response.writeHead(200, {"Content-Type": "text/plain"});
  response.write("Hello World");
  console.log("My name is", name);
  response.end();
}
http.createServer(myserver).listen(8080);
```

Lancer le serveur :
```
nodejs server.js IMIE
```

Aller sur http://localhost:8080/ pour vérifier que tout fonctionne correctement.

## Installer mocha
```
sudo npm install mocha -g
```

## Construire un projet initial
### Répertoires

```
cd
mkdir nodematch
cd nodematch
mkdir src
cd src
mkdir bin
mkdir lib
```

- lib = fichier de packaging du serveur
- bin = fichiers application web
- src = fichier définissant la construction de l'ensemble

### src/lib/server.js
```
var http = require("http");

function begin() {
  function myserver(request, response) {
    console.log("Request received.");
    response.writeHead(200, {"Content-Type": "text/plain"});
    response.write("Hello World");
    response.end();
  }

  http.createServer(myserver).listen(8080);
  console.log("Server has started.");
}

exports.start = begin;
```
### src/bin/index.js
```
"use strict";
var path = require('path');
var fs = require('fs');
var lib = path.join(path.dirname(fs.realpathSync(__filename)), '../lib');
var server = require(lib+'/server.js');
server.start();
```
### src/package.json
```

{
  "author": " ",
  "name": "server",
  "description": "Starts an HTTP server",
  "version": "0.1.1",
  "repository": { "url": ""},
  "main": "./lib/server.js",
  "keywords": ["server","file"],
  "bin": {"index": "./bin/index"},
  "dependencies": {},
  "engines": {"node": "*"}
}
```






