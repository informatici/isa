<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include 'config.php';
include 'functions.php';
?>
<!DOCTYPE html>

<html lang="it-IT" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>.:: I Speak Again by ISF ::.</title>
    <meta charset="utf-8">

    <link type="text/css" href="css/reset.css" rel="stylesheet" />
    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.jplayer.inspector.js"></script>
    <script type="text/javascript" src="scripts/grid.js"></script>

    <script type="text/javascript">
        var language = "<?php echo $language; ?>";
    </script>

	<?php include 'tts_selection.php'; ?>

    <script type="text/javascript" src="scripts/utils.js"></script>
    <link type="text/css" href="css/general.css" rel="stylesheet" />
	
	<? if ($eyetracking) {echo "<link type='text/css' href='css/eyetracking.css' rel='stylesheet' />";} ?>
	
</head>

<body>

<div id="isa_recognition">thisisisaispeakagainbyisfdonotremove</div>

<table id="container">
	<tr>
		<td id="menu_container">
			<?php include "menu.php"; ?>
		</td>
	</tr>
	<tr>
		<td id="text_container">
			<input type="text" name="isa_writtentext" id="isa_writtentext" />
		</td>
	</tr>
	<tr>
		<td id="xt9_container">
			<div id="xt9">&#160;</div>
		</td>
	</tr>
	<tr>
		<td id="keyboard_container">

			<table>
				<tr>
					<td class="fullbutton"><a id="fullbutton1" onclick="isa_write(this.innerHTML);">1</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">2</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">3</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">4</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">5</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">6</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">7</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">8</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">9</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">0</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">!</a></td>
				</tr>
				<tr>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">A</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">B</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">C</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">D</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">E</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">F</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">G</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">H</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">I</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">J</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">?</a></td>
				</tr>
				<tr>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">K</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">L</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">M</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">N</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">O</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">P</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">Q</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">R</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">S</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">T</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">@</a></td>
				</tr>
				<tr>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">U</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">V</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">W</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">X</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">Y</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">Z</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">;</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">,</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">.</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">:</a></td>
					<td class="fullbutton"><a onclick="isa_write(this.innerHTML);">/</a></td>
				</tr>
				<tr>
					<td class="fullbutton button_space" colspan="6" onclick="isa_write(' ');"><a>[&#160;&#160;&#160;]</a></td>
					<td class="special" id="button_backspace" onclick="isa_write('backspace');"><a>&#160;</a></td>
					<td class="special" id="button_backspaceword" onclick="isa_write('backspaceword');"><a>&#160;</a></td>
					<td class="special" id="button_backspaceall" onclick="isa_write('backspaceall');"><a>&#160;</a></td>
					<td class="special" id="button_tts"><a href="#" id="isa_tts_button" name="isa_tts_button">&#160;</a></td>
					<td class="special" id="button_browse" onclick="isa_write('browse');"><a>&#160;</a></td>
				</tr>

			</table>

		</td>
	</tr>
</table>


<?php include "./jplayer.php"; ?>

<div id="back_to_isa">&lt; back to ISA I Speak Again</div>
<iframe id="isa_browser" src="about:blank"></iframe>

</body>

</html>
