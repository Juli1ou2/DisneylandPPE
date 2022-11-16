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
				<th>ID User</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse</th>
				<th>Mail</th>
				<?php if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo "<th>Mot de passe</th>";
				} ?>
				<th>Téléphone</th>
				<th>Qualification</th>
				<th>Date d'Entrée</th>
				<?php if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo '<th>Opérations</th>';
				} ?>
			</tr>
		</thead>
		<?php 
			foreach ($lesTechniciens as $unTechnicien){
				echo "<tr>
				<td>".$unTechnicien['iduser']."</td>
				<td>".$unTechnicien['nom']."</td>
				<td>".$unTechnicien['prenom']."</td>
				<td>".$unTechnicien['adresse']."</td>
				<td>".$unTechnicien['email']."</td>";
				if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo "<td>".$unTechnicien['mdp']."</td>";
				}
				echo "<td>".$unTechnicien['tel']."</td>
				<td>".$unTechnicien['qualification']."</td>
				<td>".$unTechnicien['dateentree']."</td>";
				if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo "<td><a href='index.php?page=3&action=edit&idTechnicien=".$unTechnicien['iduser']."'><img src='images/edit.png' height='35' width='35'></a>";
					echo "<a href='index.php?page=3&action=sup&idTechnicien=".$unTechnicien['iduser']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</div>

<br><br>
<img src="images/technicien.jpg" height="480" width="960">