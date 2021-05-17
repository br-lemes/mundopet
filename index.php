<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mundo Pet</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="w3.css">
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
				<a class="w3-button w3-indigo w3-hover-deep-purple" href="#">Entrar</a>
			</div>
			</div>
		</nav>
		<div class="w3-card w3-container w3-content w3-section w3-pale-yellow">
			<div class="w3-row"><?php
				$db = new SQLite3("petshop.sqlite3");
				$results = $db->query("SELECT * FROM products");
				while ($row = $results->fetchArray()) {
			?>
				<div class="w3-half w3-container">
					<h2><a href="/products/?id=<?=$row[0]?>"><?=$row[1]?></a></h2>
					<img class="w3-image" src="/images/<?=$row[4]?>">
					<p class="w3-right-align">
						<a class="w3-button w3-light-green w3-hover-green" href="/products/?id=<?=$row[0]?>">
							R$ <?=$row[3]?>
						</a>
					</p>
				</div>
			<?php } ?></div>
			<p class="w3-center">CONTEÚDO AQUI</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<div class="w3-card w3-container w3-content w3-section w3-pale-yellow">
			<p class="w3-center">RODAPÉ AQUI</p>
		</div>
	</body>
</html>
