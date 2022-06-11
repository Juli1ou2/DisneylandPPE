<br><br><br>
<div id="bloc">
	<h2>Récapitulatif</h2>

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
				echo "<a href='index.php?page=7&action=sup&idAttraction=".$unAttractionCommande['idAttraction']."'><img src='images/sup.jpg' height='35' width='35'></a></td>
				</tr>";
			}
		?>
	</table>
	<br>
	
</div>