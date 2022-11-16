<br><br><br>
<div id="bloc">
	<h2>Liste des restaurants</h2>

	<form method="post" action="">
		Rechercher :
		<input type="text" name="mot">
		<input type="submit" name="Rechercher" value="Rechercher">
	</form>
	<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Restaurant</th>
				<th>Nom</th>
				<th>Thème</th>
				<th>Effectif maximum</th>
				<th>Affluence</th>
				<th>Type</th>
				<th>Capacité (pers/h)</th>
				<th>Restaurateur</th>
				<?php if(isset($_SESSION['email']) and ($_SESSION['role']=='admin' or $_SESSION['role']=='restaurateur')){
					echo '<th>Opérations</th>';
				} ?>
			</tr>
		</thead>
		<?php 
			foreach ($lesRestaurants as $unRestaurant){
				echo "<tr>
				<td>".$unRestaurant['idRestaurant']."</td>
				<td>".$unRestaurant['nom']."</td>
				<td>".$unRestaurant['theme']."</td>
				<td>".$unRestaurant['effectifMax']."</td>
				<td>".$unRestaurant['affluence']."</td>
				<td>".$unRestaurant['type']."</td>
				<td>".$unRestaurant['capacite']."</td>
				<td>".$unRestaurant['iduser']."</td>";
				if(isset($_SESSION['email']) and ($_SESSION['role']=='admin' or $_SESSION['role']=='restaurateur')){
					echo "<td><a href='index.php?page=4&action=edit&idRestaurant=".$unRestaurant['idRestaurant']."'><img src='images/edit.png' height='35' width='35'></a>";
					echo "<a href='index.php?page=4&action=sup&idRestaurant=".$unRestaurant['idRestaurant']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</div>

<br><br>
<img src="images/restaurant.jpg" height="513" width="912">