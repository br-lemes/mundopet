<div class="w3-row">
<?php
	$page = $uri[1];
	$db = new PDO("sqlite:database/mundopet.sqlite3");
	$count = $db->query("SELECT COUNT(id) FROM products")->fetch()[0];
	if ($page <= 1 or $page > ceil($count/6)) {
		require "require/404.php";
	} else {
		$stmt = $db->prepare("SELECT * FROM products LIMIT ?, 6");
		$stmt->execute([($uri[1]-1)*6]);
		foreach ($stmt->fetchAll() as $row) {
			require "require/item.php";
		} ?></div><?php
		require "require/pagination.php";
	}
?>
</div>
