<h2>Réservation</h2>
<br>

<form method="post" action="">
<input type="submit" name="nouvelleCommande" value="NOUVELLE COMMANDE">
</form>

<br><br><br>
<div id="grand_bloc">
	<div id="bloc">
		<h3>Ajout d'une Attraction</h3>	
		<form method="post" action="">
			<table>
				<tr>
					<td>Commande</td>
					<td><select name="idCommande" value="<?php if($leReserver1!=null) echo $leReserver1['idCommande'];?>">
						<?php
							foreach ($lesCommandes as $unCommande) {
								echo "<option value='".$unCommande['idCommande']."'>";
								echo $unCommande['idCommande'];
								echo "</option>";
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td>Attraction</td>
					<td><select name="idAttraction" value="<?php if($leReserver1!=null) echo $leReserver1['idAttraction'];?>">
						<?php
							foreach ($lesAttractions as $unAttraction) {
								echo "<option value='".$unAttraction['idAttraction']."'>";
								echo $unAttraction['nom'];
								echo "</option>";
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="dateResa" value="<?= ($leReserver1 != null) ? $leReserver1['dateResa'] : ""?>"></td>
				</tr>
				<tr>
					<td>Heure</td>
					<td><input type="time" name="heure" value="<?= ($leReserver1 != null) ? $leReserver1['heure'] : ""?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="reset" name="Annuler" value="Annuler">
						<input type="submit" <?= ($leReserver1 != null) ? ' name="ModifierAttraction" value="Modifier" ' : ' name="AjouterAttraction" value="Ajouter" '?> ></td>
						<?= ($leReserver1 != null) ? "<input type='hidden' name='idCommande' value='".$leReserver1['idCommande']."'>" : ""?>
				</tr>
			</table>
		</form>
	</div>

<div id="bloc">
		<h3>Ajout d'un Restaurant</h3>	
		<form method="post" action="">
			<table>
				<tr>
					<td>Commande</td>
					<td><select name="idCommande" value="<?php if($leReserver2!=null) echo $leReserver2['idCommande'];?>">
						<?php
							foreach ($lesCommandes as $unCommande) {
								echo "<option value='".$unCommande['idCommande']."'>";
								echo $unCommande['idCommande'];
								echo "</option>";
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td>Restaurant</td>
					<td><select name="idRestaurant" value="<?php if($leReserver2!=null) echo $leReserver2['idRestaurant'];?>">
						<?php
							foreach ($lesRestaurants as $unRestaurant) {
								echo "<option value='".$unRestaurant['idRestaurant']."'>";
								echo $unRestaurant['nom'];
								echo "</option>";
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="reset" name="Annuler" value="Annuler">
						<input type="submit" <?= ($leReserver2 != null) ? ' name="ModifierRestaurant" value="Modifier" ' : ' name="AjouterRestaurant" value="Ajouter" '?> ></td>
						<?= ($leReserver2 != null) ? "<input type='hidden' name='idCommande' value='".$leReserver2['idCommande']."'>" : ""?>
				</tr>
			</table>
		</form>
	</div>

	<div id="bloc">
		<h3>Ajout d'un Transport</h3>	
		<form method="post" action="">
			<table>
				<tr>
					<td>Commande</td>
					<td><select name="idCommande" value="<?php if($leReserver3!=null) echo $leReserver3['idCommande'];?>">
						<?php
							foreach ($lesCommandes as $unCommande) {
								echo "<option value='".$unCommande['idCommande']."'>";
								echo $unCommande['idCommande'];
								echo "</option>";
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td>Transport</td>
					<td><select name="idTransport" value="<?php if($leReserver3!=null) echo $leReserver3['idTransport'];?>">
						<?php
							foreach ($lesTransports as $unTransport) {
								echo "<option value='".$unTransport['idTransport']."'>";
								echo $unTransport['libelle'];
								echo "</option>";
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="dateResa" value="<?= ($leReserver3 != null) ? $leReserver3['dateResa'] : ""?>"></td>
				</tr>
				<tr>
					<td>Heure</td>
					<td><input type="time" name="heure" value="<?= ($leReserver3 != null) ? $leReserver3['heure'] : ""?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="reset" name="Annuler" value="Annuler">
						<input type="submit" <?= ($leReserver3 != null) ? ' name="ModifierTransport" value="Modifier" ' : ' name="AjouterTransport" value="Ajouter" '?> ></td>
						<?= ($leReserver3 != null) ? "<input type='hidden' name='idCommande' value='".$leReserver3['idCommande']."'>" : ""?>
				</tr>
			</table>
		</form>
	</div>

</div>