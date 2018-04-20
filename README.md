### Pré-requis

Pour fonctionner, notre application a besoin de:

* Serveur php de type [WAMP](http://www.wampserver.com/) / [MAMP](https://www.mamp.info/en/)

### Installation

- Cloner le repo dans le dossier www/ ou htdocs/ de votre serveur php : 
```sh
$ git clone https://github.com/quentin22800/projetSBD.git
```
- Créer une base de donnée mysql du nom de ```projetSBD```
- Importer les données grâce au fichier ```projetsbd.sql```
- Configurer la connexion à la base de données dans le fichier ```applications/config/database.php```

### Utilisation

La page d'accueil se trouve à l'adresse :
```sh
http://localhost/projetSBD/index.php
```

Si vous n'avez rien modifier, il n'existe, en base, qu'un seul utilisateur que vous pouvez utiliser pour vous connecter : 
- login : kevin
- password : kevin

Une fois connecté, vous pouvez choisir le mode que vous souhaitez ainsi que la requête. Cliquer ensuite sur le bouton valider, est alors affiché le resultat de la requête avec plus ou moins de bruit.
