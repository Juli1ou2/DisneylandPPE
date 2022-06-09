<h3>Accueil du site</h3>

<h4>
	<?php
		if (isset($_SESSION['email'])){
				echo $_SESSION['type']." connecté : ".$_SESSION['prenom']." ".$_SESSION['nom'];
		}
	?>
</h4>

<p>Bienvenue sur le site du parc à thème Disneyland Paris !<br/><br/><br/></p>

<!-- <img src="images/disneyland1.jpg" height="934" width="1229"> -->
<img src="images/disneyland2.jpg" height="800" width="1920">
<br/><br/><br/>

<?php
	$nbParcs = $unControleur->countParcs();
	$nbAttractions = $unControleur->countAttractions();
	$nbTechniciens = $unControleur->countTechniciens();
	$nbRestaurants = $unControleur->countRestaurants();
	$nbRestaurateurs = $unControleur->countRestaurateurs();
	$nbTransports = $unControleur->countTransports();
?>

<div id="bloc">
	<h3>Statistiques de la base de données</h3>
	<table id="table_affichage">
		<thead>
			<th>Nombre de parcs</th>
			<th>Nombre d'attractions</th>
			<th>Nombre de techniciens</th>
			<th>Nombre de restaurants</th>
			<th>Nombre de restaurateurs</th>
			<th>Nombre de transports</th>
		</thead>
		<?php
			echo "<tr>";
			echo "<td>".$nbParcs."</td>";
			echo "<td>".$nbAttractions."</td>";
			echo "<td>".$nbTechniciens."</td>";
			echo "<td>".$nbRestaurants."</td>";
			echo "<td>".$nbRestaurateurs."</td>";
			echo "<td>".$nbTransports."</td>";
			echo "</tr>";
		?>
	</table>
</div>