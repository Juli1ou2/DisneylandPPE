<h3>Accueil du site</h3>

<h4>
	<?php
		if (isset($_SESSION['email'])){
			echo "Personne connectée : ".$_SESSION['prenom']." ".$_SESSION['nom']." (".$_SESSION['role'].")";
		}
	?>
</h4>

<!--<img src="images/logo.png" height="140" width="220">-->

<p>Bienvenue sur le site du parc à thème Disneyland Paris !<br/><br/><br/></p>

<?php
	$nbParcs = $unControleur->countParcs();
	$nbAttractions = $unControleur->countAttractions();
	$nbTechniciens = $unControleur->countTechniciens();
	$nbRestaurants = $unControleur->countRestaurants();
	$nbRestaurateurs = $unControleur->countRestaurateurs();
	$nbTransports = $unControleur->countTransports();
?>

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