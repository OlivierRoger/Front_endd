<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		
<?php 

if(isset($_POST['password']) AND ($_POST['password'] == "Kangourou") AND (($_POST['pseudo']) AND ($_POST['pseudo'] == "DrK")))
{
	echo "ok";
}	

else
{	
	echo "wrong";
}	

?> 

<!--
?php echo htmlspecialchars($_POST['nom']); ?>
?php echo htmlspecialchars($_POST['password']); ?
-->
