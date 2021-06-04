<div class="w3-row">
<?php
	$db = new PDO("sqlite:database/mundopet.sqlite3");
	foreach ($db->query("SELECT * FROM products LIMIT 8") as $row) {
		require "require/item.php";
	}
?>
</div>
<?php
	$count = $db->query("SELECT COUNT(id) FROM products")->fetch()[0];
	if ($count > 8) {
		$page = 1;
		require "require/pagination.php";
	}
?>
