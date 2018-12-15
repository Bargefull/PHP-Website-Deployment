<!DOCTYPE html>

<html class="font" >
	<head>
		<meta charset="UTF-8"/>	
		<link rel="stylesheet" href="style2.css" />		
		<title>Index</title>

 		<!--<script type ="text/javascript">			
    	  alert('Hello world!');  
    </script>-->

	</head>
	
		

	<body id="ancre1" style="margin:0px; padding:0px; ">

	<!-- Menu déroulant -->

	<?php include "navBar2.php"; ?>						

	</br>





















	
	<!-- Premiers paragraphes - phrases d'accroches -->
	
	<div id="content">

		<a href="welcome.php?action=cf&p_grp=1" >ONLY MEMBERS ACCESS - welcome.php</a>

		<p><strong><FONT color="purple">Le triathlon vous intéresse, vous vous demandez qui sont ses fous ou alors vous débutez ?</FONT></strong></p>
		<p><strong><FONT color="purple">Qui n'a jamais rêvé de repousser ses limites ? : Pas de soucis vous êtes sur le bon site : un site pour les amateurs de <mark>triathlon</mark>.</FONT></strong></p>
 		<p><strong><FONT color="red">Je finirai par cette phrase : <cite title = "Laroutedelaforme.fr">"Les seules limites qui existent sont celles que l'on s'impose. "</cite></FONT></strong></p>
			
	<div id ="nat" ><img src = "images/nat2.gif"/></div></br>

	<!-- Liens  vers differents articles  -->

		<p><strong><FONT color="red"><u>LAST NEWS</u>:</FONT></strong></p>	
	
	<div id ="scroll">

	<?php include "Programme_index.php"; ?>
	
	<a href="Programme2.php" >Lire l'article en entier</a>

	</br>
	</br>
	
	<div id ="scroll">
		
	<?php include "Alimentation_index.php"; ?>
	
	</br>
<a href="Alimentation2.php" >Lire l'article en entier</a>


	
	
	</br>
	</br>	

	<!-- Compteur visiteurs  -->

		<p>FELICITATIONS ! Vous êtes le 
		<a href="http://www.mon-compteur.fr"><img src="http://www.mon-compteur.fr/html_c01genv2-193490-6" border="0" />
		</a> ième visiteur. Vous avez gagné le droit de participer à votre 1er triathlon.</p>
	
	</div>
	</div>
	
	
	</div>	



	<!-- Pied de page -->
		
	<div id="bas">
 
	<?php include "Pied_de_page2.php"; ?>

	</div>

	</body>

</html>