<h2>Insertion d'un restaurant</h2>	
<form method="post" action="">
	<table>
		<tr>
			<td>Nom</td>
			<td><input type="text" name="nom" value="<?= ($leRestaurant != null) ? $leRestaurant['nom'] : ""?>"></td>
		</tr>
		<tr>
			<td>Thème</td>
			<td><input type="text" name="theme" value="<?= ($leRestaurant != null) ? $leRestaurant['theme'] : ""?>"></td>
		</tr>
		<tr>
			<td>Effectif maximum</td>
			<td><input type="text" name="effectifMax" value="<?= ($leRestaurant != null) ? $leRestaurant['effectifMax'] : ""?>"></td>
		</tr>
		<tr>
			<td>Affluence</td>
			<td><input type="text" name="affluence" value="<?= ($leRestaurant != null) ? $leRestaurant['affluence'] : ""?>"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="<?= ($leRestaurant != null) ? $leRestaurant['type'] : ""?>"></td>
		</tr>
		<tr>
			<td>Capacité</td>
			<td><input type="text" name="capacite" value="<?= ($leRestaurant != null) ? $leRestaurant['capacite'] : ""?>"></td>
		</tr>
		<tr>
			<td>Restaurateur</td>
			<td><select name="idRestaurateur" value="<?php if($leRestaurant!=null) echo $leRestaurant['idRestaurateur'];?>">
				<?php
					foreach ($lesRestaurateurs as $unRestaurateur) {
						echo "<option value='".$unRestaurateur['idRestaurateur']."'>";
						echo $unRestaurateur['prenom']." ".$unRestaurateur['nom'];
						echo "</option>";
					}
				?>
			</select></td>
		<tr>
			<td></td>
			<td><input type="reset" name="Annuler" value="Annuler">
				<input type="submit" <?= ($leRestaurant != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
				<?= ($leRestaurant != null) ? "<input type='hidden' name='idRestaurant' value='".$leRestaurant['idRestaurant']."'>" : ""?>
		</tr>
	</table>
</form>