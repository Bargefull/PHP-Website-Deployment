<!DOCTYPE html>

<html class="font">

	<head>
		<meta charset="UTF-8"/>	
		<link rel="stylesheet" href="style2.css" />		
		<title>Contact</title>
	</head>
	
	<!-- Menu déroulant -->
	<body id="ancre1" style="margin:0px; padding:0px;">
	<?php include "navBar2.php"; ?>
	
	</br>
	<div id="content">
	
	<ol>
		<h1><li>Me Contacter</li></h1>

			<p>Voici mon adresse mail ! : <a href="mailto:jbarge14@sfr.fr">Jérémy BARGE</a> </p>
	

	<!-- Tableau de commentaires --> 		
	<ul>
		<h1><li>Commentaire</li></h1>
	</ul>
	<form method ="post" action="mailto:jbarge14@sfr.fr">
		<fieldset>
			<legend>Donnez votre opinion</legend>

			<label>
				 Votre nom : <input type = " text" name= "nom" size ="25" tableindex="1"/>
			</label>
			</br>

			<textarea name ="comments" cols="100" rows="10" tablindex="2" onfocus="this.value=''" />
				Tapez votre commentaires ici ...
			</textarea>

			<p><input type = "submit" value = "Envoyer"></p>	
		</fieldset>
	</form>		
	
	</ol>
	</br>
			<p><strong><FONT color="red">Cliquez si vous aimez la page :</FONT></strong>	

				<progress max = "1000" value ="0" onclick="this.value+=1;getElementById('num').innerText=this.value;"> </progress>
	
				<span id= "num"></span>	</p>
	</div>
	

	<!-- Pied de page -->
	<div id="bas">
 	<?php include "Pied_de_page2.php"; ?>
	</div>
	</body>
</html>