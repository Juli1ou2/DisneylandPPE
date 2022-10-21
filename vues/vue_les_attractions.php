<br><br><br>
<div id="bloc">
	<h2>Liste des attractions</h2>

	<form method="post" action="">
		Rechercher :
		<input type="text" name="mot">
		<input type="submit" name="Rechercher" value="Rechercher">
	</form>
	<br/>
	<form method="post" action="">
		<p>Filtre par type :</p>
		<a type="button" href='index.php?page=2&action=search&type=Spectacle'>Spectacle</a>
		<a type="button" href='index.php?page=2&action=search&type=Montagne Russe'>Montagne Russe</a>
		<a type="button" href='index.php?page=2&action=search&type=Manège'>Manège</a>
		<a type="button" href='index.php?page=2&action=search&type=Dark Ride'>Dark Ride</a>
		<a type="button" href='index.php?page=2&action=search&type=Simulateur de vol'>Simulateur de vol</a>
		<a type="button" href='index.php?page=2&action=search&type=Chute dans le vide'>Chute dans le vide</a>
		<a type="button" href='index.php?page=2&action=search&type='>Tout</a>
	</form>
	<br>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Attraction</th>
				<th>Nom <a type="button" href='index.php?page=2&action=order&categorie=nom&fleche=asc'>↑</a> <a type="button" href='index.php?page=2&action=order&categorie=nom&fleche=desc'>↓</a></th>
				<th>Statut <a type="button" href='index.php?page=2&action=order&categorie=status&fleche=asc'>↑</a> <a type="button" href='index.php?page=2&action=order&categorie=status&fleche=desc'>↓</a></th>
				<th>Type</th>
				<th>Capacité (pers/h)</th>
				<th>Affluence</th>
				<th>Prix</th>
				<th>Heure d'ouverture</th>
				<th>Heure de fermeture</th>
				<th>Parc</th>
				<th>Technicien</th>
				<?php if(isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
					echo '<th>Opérations</th>';
				} ?>
			</tr>
		</thead>
		<?php 
			foreach ($lesAttractions as $unAttraction){
				echo "<tr>
				<td>".$unAttraction['idAttraction']."</td>
				<td>".$unAttraction['nom']."</td>
				<td>".$unAttraction['status']."</td>
				<td>".$unAttraction['type']."</td>
				<td>".$unAttraction['capacite']."</td>
				<td>".$unAttraction['affluence']."</td>
				<td>".$unAttraction['prix']."</td>
				<td>".$unAttraction['heureOuv']."</td>
				<td>".$unAttraction['heureFerm']."</td>
				<td>".$unAttraction['idParc']."</td>
				<td>".$unAttraction['idTechnicien']."</td>";
				if(isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
					echo "<td><a href='index.php?page=2&action=edit&idAttraction=".$unAttraction['idAttraction']."'><img src='images/edit.png' height='35' width='35'></a>";
					echo "<a href='index.php?page=2&action=sup&idAttraction=".$unAttraction['idAttraction']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</div>

<br><br>
<img src="images/attraction.jpg" height="493" width="878">