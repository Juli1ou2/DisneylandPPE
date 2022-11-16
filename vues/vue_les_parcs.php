<br><br><br>
<div id="bloc">
	<h2>Liste des parcs</h2>

	<form method="post" action="">
		Rechercher :
		<input type="text" name="mot">
		<input type="submit" name="Rechercher" value="Rechercher">
	</form>
	<br/>

	<table id="table_affichage">
		<thead>
			<tr>
				<th>ID Parc</th>
				<th>Nom</th>
				<th>Capacité</th>
				<th>Nombre total d'attractions</th>
				<th>Nombre d'attractions fonctionnelles</th>
				<?php if(isset($_SESSION['email']) and ($_SESSION['role']=='admin' or $_SESSION['role']=='technicien')){
					echo '<th>Opérations</th>';
				} ?>
			</tr>
		</thead>
		<?php 
			foreach ($lesParcs as $unParc){
				echo "<tr>
				<td>".$unParc['idParc']."</td>
				<td>".$unParc['nom']."</td>
				<td>".$unParc['capacite']."</td>
				<td>".$unParc['nbAttractionsTotales']."</td>
				<td>".$unParc['nbAttractionsFonctionnelles']."</td>";
				if(isset($_SESSION['email']) and ($_SESSION['role']=='admin' or $_SESSION['role']=='technicien')){
					echo "<td><a href='index.php?page=1&action=edit&idParc=".$unParc['idParc']."'><img src='images/edit.png' height='35' width='35'></a>";
					echo "<a href='index.php?page=1&action=sup&idParc=".$unParc['idParc']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</div>

<br><br>
<img src="images/parc.jpg" height="480" width="720">