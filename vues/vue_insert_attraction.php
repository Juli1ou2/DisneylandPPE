<h2>Insertion d'une attraction</h2>	
<form method="post" action="">
	<table>
		<tr>
			<td>Nom</td>
			<td><input type="text" name="nom" value="<?= ($leAttraction != null) ? $leAttraction['nom'] : ""?>"></td>
		</tr>
		<tr>
			<td>Statut</td>
			<td><input type="text" name="status" value="<?= ($leAttraction != null) ? $leAttraction['status'] : ""?>"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="<?= ($leAttraction != null) ? $leAttraction['type'] : ""?>"></td>
		</tr>
		<tr>
			<td>Capacité</td>
			<td><input type="text" name="capacite" value="<?= ($leAttraction != null) ? $leAttraction['capacite'] : ""?>"></td>
		</tr>
		<tr>
			<td>Affluence</td>
			<td><input type="text" name="affluence" value="<?= ($leAttraction != null) ? $leAttraction['affluence'] : ""?>"></td>
		</tr>
		<tr>
			<td>Prix</td>
			<td><input type="text" name="prix" value="<?= ($leAttraction != null) ? $leAttraction['prix'] : ""?>"></td>
		</tr>
		<tr>
			<td>Heure d'ouverture</td>
			<td><input type="time" name="heureOuv" value="<?= ($leAttraction != null) ? $leAttraction['heureOuv'] : ""?>"></td>
		</tr>
		<tr>
			<td>Heure de fermeture</td>
			<td><input type="time" name="heureFerm" value="<?= ($leAttraction != null) ? $leAttraction['heureFerm'] : ""?>"></td>
		</tr>
		<tr>
			<td>Parc</td>
			<td><select name="idParc" value="<?php if($leAttraction!=null) echo $leAttraction['idParc'];?>">
				<?php
					foreach ($lesParcs as $unParc) {
						echo "<option value='".$unParc['idParc']."'>";
						echo $unParc['nom'];
						echo "</option>";
					}
				?>
			</select></td>
		<tr>
			<tr>
			<td>Technicien</td>
			<td><select name="idTechnicien" value="<?php if($leAttraction!=null) echo $leAttraction['idTechnicien'];?>">
				<?php
					foreach ($lesTechniciens as $unTechnicien) {
						echo "<option value='".$unTechnicien['idTechnicien']."'>";
						echo $unTechnicien['prenom']." ".$unTechnicien['nom'];
						echo "</option>";
					}
				?>
			</select></td>
		<tr>
		<tr>
			<td></td>
			<td><input type="reset" name="Annuler" value="Annuler">
				<input type="submit" <?= ($leAttraction != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
				<?= ($leAttraction != null) ? "<input type='hidden' name='idAttraction' value='".$leAttraction['idAttraction']."'>" : ""?>
		</tr>
	</table>
</form>