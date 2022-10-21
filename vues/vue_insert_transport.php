<br>
<div id="bloc">
	<h2>Insertion d'un transport</h2>	
	<form method="post" action="">
		<table>
			<tr>
				<td>Libellé</td>
				<td><input type="text" name="libelle" value="<?= ($leTransport != null) ? $leTransport['libelle'] : ""?>"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><select name="type">
					<option value="Transport externe">Transport Externe</option>
					<option value="Transport interne">Transport Interne</option>
				</select></td>			
			</tr>
			<tr>
				<td>Capacité</td>
				<td><input type="text" name="capacite" value="<?= ($leTransport != null) ? $leTransport['capacite'] : ""?>"></td>
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
				<td>Horaire (fréquence)</td>
				<td><input type="time" name="horaire" value="<?= ($leTransport != null) ? $leTransport['horaire'] : ""?>"></td>
			</tr>
			<tr>
				<td>Prix</td>
				<td><input type="text" name="prix" value="<?= ($leTransport != null) ? $leTransport['prix'] : ""?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="reset" name="Annuler" value="Annuler">
					<input type="submit" <?= ($leTransport != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
					<?= ($leTransport != null) ? "<input type='hidden' name='idTransport' value='".$leTransport['idTransport']."'>" : ""?>
			</tr>
		</table>
	</form>
</div>