<br><br><br>
<div id="bloc_recapitulatif">
	<?php
		echo '<h2>Récapitulatif commande n°'.$idCommande.'</h2>';
		$resultat = $unControleur->selectWhereCommande($idCommande);
		if (is_array($resultat)){
			echo '<h3>Total : '.$resultat['prix'].'€</h3';
		}
	?>
	<br>
	<table id="table_affichage">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Affluence</th>
				<th>Date de réservation</th>
				<th>Heure</th>
				<th>Prix</th>
				<th>Opérations</th>
			</tr>
		</thead>
		<?php 
			foreach ($lesAttractionsCommande as $unAttractionCommande){
				echo "<tr>
				<td>".$unAttractionCommande['nom']."</td>
				<td>".$unAttractionCommande['affluence']."</td>
				<td>".$unAttractionCommande['dateResa']."</td>
				<td>".$unAttractionCommande['heure']."</td>
				<td>".$unAttractionCommande['prix']."</td>
				<td>";
				// <a href='index.php?page=7&action=edit&idAttraction=".$unAttractionCommande['idAttraction']."'><img src='images/edit.png' height='35' width='35'></a>";
				echo "<a href='index.php?page=7&action=sup&idAttraction=".$unAttractionCommande['idAttraction']."&heure=".$unAttractionCommande['heure']."&idCommande=".$unAttractionCommande['idCommande']."'><img src='images/sup.jpg' height='35' width='35'></a></td>
				</tr>";
			}
		?>
	</table>
	<br>
	<table id="table_affichage">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Affluence</th>
				<th>Opérations</th>
			</tr>
		</thead>
		<?php 
			foreach ($lesRestaurantsCommande as $unRestaurantCommande){
				echo "<tr>
				<td>".$unRestaurantCommande['nom']."</td>
				<td>".$unRestaurantCommande['affluence']."</td>
				<td>";
				// <a href='index.php?page=7&action=edit&idRestaurant=".$unRestaurantCommande['idRestaurant']."'><img src='images/edit.png' height='35' width='35'></a>";
				echo "<a href='index.php?page=7&action=sup&idRestaurant=".$unRestaurantCommande['idRestaurant']."'><img src='images/sup.jpg' height='35' width='35'></a></td>
				</tr>";
			}
		?>
	</table>
	<br>
	<table id="table_affichage">
		<thead>
			<tr>
				<th>Libellé</th>
				<th>Affluence</th>
				<th>Date de réservation</th>
				<th>Heure</th>
				<th>Prix</th>
				<th>Opérations</th>
			</tr>
		</thead>
		<?php 
			foreach ($lesTransportsCommande as $unTransportCommande){
				echo "<tr>
				<td>".$unTransportCommande['libelle']."</td>
				<td>".$unTransportCommande['affluence']."</td>
				<td>".$unTransportCommande['dateResa']."</td>
				<td>".$unTransportCommande['heure']."</td>
				<td>".$unTransportCommande['prix']."</td>
				<td>";
				// <a href='index.php?page=7&action=edit&idTransport=".$unTransportCommande['idTransport']."'><img src='images/edit.png' height='35' width='35'></a>";
				echo "<a href='index.php?page=7&action=sup&idTransport=".$unTransportCommande['idTransport']."&heure=".$unTransportCommande['heure']."&idCommande=".$unTransportCommande['idCommande']."'><img src='images/sup.jpg' height='35' width='35'></a></td>
				</tr>";
			}
		?>
	</table>
	<br>
	<form method="post" action="">
		<select name="idCommande" value="">
					<?php
						$lesCommandes = $unControleur->selectAllCommandes($_SESSION['id']);
						foreach ($lesCommandes as $unCommande) {
							echo "<option value='".$unCommande['idCommande']."'>";
							echo $unCommande['idCommande'];
							echo "</option>";
						}
					?>
		</select>
		<input type="submit" name="SelectionCommande" value="Valider">
	</form>
	<br>
</div>