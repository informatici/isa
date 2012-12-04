<? include "functions.php"; ?>
<!DOCTYPE html>

<html lang="it-IT" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>.:: I Speak Again by ISF ::.</title>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.inspector.js"></script>

	<script type="text/javascript" src="scripts/utils.js"></script>
	<link type="text/css" href="css/general.css" rel="stylesheet" />
</head>

<body>

<div id="container">

<div id="topcontainer">

	<div id="jquery_jplayer"></div>

	<input type="text" name="writtentext" id="writtentext" />
	<form name="speechform" id="speechform" method="post" action="ajax_festival.php" class="sjbjl_form">
		<input type="hidden" name="speech" id="speech" />
		<input type="hidden" name="volume_scale" id="volume_scale" value="1"> 
	</form>

</div>

<div id="maincontainer">

	<div id="isa_leftcolumn">
		<a class="inner_menu" href="index.php">home</a>
		<a class="inner_menu" href="about:blank">-</a>
		<a class="inner_menu" href="about:blank">-</a>
		<a class="inner_menu" href="about:blank">-</a>
		<a class="inner_menu" href="about:blank">-</a>
	</div>

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
			<div class="isa_button_backspace" onclick="isa_write('backspace');"><a class="allcases"></a></div>
			<div class="isa_button_enter" onclick="isa_write('enter');"><a>&#160;</a></div>
			<div class="isa_button_tts"><a href="#" id="isa_tts_button" name="isa_tts_button">parla!</a></div>
		</div>

	</div>
	
</div>

<a class="jp-play" href="#">Play</a>
<a class="jp-pause" href="#">Pause</a>
<a class="jp-stop" href="#">Stop</a>
<a class="jp-mute" href="#">Mute</a>
<a class="jp-unmute" href="#">Unmute</a>
<a class="jp-volume-max" href="#">Max</a>

<div id="messagearea">
	<a href="http://www.informaticisenzafrontiere.org/" title="Informatici Senza Frontiere"><img src="images/isf_isa_logo.png" /></a>
</div>

</div>



<iframe name="hiddenframe" width="1" height="1" id="hiddenframe" src="about_blank"></iframe>

</body>

</html>