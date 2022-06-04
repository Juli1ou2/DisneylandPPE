<h2>Liste des parcs</h2>
<table border="1">
	<tr>
		<td>ID Parc</td>
		<td>Nom</td>
		<td>Capacité</td>
		<td>Nombre total d'attractions</td>
		<td>Nombre d'attractions fonctionnelles</td>
		<td>Opérations</td>
	</tr>
	<?php 
		foreach ($lesParcs as $unParc){
			echo "<tr>
			<td>".$unParc['idParc']."</td>
			<td>".$unParc['nom']."</td>
			<td>".$unParc['prenom']."</td>
			<td>".$unParc['adresse']."</td>
			<td>".$unParc['tel']."</td>";
			echo "<td><a href='index.php?page=1&action=edit&idParc=".$unParc['idParc']."'><img src='images/edit.png' height='35' width='35'></a>";
			echo "<a href='index.php?page=1&action=sup&idParc=".$unParc['idParc']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
			echo "</tr>";
		}
	?>
</table>