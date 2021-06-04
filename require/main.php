<?php
	$uri = explode("/", $_SERVER["REQUEST_URI"]);
	if (count($uri) == 2 and $uri[0] == "" and $uri[1] == "") {
		require "require/home.php";
	} elseif (count($uri) == 3 and $uri[0] == "" and $uri[1] == "products") {
		require "require/products.php";
	} else {
		require "require/404.php";
	}
?>
