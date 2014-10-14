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
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">+</a><a class="lowercase" onclick="isa_write(this.innerHTML);">1</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">-</a><a class="lowercase" onclick="isa_write(this.innerHTML);">2</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">€</a><a class="lowercase" onclick="isa_write(this.innerHTML);">3</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">$</a><a class="lowercase" onclick="isa_write(this.innerHTML);">4</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">%</a><a class="lowercase" onclick="isa_write(this.innerHTML);">5</a></td>
            <td class="halfbutton"><a onclick="isa_write('&amp;');" class="uppercase">&amp;</a><a class="lowercase" onclick="isa_write(this.innerHTML);">6</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">@</a><a class="lowercase" onclick="isa_write(this.innerHTML);">7</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">(</a><a class="lowercase" onclick="isa_write(this.innerHTML);">8</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">)</a><a class="lowercase" onclick="isa_write(this.innerHTML);">9</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">=</a><a class="lowercase" onclick="isa_write(this.innerHTML);">0</a></td>
            <td class="halfbutton"><a class="lowercase" onclick="isa_write(this.innerHTML);">à</a><a class="lowercase" onclick="isa_write(this.innerHTML);">#</a></td>
            <td class="halfbutton"><a class="uppercase" onclick="isa_write(this.innerHTML);">é</a><a class="lowercase" onclick="isa_write(this.innerHTML);">è</a></td>
		</tr>
		<tr>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">A</a><a class="lowercase" onclick="isa_write(this.innerHTML);">a</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">B</a><a class="lowercase" onclick="isa_write(this.innerHTML);">b</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">C</a><a class="lowercase" onclick="isa_write(this.innerHTML);">c</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">D</a><a class="lowercase" onclick="isa_write(this.innerHTML);">d</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">E</a><a class="lowercase" onclick="isa_write(this.innerHTML);">e</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">F</a><a class="lowercase" onclick="isa_write(this.innerHTML);">f</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">G</a><a class="lowercase" onclick="isa_write(this.innerHTML);">g</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">H</a><a class="lowercase" onclick="isa_write(this.innerHTML);">h</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">I</a><a class="lowercase" onclick="isa_write(this.innerHTML);">i</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">J</a><a class="lowercase" onclick="isa_write(this.innerHTML);">j</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">ì</a><a class="lowercase" onclick="isa_write(this.innerHTML);">*</a></td>
            <td class="halfbutton"><a class="uppercase" onclick="isa_write(this.innerHTML);">ò</a><a class="lowercase" onclick="isa_write(this.innerHTML);">ù</a></td>
        </tr>
        <tr>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">K</a><a class="lowercase" onclick="isa_write(this.innerHTML);">k</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">L</a><a class="lowercase" onclick="isa_write(this.innerHTML);">l</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">M</a><a class="lowercase" onclick="isa_write(this.innerHTML);">m</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">N</a><a class="lowercase" onclick="isa_write(this.innerHTML);">n</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">O</a><a class="lowercase" onclick="isa_write(this.innerHTML);">o</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">P</a><a class="lowercase" onclick="isa_write(this.innerHTML);">p</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">Q</a><a class="lowercase" onclick="isa_write(this.innerHTML);">q</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">R</a><a class="lowercase" onclick="isa_write(this.innerHTML);">r</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">S</a><a class="lowercase" onclick="isa_write(this.innerHTML);">s</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">T</a><a class="lowercase" onclick="isa_write(this.innerHTML);">t</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">'</a><a class="lowercase" onclick="isa_write(this.innerHTML);">_</a></td>
            <td class="fullbutton"><a onclick="isa_write(this.innerHTML);">/</a></td>

        </tr>
        <tr>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">U</a><a class="lowercase" onclick="isa_write(this.innerHTML);">u</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">V</a><a class="lowercase" onclick="isa_write(this.innerHTML);">v</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">W</a><a class="lowercase" onclick="isa_write(this.innerHTML);">w</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">X</a><a class="lowercase" onclick="isa_write(this.innerHTML);">x</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">Y</a><a class="lowercase" onclick="isa_write(this.innerHTML);">y</a></td>
            <td class="halfbutton"><a onclick="isa_write(this.innerHTML);" class="uppercase">Z</a><a class="lowercase" onclick="isa_write(this.innerHTML);">z</a></td>
            <td class="fullbutton"><a onclick="isa_write(this.innerHTML);">,</a></td>
            <td class="fullbutton"><a onclick="isa_write(this.innerHTML);">.</a></td>
            <td class="fullbutton"><a onclick="isa_write(this.innerHTML);">;</a></td>
            <td class="fullbutton"><a onclick="isa_write(this.innerHTML);">:</a></td>
            <td class="fullbutton"><a onclick="isa_write(this.innerHTML);">!</a></td>
            <td class="fullbutton"><a onclick="isa_write(this.innerHTML);">?</a></td>
        </tr>
        <tr>
            <td class="fullbutton button_space" colspan="7" onclick="isa_write(' ');"><a>[&#160;&#160;&#160;]</a></td>
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

</div>

<div id="back_to_isa">&lt; back to ISA I Speak Again</div>
<iframe id="isa_browser" src="about:blank"></iframe>

</body>

</html>
