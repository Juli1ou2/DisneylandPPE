<h2>Liste des techniciens</h2>
<table id="table_affichage">
	<thead>
		<tr>
			<th>ID Technicien</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Adresse</th>
			<th>Mail</th>
			<th>Téléphone</th>
			<th>Qualification</th>
			<th>Rôle</th>
			<th>Opérations</th>
		</tr>
	</thead>
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