<h2>Liste des restaurants</h2>
<table border="1">
	<tr>
		<td>ID Restaurant</td>
		<td>Nom</td>
		<td>Thème</td>
		<td>Effectif maximum</td>
		<td>Affluence</td>
		<td>Type</td>
		<td>Capacité</td>
		<td>Opérations</td>
	</tr>
	<?php 
		foreach ($lesRestaurants as $unRestaurant){
			echo "<tr>
			<td>".$unRestaurant['idRestaurant']."</td>
			<td>".$unRestaurant['nom']."</td>
			<td>".$unRestaurant['theme']."</td>
			<td>".$unRestaurant['effectifMax']."</td>
			<td>".$unRestaurant['affluence']."</td>
			<td>".$unRestaurant['type']."</td>
			<td>".$unRestaurant['capacite']."</td>";
			echo "<td><a href='index.php?page=1&action=edit&idRestaurant=".$unRestaurant['idRestaurant']."'><img src='images/edit.png' height='35' width='35'></a>";
			echo "<a href='index.php?page=1&action=sup&idRestaurant=".$unRestaurant['idRestaurant']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
			echo "</tr>";
		}
	?>
</table>