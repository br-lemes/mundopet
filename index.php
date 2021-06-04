<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mundo Pet</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/w3.css">
		<link rel="icon" href="/favicon.ico">
	</head>
	<body>
		<nav class="w3-card w3-blue w3-cell-row w3-center" style="position: sticky; top: 0;">
			<div class="w3-cell w3-cell-middle">
				<a href="/"><img src="/images/logo.png" width="80px"></a>
			</div>
			<div class="w3-cell w3-cell-middle">
				<p><input type="text" class="w3-input" placeholder="Pesquisar na Mundo Pet"></p>
				<p>O Pet Shop mais perto de você</p>
			</div>
			<div class="w3-cell w3-cell-middle">
				<a class="w3-button w3-indigo w3-hover-black" href="#">Entrar</a>
			</div>
			</div>
		</nav>
		<div class="w3-card w3-container w3-content w3-section w3-pale-yellow"><?php
			$uri = explode("/", $_SERVER["REQUEST_URI"]);
			if (count($uri) == 2 and $uri[0] == "" and $uri[1] == "") { ?>
			<div class="w3-row"><?php
				$db = new PDO("sqlite:database/mundopet.sqlite3");
				foreach ($db->query("SELECT * FROM products") as $row) { ?>
				<a href="/products/<?=$row["id"]?>">
					<div class="w3-col s6 m3 w3-panel w3-hover-white">
						<img class="w3-image" src="/images/<?=$row["img"]?>">
						<p class="w3-right-align">
							<span class="w3-button w3-light-green w3-hover-light-green">
								R$ <?=$row["price"]?>
							</span>
						</p>
						<p><?=$row["name"]?></p>
					</div>
				</a>
			<?php } ?></div><?php } elseif (count($uri) == 3 and $uri[0] == "" and $uri[1] == "products") {
				$db = new PDO("sqlite:database/mundopet.sqlite3");
				$stmt = $db->prepare("SELECT * FROM products WHERE id=?");
				$stmt->execute([$uri[2]]);
				foreach ($stmt->fetchAll() as $row) { ?>
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
						<?php
							$description = explode("\n", $row["description"]);
							foreach ($description as $line) { ?>
								<p><?=$line?></p><?php
							}
						?>
					</div>
				</div>
			<?php } } else { ?>
				<h1 class="w3-center">Ops!</h1>
				<h2 class="w3-center">Algo deu errado :(</h2>
				<p class="w3-center">Não estamos encontrando o que você quer,
				utilize a nossa busca ou volte à página inicial.</p>
			<?php } ?>
		</div>
		<div class="w3-card w3-container w3-content w3-section w3-pale-yellow">
			<p class="w3-center">Copyright (c) 2021 Mundo Pet</p>
		</div>
	</body>
</html>
