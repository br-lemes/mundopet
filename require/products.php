<?php
	$db = new PDO("sqlite:database/mundopet.sqlite3");
	$stmt = $db->prepare("SELECT * FROM products WHERE id=?");
	$stmt->execute([$uri[2]]);
	foreach ($stmt->fetchAll() as $row) {
?>
	<div class="w3-row">
		<div class="w3-col m4 w3-panel">
			<img class="w3-image" src="/images/<?=$row["img"]?>">
			<p class="w3-center">
				<a class="w3-button w3-green" href="/buy/<?=$uri[2]?>">Comprar</a>
			</p>
		</div>
		<div class="w3-col m8 w3-panel">
			<h1><?=$row["name"]?></h1>
			<h2>R$ <?=$row["price"]?></h2>
			<?php foreach (explode("\n", $row["description"]) as $line) { ?>
				<p><?=$line?></p><?php } ?>
		</div>
	</div>
<?php
	}
?>
