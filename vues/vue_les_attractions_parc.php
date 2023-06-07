<br><br><br>
<div id="bloc">
	<h3>Liste des attractions du parc</h3>


	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Attraction</th>
				<th>Nom</th>
				<th>Statut</th>
				<th>Type</th>
				<th>Capacité (pers/h)</th>
				<th>Affluence</th>
				<th>Prix</th>
				<th>Heure d'ouverture</th>
				<th>Heure de fermeture</th>
			</tr>
		</thead>
		<?php 
			$typeStatus = "";
			foreach ($lesAttractionsDuParc as $unAttraction){
				if ($unAttraction['status']=='En Travaux'){
					$typeStatus = "typeStatusEnTravaux";
				} else if ($unAttraction['status']=='Fermée'){
					$typeStatus = "typeStatusFerme";
				} else{
					$typeStatus = "";
				}

				echo "<tr class='".$typeStatus."'>
				<td>".$unAttraction['idAttraction']."</td>
				<td>".$unAttraction['nom']."</td>
				<td class='".$typeStatus."'>".$unAttraction['status']."</td>
				<td>".$unAttraction['type']."</td>
				<td>".$unAttraction['capacite']."</td>
				<td>".$unAttraction['affluence']."</td>
				<td>".$unAttraction['prix']."</td>
				<td>".$unAttraction['heureOuv']."</td>
				<td>".$unAttraction['heureFerm']."</td>";
				
				echo "</tr>";
			}
		?>
	</table>
</div>