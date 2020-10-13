# CRUD PHP

## Créer une BDD
    * Nom de la BDD : dojocrudphp
    * Créer une table article
        * id INT PRIMARY KEY NOT NULL AUTO_INCREMENT
        * title VARCHAR(200)
        * description TEXT
## Créer les fichiers
        
    * Créer une page index.php
    * Créer une page header.php et l'inclure dans toutes les pages sauf db.php ou connect.php
    * Créer une page db.php ou connect.php pour la configuration BDD
        * Saisir les identifiants BDD dans les constantes
        * Inclure cette page dans header.php via require
    * Créer une page liste.php
        * Afficher toutes les occurences sous forme de tableau
    * Créer une page create.php
        * Créer un formulaire pour insérer dans la base
        * Gérer l'insertion SQL avec PDO
    * Créer une page delete
        * Gérer la suppression SQL avec PDO
        * Rediriger vers liste.php
    * Ajouter l'option Delete dans la page liste
        * Pour supprimer l'occurence
    * Créer une page update
        * Créer un formulaire pour modifier une occurence dans la base
        * Rediriger vers liste.php
    * Ajouter l'option Update dans la page liste
        * Pour modifier l'occurence