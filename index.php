<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mundo Pet</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/w3.css">
	</head>
	<body>
		<nav class="w3-card w3-blue w3-cell-row w3-center" style="position: sticky; top: 0;">
			<div class="w3-cell w3-cell-middle">
				<img src="/images/logo.png" width="80px">
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
		<div class="w3-card w3-container w3-content w3-section w3-pale-yellow">
			<div class="w3-row"><?php
				$db = new SQLite3("mundopet.sqlite3");
				$results = $db->query("SELECT * FROM products");
				while ($row = $results->fetchArray()) {
			?>
				<a href="/products/<?=$row[0]?>">
					<div class="w3-col s6 m3 w3-container w3-hover-white">
						<img class="w3-image" src="/images/<?=$row[4]?>">
						<p class="w3-right-align">
							<span class="w3-button w3-light-green w3-hover-light-green">
								R$ <?=$row[3]?>
							</span>
						</p>
						<p><?=$row[1]?></p>
					</div>
				</a>
			<?php } ?></div>
		</div>
		<div class="w3-card w3-container w3-content w3-section w3-pale-yellow">
			<p class="w3-center">Copyright (c) 2021 Mundo Pet</p>
		</div>
	</body>
</html>
