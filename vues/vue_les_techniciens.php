<h2>Liste des techniciens</h2>
<table border="1">
	<tr>
		<td>ID Technicien</td>
		<td>Nom</td>
		<td>Prénom</td>
		<td>Adresse</td>
		<td>Mail</td>
		<td>Téléphone</td>
		<td>Qualification</td>
		<td>Rôle</td>
		<td>Opérations</td>
	</tr>
	<?php 
		foreach ($lesTechniciens as $unTechnicien){
			echo "<tr>
			<td>".$unTechnicien['idTechnicien']."</td>
			<td>".$unTechnicien['nom']."</td>
			<td>".$unTechnicien['prenom']."</td>
			<td>".$unTechnicien['adresse']."</td>
			<td>".$unTechnicien['email']."</td>
			<td>".$unTechnicien['tel']."</td>
			<td>".$unTechnicien['qualification']."</td>
			<td>".$unTechnicien['role']."</td>";
			echo "<td><a href='index.php?page=3&action=edit&idTechnicien=".$unTechnicien['idTechnicien']."'><img src='images/edit.png' height='35' width='35'></a>";
			echo "<a href='index.php?page=3&action=sup&idTechnicien=".$unTechnicien['idTechnicien']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
			echo "</tr>";
		}
	?>
</table>