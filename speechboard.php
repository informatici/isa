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

include "config.php"; 
include "functions.php";
?>
<!DOCTYPE html>

<html lang="it-IT" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>.: ISA I Speak Again :.</title>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.inspector.js"></script>

	<script type="text/javascript">
		var language = "<? echo $language; ?>";
	</script>
	
	<script type="text/javascript">
	
	var ttse = 'festival';
	
	<?
	$ttse = 'festival';

	if (isset($_GET['ttse']) && ($_GET['ttse'] == 'ivona')) {
		$ttse = 'ivona';
		echo "ttse = 'ivona';";
	}
	?>

	</script>

	<script type="text/javascript" src="scripts/utils.js"></script>
	<link type="text/css" href="css/general.css" rel="stylesheet" />
</head>

<body>

<div id="isa_recognition">thisisisaispeakagainbyisfdonotremove</div>

<div id="container">

<div id="topcontainer">

	<input type="text" name="isa_writtentext" id="isa_writtentext" />

</div>

<div id="maincontainer">

	<? include "leftcolumn.php"; ?>

	<div id="xt9">&#160;</div>
	
	<div id="isa_keyboard">

		<div class="isa_row">
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">|</a><a class="lowercase" onclick="isa_write(this.innerHTML);">\</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">!</a><a class="lowercase" onclick="isa_write(this.innerHTML);">1</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">"</a><a class="lowercase" onclick="isa_write(this.innerHTML);">2</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">£</a><a class="lowercase" onclick="isa_write(this.innerHTML);">3</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">$</a><a class="lowercase" onclick="isa_write(this.innerHTML);">4</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">%</a><a class="lowercase" onclick="isa_write(this.innerHTML);">5</a></div>
			<div class="isa_button_half"><a onclick="isa_write('&amp;');">&amp;</a><a class="lowercase" onclick="isa_write(this.innerHTML);">6</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">/</a><a class="lowercase" onclick="isa_write(this.innerHTML);">7</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">(</a><a class="lowercase" onclick="isa_write(this.innerHTML);">8</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">)</a><a class="lowercase" onclick="isa_write(this.innerHTML);">9</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">=</a><a class="lowercase" onclick="isa_write(this.innerHTML);">0</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">?</a><a class="lowercase" onclick="isa_write(this.innerHTML);">'</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">^</a><a class="lowercase" onclick="isa_write(this.innerHTML);">ì</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_spacer_1">&nbsp;</div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">Q</a><a class="lowercase" onclick="isa_write(this.innerHTML);">q</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">W</a><a class="lowercase" onclick="isa_write(this.innerHTML);">w</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">E</a><a class="lowercase" onclick="isa_write(this.innerHTML);">e</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">R</a><a class="lowercase" onclick="isa_write(this.innerHTML);">r</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">T</a><a class="lowercase" onclick="isa_write(this.innerHTML);">t</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">Y</a><a class="lowercase" onclick="isa_write(this.innerHTML);">y</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">U</a><a class="lowercase" onclick="isa_write(this.innerHTML);">u</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">I</a><a class="lowercase" onclick="isa_write(this.innerHTML);">i</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">O</a><a class="lowercase" onclick="isa_write(this.innerHTML);">o</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">P</a><a class="lowercase" onclick="isa_write(this.innerHTML);">p</a></div>
			<div class="isa_button_quarter">
				<a class="uppercaseleft" onclick="isa_write(this.innerHTML);">é</a>
				<a class="uppercaseright" onclick="isa_write(this.innerHTML);">{</a>
				<a class="lowercaseleft" onclick="isa_write(this.innerHTML);">è</a>
				<a class="lowercaseright" onclick="isa_write(this.innerHTML);">[</a>
			</div>
			<div class="isa_button_quarter">
				<a class="uppercaseleft" onclick="isa_write(this.innerHTML);">*</a>
				<a class="uppercaseright" onclick="isa_write(this.innerHTML);">}</a>
				<a class="lowercaseleft" onclick="isa_write(this.innerHTML);">+</a>
				<a class="lowercaseright" onclick="isa_write(this.innerHTML);">]</a>
			</div>
		</div>
		<div class="isa_row">
			<div class="isa_spacer_2">&nbsp;</div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">A</a><a class="lowercase" onclick="isa_write(this.innerHTML);">a</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">S</a><a class="lowercase" onclick="isa_write(this.innerHTML);">s</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">D</a><a class="lowercase" onclick="isa_write(this.innerHTML);">d</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">F</a><a class="lowercase" onclick="isa_write(this.innerHTML);">f</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">G</a><a class="lowercase" onclick="isa_write(this.innerHTML);">g</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">H</a><a class="lowercase" onclick="isa_write(this.innerHTML);">h</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">J</a><a class="lowercase" onclick="isa_write(this.innerHTML);">j</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">K</a><a class="lowercase" onclick="isa_write(this.innerHTML);">k</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">L</a><a class="lowercase" onclick="isa_write(this.innerHTML);">l</a></div>
			<div class="isa_button_quarter">
				<a class="uppercaseleft" onclick="isa_write(this.innerHTML);">ç</a>
				<a class="uppercaseright" onclick="isa_write(this.innerHTML);">€</a>
				<a class="lowercaseleft" onclick="isa_write(this.innerHTML);">ò</a>
				<a class="lowercaseright" onclick="isa_write(this.innerHTML);">@</a>
			</div>
			<div class="isa_button_quarter">
				<a class="uppercaseleft" onclick="isa_write(this.innerHTML);">°</a>
				<a class="uppercaseright"></a>
				<a class="lowercaseleft" onclick="isa_write(this.innerHTML);">à</a>
				<a class="lowercaseright" onclick="isa_write(this.innerHTML);">#</a>
			</div>
		</div>
		<div class="isa_row">
			<div class="isa_spacer_3">&nbsp;</div>
			<div class="isa_button_half"><a onclick="isa_write('>');">&gt;</a><a class="lowercase" onclick="isa_write('<');">&lt;</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">Z</a><a class="lowercase" onclick="isa_write(this.innerHTML);">z</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">X</a><a class="lowercase" onclick="isa_write(this.innerHTML);">x</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">C</a><a class="lowercase" onclick="isa_write(this.innerHTML);">c</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">V</a><a class="lowercase" onclick="isa_write(this.innerHTML);">v</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">B</a><a class="lowercase" onclick="isa_write(this.innerHTML);">b</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">N</a><a class="lowercase" onclick="isa_write(this.innerHTML);">n</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">M</a><a class="lowercase" onclick="isa_write(this.innerHTML);">m</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">;</a><a class="lowercase" onclick="isa_write(this.innerHTML);">,</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">:</a><a class="lowercase" onclick="isa_write(this.innerHTML);">.</a></div>
			<div class="isa_button_half"><a onclick="isa_write(this.innerHTML);">_</a><a class="lowercase" onclick="isa_write(this.innerHTML);">-</a></div>
			<div class="isa_button_browse" onclick="isa_write('browse');"><a>&#160;</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_spacer_4">&nbsp;</div>
			<div class="isa_button_space" onclick="isa_write(' ');"><a>space</a></div>
			<div class="isa_button_backspace" onclick="isa_write('backspace');"><a>&#160;</a></div>
			<div class="isa_button_backspaceword" onclick="isa_write('backspaceword');"><a>&#160;</a></div>
			<div class="isa_button_backspaceall" onclick="isa_write('backspaceall');"><a>&#160;</a></div>
			<div class="isa_button_tts"><a href="#" id="isa_tts_button" name="isa_tts_button">&#160;</a></div>
		</div>

	</div>
	
</div>

<? include "./jplayer.php"; ?>

</div>

<div id="back_to_isa">&lt; back to ISA I Speak Again</div>
<iframe id="isa_browser" src="about:blank"></iframe>

</body>

</html>