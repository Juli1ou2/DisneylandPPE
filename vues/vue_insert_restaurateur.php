<br>
<div id="bloc">
	<h2>Insertion d'un restaurateur</h2>	
	<form method="post" action="">
		<table>
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nom" value="<?= ($leRestaurateur != null) ? $leRestaurateur['nom'] : ""?>"></td>
			</tr>
			<tr>
				<td>Prénom</td>
				<td><input type="text" name="prenom" value="<?= ($leRestaurateur != null) ? $leRestaurateur['prenom'] : ""?>"></td>
			</tr>
			<tr>
				<td>Adresse</td>
				<td><input type="text" name="adresse" value="<?= ($leRestaurateur != null) ? $leRestaurateur['adresse'] : ""?>"></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td><input type="text" name="mail" value="<?= ($leRestaurateur != null) ? $leRestaurateur['mail'] : ""?>"></td>
			</tr>
			<tr>
				<td>Téléphone</td>
				<td><input type="text" name="tel" value="<?= ($leRestaurateur != null) ? $leRestaurateur['tel'] : ""?>"></td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td><input type="text" name="qualification" value="<?= ($leRestaurateur != null) ? $leRestaurateur['qualification'] : ""?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="reset" name="Annuler" value="Annuler">
					<input type="submit" <?= ($leRestaurateur != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
					<?= ($leRestaurateur != null) ? "<input type='hidden' name='idRestaurateur' value='".$leRestaurateur['idRestaurateur']."'>" : ""?>
			</tr>
		</table>
	</form>
</div>