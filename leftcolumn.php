<? 

if ($language == 'it') {
	$disable_en = "class='disabled'";
	$disable_it = "";
} else if ($language == 'en') {
	$disable_en = "";
	$disable_it = "class='disabled'";
}

?>

<div id="isa_leftcolumn">
	<a href="index.php">home</a>
	<a href="?lang=it" <? echo $disable_it;?>><img src="./images/flag_it.png" /></a>
	<a href="?lang=en" <? echo $disable_en;?>><img src="./images/flag_en.png" /></a>
	<a href="speechboard_base.php?lang=<? echo $language; ?>"><img src="./images/home/menu_speechboardbase.png" /></a>
	<a href="speechboard.php?lang=<? echo $language; ?>"><img src="./images/home/menu_speechboard.png" /></a>
	<a href="wordboard.php?lang=<? echo $language; ?>"><img src="./images/home/menu_wordboard.png" /></a>
	<a href="imageboard.php?lang=<? echo $language; ?>"><img src="./images/home/menu_imageboard.png" /></a>
</div>