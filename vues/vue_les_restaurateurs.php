<h2>Liste des restaurateurs</h2>
<table id="table_affichage">
	<thead>
		<tr>
			<th>ID Restaurateur</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Adresse</th>
			<th>Email</th>
			<th>Téléphone</th>
			<th>Qualification</th>
			<th>Opérations</th>
		</tr>
	</thead>
	<?php 
		foreach ($lesRestaurateurs as $unRestaurateur){
			echo "<tr>
			<td>".$unRestaurateur['idRestaurateur']."</td>
			<td>".$unRestaurateur['nom']."</td>
			<td>".$unRestaurateur['prenom']."</td>
			<td>".$unRestaurateur['adresse']."</td>
			<td>".$unRestaurateur['mail']."</td>
			<td>".$unRestaurateur['tel']."</td>
			<td>".$unRestaurateur['qualification']."</td>";
			echo "<td><a href='index.php?page=5&action=edit&idRestaurateur=".$unRestaurateur['idRestaurateur']."'><img src='images/edit.png' height='35' width='35'></a>";
			echo "<a href='index.php?page=5&action=sup&idRestaurateur=".$unRestaurateur['idRestaurateur']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
			echo "</tr>";
		}
	?>
</table>