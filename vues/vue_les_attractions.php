<h2>Liste des attractions</h2>
<table border="1">
	<tr>
		<td>ID Attraction</td>
		<td>Nom</td>
		<td>Statut</td>
		<td>Type</td>
		<td>Capacité</td>
		<td>Affluence</td>
		<td>Prix</td>
		<td>Heure d'ouverture</td>
		<td>Heure de fermeture</td>
		<td>Parc</td>
		<td>Technicien</td>
		<td>Opérations</td>
	</tr>
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
			echo "<td><a href='index.php?page=2&action=edit&idAttraction=".$unAttraction['idAttraction']."'><img src='images/edit.png' height='35' width='35'></a>";
			echo "<a href='index.php?page=2&action=sup&idAttraction=".$unAttraction['idAttraction']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
			echo "</tr>";
		}
	?>
</table>