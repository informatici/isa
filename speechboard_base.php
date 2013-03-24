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
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">1</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">2</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">3</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">4</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">5</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">6</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">7</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">8</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">9</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">0</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">!</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">Q</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">W</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">E</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">R</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">T</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">Y</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">U</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">I</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">O</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">P</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">?</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">A</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">S</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">D</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">F</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">G</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">H</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">J</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">K</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">L</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">M</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">@</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">Z</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">X</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">C</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">V</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">B</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">N</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">;</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">,</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">.</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">:</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">/</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_button_space" onclick="isa_write(' ');"><a>space</a></div>
			<div class="isa_button_backspace" onclick="isa_write('backspace');"><a>&#160;</a></div>
			<div class="isa_button_backspaceword" onclick="isa_write('backspaceword');"><a>&#160;</a></div>
			<div class="isa_button_backspaceall" onclick="isa_write('backspaceall');"><a>&#160;</a></div>
			<div class="isa_button_tts"><a href="#" id="isa_tts_button" name="isa_tts_button">&#160;</a></div>
			<div class="isa_button_browse" onclick="isa_write('browse');"><a>&#160;</a></div>
		</div>

	</div>
	
</div>

<? include "./jplayer.php"; ?>

</div>

<div id="back_to_isa">&lt; back to ISA I Speak Again</div>
<iframe id="isa_browser" src="about:blank"></iframe>

</body>

</html>