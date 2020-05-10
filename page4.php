<!Doctype html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title> Template </title>
		<link rel="stylesheet" type="text/css" href="page4.css">
		
	</head>
	
	<body>
<h1>Formulaire HTML</h1>
        
        <form action="page4a.php" method="post">
        <div class="c100">
                <label for="Matricule">Matricule : </label>
                <input type="text" id="matricule" name="matricule">
            </div>
        <div class="c100">
                <label for="nom">nom: </label>
                <input type="text" id="nom" name="nom">
            </div> 
        <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="adresse">adresse : </label>
                <input type="adresse" id="adresse" name="adresse">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>
            <div class="c100">
                <label for="service">Service:</label>
                <select id="service" name="service">
                    <optgroup label="service 1">
                        <option value="livraison">livraison</option>
                      
                    </optgroup>
                    <optgroup label="Service 2">
                        <option value="paiement">paiement</option>
                        
                    </optgroup>
                    <optgroup label="Service 3">
                        <option value="paiement mobile ">paiement mobile</option>
                    </optgroup>
                </select>
            </div>
            <div class="c100">
                <label for="service">Fonction:</label>
                <select id="fonction" name="fonction">
                    <optgroup label="fonction">
                        <option value="etudiant">etudiant</option>
                        <option value="fonctionnaire">fonctionnaire</option>
                        <option value="prof">prof</option>
                      
                   
                </select>
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
                <input type="reset" value="Réinitialiser">
            </div>
        </form>