<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />


<!-- NB : strip_tags  enlève les balises, plutot que de les afficher avec htmlspecialchars -->


<!-- Récupérer les variable du formulaire -->

<p> Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>
<!-- ?php echo htmlspecialchars($_POST['prenom']); ? -->
<?php echo htmlspecialchars($_POST['nom']); ?>
<?php echo htmlspecialchars($_POST['pseudo']); ?>
<?php echo htmlspecialchars($_POST['mail']); ?>
<?php echo htmlspecialchars($_POST['mail2']); ?>
<?php echo htmlspecialchars($_POST['password']); ?>
<?php echo htmlspecialchars($_POST['password2']); ?>
<?php echo htmlspecialchars($_POST['capcha']); ?>


<p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>



<!-- Upload du RIB, Controler les paramètres du fichier, puis le transférer sur le serveur -->

<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['rib']) AND $_FILES['rib']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['rib']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['rib']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                  // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['rib']['tmp_name'], 'uploads/' . basename($_FILES['rib']['name']));
                        echo "L'envoi a bien été effectué !";
                }
        }
}
?>

<!-- Pour l'envoi de fichier il reste des PARAMETRES à rajouter. Il y a un pb si le fichier contient des espaces ou 
accents. Si le fichier a le même nom qu'un fichier précédemment utilisé. Il faut donc faire un compteur qui incrémente
le nom du fichier. Il faut aussi penser à ouvrir les droits en écriture sur le serveur, ex : FileZilla, ou Linux chmod -->

		

										<!-- Stocker dans BDD -->

										<!-- MySQL et compagnie créole -->



										<!-- Methode pour le capcha -->

			<!-- Générer aléatoirement une liste chainé, la mettre dans un tableau, puis la comparer à l'envers -->.
