<br><br><br>
<div id="bloc">
	<h2>Vos informations</h2>
    <table id="table_profile">
        <?php 
            echo "
            <tr><td>Nom</td><td>".$_SESSION['nom']."</td></tr>
            <tr><td>Prénom</td><td>".$_SESSION['prenom']."</td></tr>
            <tr><td>Adresse</td><td>".$_SESSION['adresse']."</td></tr>
            <tr><td>Email</td><td>".$_SESSION['email']."</td></tr>
            <tr><td>Téléphone</td><td>".$_SESSION['tel']."</td></tr>
            <tr><td>Rôle</td><td>".$_SESSION['role']."</td></tr>
            ";
        ?>
    </table>
</div>