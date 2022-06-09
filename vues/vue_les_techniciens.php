<br><br><br>
<div id="bloc">
	<h2>Liste des techniciens</h2>

	<form method="post" action="">
		Rechercher :
		<input type="text" name="mot">
		<input type="submit" name="Rechercher" value="Rechercher">
	</form>
	<br/>

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
				<?php if(isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
					echo '<th>Opérations</th>';
				} ?>
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
				<td>".$unTechnicien['qualification']."</td>";
				if(isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
					echo "<td><a href='index.php?page=3&action=edit&idTechnicien=".$unTechnicien['idTechnicien']."'><img src='images/edit.png' height='35' width='35'></a>";
					echo "<a href='index.php?page=3&action=sup&idTechnicien=".$unTechnicien['idTechnicien']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</div>

<br><br>
<img src="images/technicien.jpg" height="480" width="960">