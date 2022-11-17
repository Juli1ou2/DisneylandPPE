<br>
<div id="bloc">
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
				<td><select name="affluence">
					<option value="Vide">Vide</option>
					<option value="10%">10%</option>
					<option value="20%">20%</option>
					<option value="30%">30%</option>
					<option value="40%">40%</option>
					<option value="50%">50%</option>
					<option value="60%">60%</option>
					<option value="70%">70%</option>
					<option value="80%">80%</option>
					<option value="90%">90%</option>
					<option value="Pleine">Pleine</option>
				</select></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><select name="type">
					<option value="Service à Table">Service à Table</option>
					<option value="Restauration à Emporter">Restauration à Emporter</option>
				</select></td>
			</tr>
			<tr>
				<td>Capacité</td>
				<td><input type="text" name="capacite" value="<?= ($leRestaurant != null) ? $leRestaurant['capacite'] : ""?>"></td>
			</tr>
			<tr>
				<td>Restaurateur</td>
				<td><select name="iduser" value="<?php if($leRestaurant!=null) echo $leRestaurant['iduser'];?>">
					<?php
						foreach ($lesRestaurateurs as $unRestaurateur) {
							echo "<option value='".$unRestaurateur['iduser']."'>";
							echo $unRestaurateur['prenom']." ".$unRestaurateur['nom'];
							echo "</option>";
						}
					?>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="reset" name="Annuler" value="Annuler">
					<input type="submit" <?= ($leRestaurant != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
					<?= ($leRestaurant != null) ? "<input type='hidden' name='idRestaurant' value='".$leRestaurant['idRestaurant']."'>" : ""?>
			</tr>
		</table>
	</form>
</div>