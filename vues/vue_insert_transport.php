<h2>Insertion d'un transport</h2>	
<form method="post" action="">
	<table>
		<tr>
			<td>Libellé</td>
			<td><input type="text" name="libelle" value="<?= ($leTransport != null) ? $leTransport['libelle'] : ""?>"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="<?= ($leTransport != null) ? $leTransport['type'] : ""?>"></td>
		</tr>
		<tr>
			<td>Capacité</td>
			<td><input type="text" name="capacite" value="<?= ($leTransport != null) ? $leTransport['capacite'] : ""?>"></td>
		</tr>
		<tr>
			<td>Affluence</td>
			<td><input type="text" name="affluence" value="<?= ($leTransport != null) ? $leTransport['affluence'] : ""?>"></td>
		</tr>
		<tr>
			<td>Horaire</td>
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