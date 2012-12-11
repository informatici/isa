<?
include "config.php"; 
include "functions.php";
?>
<!DOCTYPE html>

<html lang="it-IT" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>.:: I Speak Again by ISF ::.</title>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.inspector.js"></script>

	<script type="text/javascript">
		var language = "<? echo $language; ?>";
	</script>
	
	<script type="text/javascript" src="scripts/utils.js"></script>
	<link type="text/css" href="css/general.css" rel="stylesheet" />
</head>

<body>

<div id="container">

<div id="topcontainer">

	<input type="text" name="writtentext" id="writtentext" />

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
		</div>
		<div class="isa_row">
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">Z</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">X</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">C</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">V</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">B</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">N</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">,</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">.</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">!</a></div>
			<div class="isa_button_full"><a onclick="isa_write(this.innerHTML);">?</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_button_space" onclick="isa_write(' ');"><a>space</a></div>
			<div class="isa_button_backspace" onclick="isa_write('backspace');"><a>&#160;</a></div>
			<div class="isa_button_backspaceall" onclick="isa_write('backspaceall');"><a>&#160;</a></div>
			<div class="isa_button_tts"><a href="#" id="isa_tts_button" name="isa_tts_button">&#160;</a></div>
		</div>

	</div>
	
</div>

<? include "./jplayer.php"; ?>

</div>

</body>

</html>