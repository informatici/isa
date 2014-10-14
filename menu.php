<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if ($language == 'it') {
    $disable_en = "class='disabled'";
    $disable_it = "";
} elseif ($language == 'en') {
    $disable_en = "";
    $disable_it = "class='disabled'";
}

?>

<table id="isa_menu">
	<tr>
		<td><a href="index.php"><img src="./images/home/menu_home.png" /></a></td>
		
		<? if ($multi_language) { ?>
		
		<td><a href="?lang=it&amp;ttse=<?php echo $ttse; ?>" <?php echo $disable_it;?>><img src="./images/flag_it.png" /></a></td>
		<td><a href="?lang=en&amp;ttse=<?php echo $ttse; ?>" <?php echo $disable_en;?>><img src="./images/flag_en.png" /></a></td>
		
		<? } ?>
		
		<td><a href="speechboard_base.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_speechboardbase.png" /></a></td>
		<td><a href="speechboard.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_speechboard.png" /></a></td>
		<td><a href="wordboard.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_wordboard.png" /></a></td>
		<td><a href="imageboard.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_imageboard.png" /></a></td>
		<? if ($domotic_enabled) { ?>
			<td><a href="domotic.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_domotic.png" /></a></td>
		<? } ?>
		<? if ($ima_enabled) { ?>
			<td><a href="echair.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_echair.png" /></a></td>
		<? } ?>
		<td><a href="software.php?lang=<?php echo $language; ?>"><img src="./images/home/menu_software.png" /></a></td>
	</tr>
</table>
