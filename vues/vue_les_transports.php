<h2>Liste des transports</h2>
<table id="table_affichage">
	<thead>
		<tr>
			<th>ID Transport</th>
			<th>Libellé</th>
			<th>Type</th>
			<th>Capacité</th>
			<th>Affluence</th>
			<th>Horaire</th>
			<th>Prix</th>
			<th>Opérations</th>
		</tr>
	</thead>
	<?php 
		foreach ($lesTransports as $unTransport){
			echo "<tr>
			<td>".$unTransport['idTransport']."</td>
			<td>".$unTransport['libelle']."</td>
			<td>".$unTransport['type']."</td>
			<td>".$unTransport['capacite']."</td>
			<td>".$unTransport['affluence']."</td>
			<td>".$unTransport['horaire']."</td>
			<td>".$unTransport['prix']."</td>";
			echo "<td><a href='index.php?page=6&action=edit&idTransport=".$unTransport['idTransport']."'><img src='images/edit.png' height='35' width='35'></a>";
			echo "<a href='index.php?page=6&action=sup&idTransport=".$unTransport['idTransport']."'><img src='images/sup.jpg' height='35' width='35'></a></td>";
			echo "</tr>";
		}
	?>
</table>