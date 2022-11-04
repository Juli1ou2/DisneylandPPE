<br>
<div id="bloc">
	<h2>Insertion d'un technicien</h2>	
	<form method="post" action="">
		<table>
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nom" value="<?= ($leTechnicien != null) ? $leTechnicien['nom'] : ""?>"></td>
			</tr>
			<tr>
				<td>Prénom</td>
				<td><input type="text" name="prenom" value="<?= ($leTechnicien != null) ? $leTechnicien['prenom'] : ""?>"></td>
			</tr>
			<tr>
				<td>Adresse</td>
				<td><input type="text" name="adresse" value="<?= ($leTechnicien != null) ? $leTechnicien['adresse'] : ""?>"></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td><input type="text" name="email" value="<?= ($leTechnicien != null) ? $leTechnicien['email'] : ""?>"></td>
			</tr>
			<tr>
				<td>Mot de passe</td>
				<td><input type="password" name="mdp" value="<?= ($leTechnicien != null) ? $leTechnicien['mdp'] : ""?>"></td>
			</tr>
			<tr>
				<td>Téléphone</td>
				<td><input type="text" name="tel" value="<?= ($leTechnicien != null) ? $leTechnicien['tel'] : ""?>"></td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td><input type="text" name="qualification" value="<?= ($leTechnicien != null) ? $leTechnicien['qualification'] : ""?>"></td>
			</tr>
			<tr>
				<td>Date d'entrée</td>
				<td><input type="date" name="dateentree" value="<?= ($leTechnicien != null) ? $leTechnicien['dateentree'] : ""?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="reset" name="Annuler" value="Annuler">
					<input type="submit" <?= ($leTechnicien != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
					<?= ($leTechnicien != null) ? "<input type='hidden' name='idTechnicien' value='".$leTechnicien['idTechnicien']."'>" : ""?>
			</tr>
		</table>
	</form>
</div>