<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        
        
        <?php
            echo 'Matricule : '.$_POST["matricule"].'<br>';
            echo 'nom : '.$_POST["nom"].'<br>';
            echo 'Prénom : '.$_POST["prenom"].'<br>';
            echo 'adresse : ' .$_POST["adresse"].'<br>';
            echo 'Age : ' .$_POST["age"].'<br>';

            echo 'Sexe : ' .$_POST["sexe"].'<br>';
            echo 'service : '.$_POST["service"].'<br>';
            echo 'fonction : '.$_POST["fonction"].'<br>';
            echo 'Pays : ' .$_POST["pays"].'<br>';
        ?>
    </body>
</html>