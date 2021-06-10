<div class="w3-row">
<?php
	$db = new PDO("sqlite:database/mundopet.sqlite3");
	$stmt = $db->prepare("SELECT COUNT(id) FROM products WHERE name LIKE ? LIMIT 6");
	$stmt->execute(["%" . $search . "%"]);
	$count = $stmt->fetch()[0];
	if ($page < 1 or $page > ceil($count/6)) {
		require "require/404.php";
	} else {
		$offset = ($page - 1) * 6;
		$stmt = $db->prepare("SELECT * FROM products WHERE name LIKE ? LIMIT ?, 6;");
		$stmt->execute(["%" . $search . "%", $offset]);
		foreach ($stmt->fetchAll() as $row) {
			require "require/item.php";
		} ?></div><?php
		if ($count > 6) {
			$search = "/search/" . $search;
			require "require/pagination.php";
		}
	}
?>
