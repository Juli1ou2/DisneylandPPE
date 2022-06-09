<div id="grand_bloc">
	<div id="bloc">
		<h2>Connexion</h2>
		<form method="post" action="">
			<table>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Mot de passe : </td>
					<td><input type="password" name="mdp"></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="bouton" type="reset" name="Annuler" value="Annuler">
						<input type="submit" name="SeConnecter" value="Se connecter"></td>
				</tr>
			</table>
		</form>
	</div>

	<?php
		require_once("vues/vue_insert_client.php");
	?>
</div>

<br><br>
<img src="images/connexion.jpg" height="507" width="902">