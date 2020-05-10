<html>
    <head><title>Ma page d'accueil</title></head>
    <body>
        <h1>Bienvenue sur le site de sergio  </h1>
        <h2>Commencez-donc par vous inscrire :</h2>
        <form name="inscription" method="post" action="page2.php">
            Entrez votre nom : <input type="text" name="pseudo"/> <br/>
            Entrez votre prenom : <input type="text" name="ville"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
        if(isset($_POST['valider'])){
            $pseudo=$_POST['pseudo'];
            $ville=$_POST['ville'];
            echo 'Salut '. $pseudo.  $ville.'<br/>Bienvenue sur mon site !';
        }
        ?>
    </body>
</html>