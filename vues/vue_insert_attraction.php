<br>
<div id="bloc">
	<h2>Insertion d'une attraction</h2>	
	<form method="post" action="">
		<table>
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nom" value="<?= ($leAttraction != null) ? $leAttraction['nom'] : ""?>"></td>
			</tr>
			<tr>
				<td>Statut</td>
				<td><select name="status">
					<option value="Ouverte">Ouverte</option>
					<option value="Fermée">Fermée</option>
					<option value="En Travaux">En Travaux</option>
				</select></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><select name="type">
					<option value="Spectacle">Spectacle</option>
					<option value="Montagne Russe">Montagne Russe</option>
					<option value="Manège">Manège</option>
					<option value="Dark Ride">Dark Ride</option>
					<option value="Simulateur de vol">Simulateur de vol</option>
					<option value="Chute dans le vide">Chute dans le vide</option>
				</select></td>
			</tr>
			<tr>
				<td>Capacité</td>
				<td><input type="text" name="capacite" value="<?= ($leAttraction != null) ? $leAttraction['capacite'] : ""?>"></td>
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
			</tr>
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
			</tr>
			<tr>
				<td></td>
				<td><input type="reset" name="Annuler" value="Annuler">
					<input type="submit" <?= ($leAttraction != null) ? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" '?> ></td>
					<?= ($leAttraction != null) ? "<input type='hidden' name='idAttraction' value='".$leAttraction['idAttraction']."'>" : ""?>
			</tr>
		</table>
	</form>
</div>