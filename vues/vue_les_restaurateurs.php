<br><br><br>
<div id="bloc">
	<h2>Liste des restaurateurs</h2>

	<form method="post" action="">
		Rechercher :
		<input type="text" name="mot">
		<input type="submit" name="Rechercher" value="Rechercher">
	</form>
	<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Restaurateur</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse</th>
				<th>Email</th>
				<?php if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo "<th>Mot de passe</th>";
				} ?>
				<th>Téléphone</th>
				<th>Qualification</th>
				<th>Ancienneté</th>
				<?php if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo '<th>Opérations</th>';
				} ?>
			</tr>
		</thead>
		<?php 
			foreach ($lesRestaurateurs as $unRestaurateur){
				echo "<tr>
				<td>".$unRestaurateur['iduser']."</td>
				<td>".$unRestaurateur['nom']."</td>
				<td>".$unRestaurateur['prenom']."</td>
				<td>".$unRestaurateur['adresse']."</td>
				<td>".$unRestaurateur['email']."</td>";
				if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo "<td>".$unRestaurateur['mdp']."</td>";
				}
				echo "<td>".$unRestaurateur['tel']."</td>
				<td>".$unRestaurateur['qualification']."</td>
				<td>".$unRestaurateur['anciennete']."</td>";
				if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
					echo "<td><a href='index.php?page=5&action=edit&idRestaurateur=".$unRestaurateur['iduser']."'><img src='images/edit.png' height='35' width='35'></a>";
					echo "<a href='index.php?page=5&action=sup&idRestaurateur=".$unRestaurateur['iduser']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</div>

<br><br>
<img src="images/restaurateur.jpg" height="467" width="679">