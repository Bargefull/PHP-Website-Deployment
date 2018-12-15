<!DOCTYPE html>

<html class="font">

	<head>
		<meta charset="UTF-8"/>	
		<link rel="stylesheet" href="style2.css" />		
		<title>Quesako</title>
	</head>
	
	<body id="ancre1" style="margin:0px; padding:0px;">

	<!-- Menu déroulant -->
	<?php include "navBar2.php"; ?>
	</br>
	
	<div id="content">

	<ol>

		<!-- Paragraphe 1 - dates et histoire -->

		<h1><li>Les Origines du triathlon</li></h1>
	
		<p>Le Triathlon se base sur des valeurs physiques (endurances et transitions) et morales 
			(défis et dépassements).<br/> Le 1er triathlon surnommé « les Trois Sports » est apparu en 1902 en 
			Val-de-Marne enchaînant la course à pied, la bicyclette et le canotage.</p>

		<!-- Dates -->

		<ul>
			<li><U>En 1920 :</U> la natation remplace le canotage.</li>
			</br>
			<li><U>En 1934 :</U> la course des Trois Sports a lieu à la Rochelle (17 - Charente-Maritime). Il s’agit de traverser le chenal à la nage soit environ 200 mètres, de parcourir 10 kilomètres à bicyclette, et enfin d’avaler trois tours de piste d'un stade, soit 1.200 mètres.</li>
			</br>
			<li><U>En 1944 :</U> une autre épreuve se déroule dans la même région.</li>
			</br>
			<li><U>En 1945 :</U> cette compétition migre vers la banlieue ouest de Paris et plus particulièrement à Poissy (78 - Yvelines). Alors dénommée « Course des Débrouillards », elle devient dans les années 1970 « la Course des Touches à Tout », associant au gré des organisations des disciplines variées.</li>
			</br>
			<li><U>En 1970 :</U> Plusieurs clubs de triathlon apparaissent et les premières épreuves se déroulent très rapidement dans la continuité, mais comme en France, la formule et les distances proposées n'ont pas de quoi enthousiasmer les foules, ni les sportifs avides de nouveauté, ni le public admiratif et encore moins les médias, pourtant à l'affût d'originalité.</li>
			</br>
			<li><U>En 1975 :</U> Le premier Triathlon américain se déroule à Fiesta Island (Californie du Sud, près de San Diego): 800 mètres de natation, 8 kilomètres de vélo et 8 kilomètres de course à pied. Elle stipule en plus que chaque participant(e) apporte son vélo personnel !</li>
			</br>
			<li><U>En 1994 :</U> Le triathlon devient une discipline olympique se déroulant tous les 4 ans.</li>
			</br>
			<li><U>En 2000 :</U> La première épreuve de triathlon olympique a lieu à Sydney (Australie):
							l'épreuve féminine se déroule le 1<sup>er</sup> jour et l'épreuve masculine le 2<sup>ième</sup>. Le triathlon se voit accorder l'une des premières médailles des Jeux Olympiques de Sydney, avec Brigette McMahon (SUI) et Simon Whitfield (CAN) 
							comme premiers médaillés d'or. </li>
			</br>
		</ul>

		<p>Depuis la première édition en l'an 2000, 22 pays appartenant aux cinq continents ont participé aux Jeux Olympiques d'étés</br>
			L'Australie et la Suisse restent en tête du palmarès avec 10 médailles tandis que la France se positionne en 4<sup>ième</sup> position avec un total de 7 médailles grâce à
			Frédéric Belaubre(1), David Hauss(1), Christine Hocq(1), Vincent Luis(1), Olivier Marceau(1), Isabelle Mouthon(1), Laurent Vidal(1).				
					
		</p>
	
		<!-- Paragraphe 2 - Tableau des differentes distances --> 
	
		<h1><li id="distance">Les différentes distances</li></h2>
	
	
		<p>Le triathlon se pratique sur des distances très variées accessible à tous: </p>
	
		<table border="1" class ="tableau-tri">
		<thead>
				<tr>	
					<tbody class ="bleu">
							<td align = "center" >Nom de la distance</td>
							<td align = "center" >Natation <abbr title =" mètres" onclick = "alert('Mètres')">(m)</abbr/></td>
							<td align = "center" >Cyclisme <abbr title = "Kilomètres" onclick = "alert('Kilomètres')">(Km)</abbr/></td>
							<td align = "center" >Course à pied <abbr title = "Kilomètres" onclick = "alert('Kilomètres')">(Km)</abbr/></td>
					</tbody>	
				</tr>
				<tr>
					<thead>
							<td align="center">Jeunes 6-9 ans</td>
							<td align="center">50</td>
							<td align="center">1</td>
							<td align="center">0.5</td>
					</thead>
				</tr>
				<tr>
	
				<tr>
					<thead>
							<td align="center">Jeunes 8-11 ans</td>
							<td align="center">100</td>
							<td align="center">2</td>
							<td align="center">1</td>
					</thead>
				</tr>
				<tr>
					<thead>
							<td align="center">Jeunes 10-13 ans</td>
							<td align="center">200</td>
							<td align="center">4</td>
							<td align="center">1.5</td>
					</thead>
				</tr>
				<tr>
					<thead>
							<td align="center">Jeunes 12-19 ans</td>
							<td align="center">300</td>
							<td align="center">6</td>
							<td align="center">2</td>
					</thead>
				</tr>
				<tr>
					<thead>
							<td align="center">Distance XS (Découverte)</td>
							<td align="center">400</td>
							<td align="center">10</td>
							<td align="center">2.5</td>
					</thead>
				</tr>
				<tr>
					<thead>
							<td align="center">Distance S (Sprint)</td>
							<td align="center">750</td>
							<td align="center">20</td>
							<td align="center">5</td>
					</thead>
				</tr>
				<tr>
					<thead>
							<td align="center">Distance M <abbr title ="Courte Distance ou Distance Olympique" onclick = "alert('Catégorie A : Courte Distance ou Distance Olympique')">(CD ou DO)</abbr/></td>
							<td align="center">1500</td>
							<td align="center">40</td>
							<td align="center">10</td>
					</thead>
				</tr>
					<tr>
					<thead>
							<td align="center">Half Ironman</td>
							<td align="center">1900</td>
							<td align="center">90</td>
							<td align="center">21.1</td>
					</thead>
				</tr>
					<tr>
					<thead>
							<td align="center">Distance L <abbr title = "Moyenne Distance" onclick = "alert('Catégorie B : Moyenne Distance')">(MD)</abbr/></td>
							<td align="center">3000</td>
							<td align="center">80</td>
							<td align="center">20</td>
					</thead>
					</tr>
					<tr>
					<thead>
							<td align="center">Distance XL <abbr title = "Longue Distance" onclick = "alert('Catégorie C : Longue Distance')">(LD)</abbr/></td>
							<td align="center">4000</td>
							<td align="center">120</td>
							<td align="center">30</td>
					</thead>
					</tr>
					<tr>
					<tfoot>
							<td align="center">Ironman </td>
							<td align="center">3800</td>
							<td align="center">180</td>
							<td align="center">42.195</td>
					</tfoot>
					</tr>
			</thead>
			</table>



	
	</ol>
	

	</div>
	
	<!-- Pied de page -->

	<div id="bas">
 
	<?php include "Pied_de_page2.php"; ?>

  </div>
	
	</body>
</html>