<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>Le Livre qui Nous Rendra Célèbre, plus tard</title>
    </head>
	<!-- L'en-tête -->
	<!-- ?php include("entete.php"); ?> -->
	
    <body>
	
	 <!-- Le menu -->
    
    <?php include("menus.php"); ?>
    
	<br/><br/><br/><br/><br/><br/>
    <!-- <a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a> -->
	
	<!--  formulaire de connexion -->
	
<form name="connexion" method="post" action="connexion.php">
	    
		<input type="text" name="pseudo" value="Pseudo" /><br/><br/>
        <input type="password" name="password" value="" /><br/>
		
		 
        <input type="submit" name="valider" value="Connexion"/><br/><br/>
    </form>	
	
	<!--  formulaire d'inscription -->
	
<form name="inscription" method="post" action="formulaire.php">
	    Entrez votre prénom : <input type="text" name="prenom"/> <br/><br/>
        Entrez votre nom : <input type="text" name="nom"/><br/><br/>
		Entrez votre pseudo : <input type="text" name="pseudo" value="George Sandre" /><br/><br/>
        Entrez votre adresse mail :    <input type="text" name="mail" value="" /><br/>
        Confirmer votre adresse mail : <input type="text" name="mail2" value="" /><br/><br/>
        Entrez votre mot de passe :    <input type="password" name="password" value="" /><br/>
		Confirmer votre mot de passe : <input type="password" name="password2" value="" /><br/>
		Ecrivez ceci de droite à gauche : <input type="text" name="capcha" value="nochinroc" /><br/><br/>
		 
        <input type="submit" name="valider" value="OK"/><br/><br/>
    </form>
	
	<!-- Importer votre RIB :  -->      
	
<form action="formulaire.php" method="post" enctype="multipart/form-data">
	<input type="file" name="rib" /> <br/><br/>
	Importer votre RIB :       <input type="submit" value="Envoyer le fichier" /><br/>
    <p>Formulaire d'envoi de fichier</p>
</form>	

	<br/><br/><br/>

	<!-- Liste déroulante -->
 
 <select name="choix">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3" selected="selected"> Choix 3</option>
    <option value="choix4">Choix 4</option>
</select>
 
	<!-- Cases à cocher -->
 
 <input type="checkbox" name="case" id="case" checked="checked" /> 
 <label for="case">Ma case à cocher</label>
 
	<!-- Radio Boutton -->
	
 Aimez-vous les frites ?
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
 
</form>
	
	
    
    
   
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
           
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <?php include("pied_de_page.php"); ?>
    
    </body>
</html>