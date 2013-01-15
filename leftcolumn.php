<?
/*
	Copyright© 2012,2013 Informatici Senza Frontiere Onlus
	http://www.informaticisenzafrontiere.org

    This file is part of "ISA" I Speak Again - ISF project for impaired and blind people.

    "ISA" I Speak Again is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    "ISA" I Speak Again is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with "ISA" I Speak Again.  If not, see <http://www.gnu.org/licenses/>.
*/

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
	<a href="software.php?lang=<? echo $language; ?>"><img src="./images/home/menu_software.png" /></a>
</div>