<?php
	$uri = explode("/", $_SERVER["REQUEST_URI"]);
	if (count($uri) == 2 and $uri[0] == "" and $uri[1] == "") {
		require "require/home.php";
	} elseif (count($uri) == 2 and $uri[0] == "" and is_numeric($uri[1]) ) {
		require "require/page.php";
	} elseif (count($uri) == 3 and $uri[0] == "" and $uri[1] == "products" and is_numeric($uri[2]) ) {
		require "require/products.php";
	} elseif (count($uri) == 3 and $uri[0] == "" and $uri[1] == "search") {
		$page = 1;
		$search = $uri[2];
		require "require/search.php";
	} elseif (count($uri) == 4 and $uri[0] == "" and is_numeric($uri[1]) and $uri[2] == "search") {
		$page = $uri[1];
		$search = $uri[3];
		require "require/search.php";
	} elseif (count($uri) == 2 and $uri[0] == "" and $uri[1] == "login") {
		require "require/login.php";
	} else {
		require "require/404.php";
	}
?>
