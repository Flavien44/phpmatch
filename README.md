# phpmatch
Gestion des scores des matches en PHP
Projet expérimental pour tester phpunit

## Vérifier le fonctionnement de phpunit
```
cd phpunitexample
phpunit --bootstrap Email.php EmailTest.php
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




