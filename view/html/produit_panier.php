<?php
include 'includes/header.inc';
?>
<div class="container">
<form action="" method="" >
	<table >
		<tr>
		<th>Id</th>
		<th>Libelle</th>
		<th>Prix</th>
		<th>description</th>
		<th>Categorie</th>
		<th>Validation d'achat</th>
		</tr>
		<?php foreach($item as $items){?>
		<tr>
		<td><?php echo $item->getId();?></td>
		<td><?php echo $item->getId();?></td>
		<td><?php echo $item->getId();?></td>
		<td><?php echo $item->getId();?></td>
		<td><?php echo $item->getId();?></td>
		<td><input type ="checkbox" name="v1" value="a" ></td>
		</tr>
		<?php}?>
	</table>
	<br/>Nbre d'achats:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" value="Validation d'achat"/>&nbsp;&nbsp;&nbsp;&nbsp;
	Cocher Tout<input type="checkbox" name="v6" id="tous" value="f" onclick="cocher(true);" />
</form>
</center>			
</div>

<?php
include 'includes/footer.inc';
?>