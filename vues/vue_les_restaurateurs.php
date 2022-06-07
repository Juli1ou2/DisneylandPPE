<h2>Liste des restaurateurs</h2>
<table border="1">
	<tr>
		<td>ID Restaurateur</td>
		<td>Nom</td>
		<td>Prénom</td>
		<td>Adresse</td>
		<td>Email</td>
		<td>Téléphone</td>
		<td>Qualification</td>
		<td>Opérations</td>
	</tr>
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