<!DOCTYPE html>

<html class="font">

	<head>
		<meta charset="UTF-8"/>	
		<link rel="stylesheet" href="style2.css" />		
		<title>Qui suis-je</title>
	</head>
	
	<!-- Menu déroulant -->

	<body id="ancre1" style="margin:0px; padding:0px;">
	<?php include "navBar2.php"; ?>

	</br>

	<div id="content">

	Je m'appelle <strong>Jérémy BARGE</strong>, j'ai 24 ans, et je suis né le  <time datetime ="2016-10-14T13:36" Title ="anniversaire">14 Octobre 1993</time>. Je suis né à <em> Vichy </em> une petite ville de la région Auvergne Rhone-Alpes, d'environ 25 000 habitants 
	où il fait bon vivre lorsque l'on recherche tranquilité et harmonie avec la nature. Cette région est réputée pour ses dénivelés mais aussi ses plats : </p>
					
	<a href ="images/Vichy2.jpg"><img src="images/Vichy_mini2.jpg" alt="Vichy" title = "Cliquez pour agrandir !"></a>
	<a href ="images/Vichy12.jpg"><img src="images/Vichy1_mini2.jpg" alt="Vichy" title = "Cliquez pour agrandir !"></a></br>
	
	<p>Cela fait maintenant 3 ans que je m'entraîne :</p>
		<marquee id="id1" behavior="alternate" scrollamount="8"><span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">				
			<a><img src="images/tri12.jpg" alt="Vichy" title = "Triathlon des Monts du Lyonnais"></a>
			<a><img src="images/tri22.jpg" alt="Vichy" title = "Triathlon des Monts du Lyonnais"></a>
			<a><img src="images/tri32.jpg" alt="Vichy" title = "Triathlon des Monts du Lyonnais"></a>
			<a><img src="images/tri42.jpg" alt="Vichy" title = "Triathlon des Monts du Lyonnais"></a>
			<a><img src="images/tri52.jpg" alt="Vichy" title = "Triathlon des Monts du Lyonnais"></a>
			<a><img src="images/tri62.jpg" alt="Vichy" title = "Triathlon des Monts du Lyonnais"></a>
			<a><img src="images/tri72.jpg" alt="Vichy" title = "Entraînement à la piscine de Bellerive"></a>
			<a><img src="images/tri82.jpg" alt="Vichy" title = "Entraînement à la piscine de Bellerive"></a>
			<a><img src="images/tri92.jpg" alt="Vichy" title = "Entraînement sur les hauteurs d'Hauterive"></a>
			<a><img src="images/tri102.jpg" alt="Vichy" title = "Entraînement avec mon coach Yohann VINCENT"></a>
		</span></marquee>
	
<h3> tableau de mes résultats </h3>	
	<p>Triathlon des monts du lyonnais Distance XS - Juillet 2016</p>
	
	<table>
	<thead>
	<tr >
		<tbody class ="bleu" >
			<td align="center" style=" width:15em";>Natation</td>
			<td align="center" style=" width:15em";>T1</td>
			<td align="center" style=" width:15em";>Vélo</td>
			<td align="center" style=" width:15em";>T2</td>
			<td align="center" style=" width:15em";>CAP</td>
			<td align="center" style=" width:15em";>Temps </td>
			<td align="center" style=" width:15em";>Ecart</td>
		</tbody>
	</tr>
	<tfoot class ="marron">
	<tr>
		<td align="center" >
		 
		 9:16.4 
		 
		</td>
		
		<td align="center">
		 
		 4:18.3 
		 
		</td>
		
		<td align="center">
		 
		 21:58.3 
		 
		</td>
		
		<td align="center">
		 
		3:08.7
		 
		</td>
		
		<td align="center">
		 
		12:45.0 
		 
		</td>
		
		<td align="center">
	 
		00:51:26.8
		 
		</td>
		
		<td align="center">
		 
		14:07.9
		 
		</td>

	</tr>
	</tfoot>
	</thead>
	</table>

	
	
	<!--Pied de page -->
	</div>
	<div id="bas">
 
 	<?php include "Pied_de_page2.php"; ?>

   </div>
	</body>
</html>





