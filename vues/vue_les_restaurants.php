<br><br><br>
<div id="bloc">
	<h2>Liste des restaurants</h2>

	<form method="post" action="">
		Rechercher :
		<input type="text" name="mot">
		<input type="submit" name="Rechercher" value="Rechercher">
	</form>
	<br><br>
		<form method="post" action="">
		Filtre : Nom dd
		<input type="submit" name = "Nom_ASC" value = "Nom_ASC"><img src="images/ASC.png"  height="15" width="15">
		<button type="button" name = "Nom_DESC" value = "Nom_DESC"><img src="images/DESC.png"  height="15" width="15"></button>
		Themes 
		<button type="button" value ="Theme_ASC"><img src="images/ASC.png"  height="15" width="15"></button>
		<button type="button" value = "Theme_DESC"> <img src="images/DESC.png"  height="15" width="15"></button>
	</form>
	<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Restaurant</th>
				<th>Nom</th>
				<th>Thème</th>
				<th>Type</th>
				<th>Capacité (pers/h)</th>
				<th>Restaurateur</th>
				<?php if(isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
					echo '<th>Opérations</th>';
				} ?>
				<th>Voir</th>

			</tr>
		</thead>
		<?php 
			foreach ($lesRestaurants as $unRestaurant){
				echo "<tr>
				<td>".$unRestaurant['idRestaurant']."</td>
				<td>".$unRestaurant['nom']."</td>
				<td>".$unRestaurant['theme']."</td>
				<td>".$unRestaurant['type']."</td>
				<td>".$unRestaurant['capacite']."</td>
				<td>".$unRestaurant['idRestaurateur']."</td>";
				if(isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
					echo "<td><a href='index.php?page=4&action=edit&idRestaurant=".$unRestaurant['idRestaurant']."'><img src='images/edit.png' height='35' width='35'></a>";
					echo "<a href='index.php?page=4&action=sup&idRestaurant=".$unRestaurant['idRestaurant']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
				}
				echo "<td><a href='index.php?page=4&action=voir&idRestaurant=".$unRestaurant['idRestaurant']."'><img src='images/Logo_oeil.png' height ='35' width='35'></a></td>" ;
				echo "</tr>";

			}
		?>
	</table>
</div>

<br><br>
<?= ($leRestaurant!=null)? "<img src='".$leRestaurant['url']."' height='513' width='912'>":""?>




