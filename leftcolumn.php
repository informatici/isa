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

<div id="isa_leftcolumn">
    <a href="index.php">home</a>
    <a href="?lang=it" <?php echo $disable_it;?>><img src="./images/flag_it.png" /></a>
    <a href="?lang=en" <?php echo $disable_en;?>><img src="./images/flag_en.png" /></a>
    <a href="speechboard_base.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_speechboardbase.png" /></a>
    <a href="speechboard.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_speechboard.png" /></a>
    <a href="wordboard.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_wordboard.png" /></a>
    <a href="imageboard.php?lang=<?php echo $language; ?>&amp;ttse=<?php echo $ttse; ?>"><img src="./images/home/menu_imageboard.png" /></a>
    <a href="software.php?lang=<?php echo $language; ?>"><img src="./images/home/menu_software.png" /></a>
</div>
