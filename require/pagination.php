<hr>
<p class="w3-center">
<?php
	$prev = "Anteriores";
	$next = "Próximos";
	if ($page == 1) {
?>
	<span class="w3-button w3-disabled"><?=$prev?></span>
	Página: <?=$page?> de <?=ceil($count/6)?>
	<a href="/<?=$page+1?>" class="w3-button w3-light-green"><?=$next?></a>
	<?php } elseif ($page == 2) { ?>
	<a href="/" class="w3-button w3-light-green"><?=$prev?></a>
	Página: <?=$page?> de <?=ceil($count/6)?>
	<a href="/<?=$page+1?>" class="w3-button w3-light-green"><?=$next?></a>
	<?php } elseif ($page == ceil($count/6)) { ?>
	<a href="/<?=$page-1?>" class="w3-button w3-light-green"><?=$prev?></a>
	Página: <?=$page?> de <?=ceil($count/6)?>
	<span class="w3-button w3-disabled"><?=$next?></a>
	<?php } else { ?>
	<a href="/<?=$page-1?>" class="w3-button w3-light-green"><?=$prev?></a>
	Página: <?=$page?> de <?=ceil($count/6)?>
	<a href="/<?=$page+1?>" class="w3-button w3-light-green"><?=$next?></a>
	<?php } ?>
</p>
