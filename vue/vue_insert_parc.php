<h2>Insertion d'un parc</h2>	
<form method="post" action="">
	<table>
		<tr>
			<td>Nom</td>
			<td><input type="text" name="nom" value="<?= ($leParc != null) ? $leParc['nom'] : ""?>"></td>
		</tr>
		<tr>
			<td>Capacité</td>
			<td><input type="text" name="capacite" value="<?= ($leParc != null) ? $leParc['capacite'] : ""?>"></td>
		</tr>
		<tr>
			<td>Nombre total d'attractions</td>
			<td><input type="text" name="nbAttractionsTotales" value="<?= ($leParc != null) ? $leParc['nbAttractionsTotales'] : ""?>"></td>
		</tr>
		<tr>
			<td>Nombre d'attractions fonctionnelles</td>
			<td><input type="text" name="nbAttractionsFonctionnelles " value="<?= ($leParc != null) ? $leParc['nbAttractionsFonctionnelles '] : ""?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="reset" name="Annuler" value="Annuler">
				<input type="submit" <?= ($leParc != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
				<?= ($leParc != null) ? "<input type='hidden' name='idParc' value='".$leParc['idParc']."'>" : ""?>
		</tr>
	</table>
</form>