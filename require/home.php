<div class="w3-row">
<?php
	$db = new PDO("sqlite:database/mundopet.sqlite3");
	foreach ($db->query("SELECT * FROM products") as $row) {
?>
<a class="w3-col s6 m3 w3-panel w3-hover-white" href="/products/<?=$row["id"]?>">
	<img class="w3-image" src="/images/<?=$row["img"]?>">
	<p class="w3-right-align">
		<span class="w3-button w3-light-green">R$ <?=$row["price"]?></span>
	</p>
	<p><?=$row["name"]?></p>
</a>
<?php
	}
?>
</div>
