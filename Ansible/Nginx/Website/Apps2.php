<!DOCTYPE html>

<html class="font">
	<head>
		<meta charset="UTF-8"/>	
		<link rel="stylesheet" href="style2.css" />		
		<title>Applications</title>
	</head>
	
	<body id="ancre1" style="margin:0px; padding:0px;">
	
	<!-- Menu déroulant -->
	<?php include "navBar2.php"; ?>

	</br>
	
	<div id="content">
	
	<p><strong>Je vous ai séléctionnés les meilleures applications utiles à un bon entraînement dans chaque discipline !</strong></p>
	
	<ol>
		<h1><li>L'application santé </li></h1>
		
			<p> Ces 2 applications vous permettent de stocker toutes vos données sur vos entraînements : Temps parcourues, nombre de kilomètres effectués, ... et ils les regroupent sous forme d'un tableau 
				  permettant de ... <a href="Sante.php" onclick="document.getElementById('lirelasuite').style.display = 'block'; this.style.display = 'none';">Lire la suite</a></p>
	

		<h1><li>L'application de Natation</li></h1>
			
			<p> Nageurs débutants ou confirmés, soyez sûrs d'être bien accompagné lors de ... <a href="Nat2.php" onclick="document.getElementById('lirelasuite').style.display = 'block'; this.style.display = 'none';">Lire la suite</a></p>
	
		<h1><li>L'application de Vélo</li></h1>
			
			<p>L’application Road Bike vous permet de suivre vos entraînements avec votre iPhone, contrôlez vos progrès d’entraînement avec plusieurs fonctionnalités :</p>

			<ul> 
				<li>Suivi GPS : distance, durée, vitesse, altitude, rythme, calories brûlées etc...</li>
				<li>Routes détaillées avec le taux d’inclinaison.</li>
				<li><a href="Velo2.php" onclick="document.getElementById('lirelasuite').style.display = 'block'; this.style.display = 'none';">Lire la suite</a></li>
			</ul>
					
		<h1><li>L'application de CAP</li></h1>

			<p>Cette application vous octroiera plusieurs fonctions :</p>

			<ul>
				<li>Suivi de vos entraînements en direct avec GPS intégré & gestion de votre journal d’entraînement</li>
				<li>Shoe Tracking: Suivez le nombre de ...<a href="Cap2.php" onclick="document.getElementById('lirelasuite').style.display = 'block'; this.style.display = 'none';">Lire la suite</a></li>
			</ul>	
		
	</ol>		
					
	</div>
	
	<!-- Pied de page -->

	<div id="bas">
 
 	<?php include "Pied_de_page2.php"; ?>

  </div>
	</body> 
</html>