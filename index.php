<? include "functions.php"; ?>
<!DOCTYPE html>

<html lang="it-IT" xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>.:: I Speak Again by ISF ::.</title>
	<meta charset="utf-8">
	<link href="css/general.css" rel="stylesheet" type="text/css" />
	
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

	<div id="messagearea">
		<a href="http://www.informaticisenzafrontiere.org/" title="Informatici Senza Frontiere"><img src="images/isf_isa_logo.png" /></a>
	</div>

	<input type="text" name="writtentext" id="writtentext" />
	<form name="speechform" id="speechform" method="post" action="ajax_festival.php" class="sjbjl_form">
		<input type="hidden" name="speech" id="speech" />
		<input type="hidden" name="volume_scale" id="volume_scale" value="1"> 
	</form>

</div>

<div id="maincontainer">

	<div id="isa_keyboard">

		<div class="isa_row">
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">|</a><a class="lowercase" onclick="isa_write(this.innerHTML);">\</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">!</a><a class="lowercase" onclick="isa_write(this.innerHTML);">1</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">"</a><a class="lowercase" onclick="isa_write(this.innerHTML);">2</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">£</a><a class="lowercase" onclick="isa_write(this.innerHTML);">3</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">$</a><a class="lowercase" onclick="isa_write(this.innerHTML);">4</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">%</a><a class="lowercase" onclick="isa_write(this.innerHTML);">5</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write('&amp;');">&amp;</a><a class="lowercase" onclick="isa_write(this.innerHTML);">6</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">/</a><a class="lowercase" onclick="isa_write(this.innerHTML);">7</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">(</a><a class="lowercase" onclick="isa_write(this.innerHTML);">8</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">)</a><a class="lowercase" onclick="isa_write(this.innerHTML);">9</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">=</a><a class="lowercase" onclick="isa_write(this.innerHTML);">0</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">?</a><a class="lowercase" onclick="isa_write(this.innerHTML);">'</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">^</a><a class="lowercase" onclick="isa_write(this.innerHTML);">ì</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_spacer_1">&nbsp;</div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">Q</a><a class="lowercase" onclick="isa_write(this.innerHTML);">q</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">W</a><a class="lowercase" onclick="isa_write(this.innerHTML);">w</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">E</a><a class="lowercase" onclick="isa_write(this.innerHTML);">e</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">R</a><a class="lowercase" onclick="isa_write(this.innerHTML);">r</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">T</a><a class="lowercase" onclick="isa_write(this.innerHTML);">t</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">Y</a><a class="lowercase" onclick="isa_write(this.innerHTML);">y</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">U</a><a class="lowercase" onclick="isa_write(this.innerHTML);">u</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">I</a><a class="lowercase" onclick="isa_write(this.innerHTML);">i</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">O</a><a class="lowercase" onclick="isa_write(this.innerHTML);">o</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">P</a><a class="lowercase" onclick="isa_write(this.innerHTML);">p</a></div>
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
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">A</a><a class="lowercase" onclick="isa_write(this.innerHTML);">a</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">S</a><a class="lowercase" onclick="isa_write(this.innerHTML);">s</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">D</a><a class="lowercase" onclick="isa_write(this.innerHTML);">d</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">F</a><a class="lowercase" onclick="isa_write(this.innerHTML);">f</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">G</a><a class="lowercase" onclick="isa_write(this.innerHTML);">g</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">H</a><a class="lowercase" onclick="isa_write(this.innerHTML);">h</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">J</a><a class="lowercase" onclick="isa_write(this.innerHTML);">j</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">K</a><a class="lowercase" onclick="isa_write(this.innerHTML);">k</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">L</a><a class="lowercase" onclick="isa_write(this.innerHTML);">l</a></div>
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
			<div class="isa_button_backspace" onclick="isa_write('backspace');"><a class="allcases"></a></div>
		</div>
		<div class="isa_row">
			<div class="isa_spacer_3">&nbsp;</div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write('>');">&gt;</a><a class="lowercase" onclick="isa_write('<');">&lt;</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">Z</a><a class="lowercase" onclick="isa_write(this.innerHTML);">z</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">X</a><a class="lowercase" onclick="isa_write(this.innerHTML);">x</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">C</a><a class="lowercase" onclick="isa_write(this.innerHTML);">c</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">V</a><a class="lowercase" onclick="isa_write(this.innerHTML);">v</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">B</a><a class="lowercase" onclick="isa_write(this.innerHTML);">b</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">N</a><a class="lowercase" onclick="isa_write(this.innerHTML);">n</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">M</a><a class="lowercase" onclick="isa_write(this.innerHTML);">m</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">;</a><a class="lowercase" onclick="isa_write(this.innerHTML);">,</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">:</a><a class="lowercase" onclick="isa_write(this.innerHTML);">.</a></div>
			<div class="isa_button_half"><a class="uppercase" onclick="isa_write(this.innerHTML);">_</a><a class="lowercase" onclick="isa_write(this.innerHTML);">-</a></div>
		</div>
		<div class="isa_row">
			<div class="isa_spacer_4">&nbsp;</div>
			<div class="isa_button_space" onclick="isa_write(' ');"><a>space</a></div>
			<div class="isa_button_enter" onclick="isa_write('enter');"><a>&#160;</a></div>
			<div class="isa_button_tts"><a href="#" id="isa_tts_button" name="isa_tts_button">speak!</a></div>
			<div class="isa_button_send"><a href="#" id="isa_button_send" name="isa_button_send">send!</a></div>
		</div>

	</div>
	
	<div id="isa_rightcolumn">
		<a class="software" href="http://cameramouse.org/downloads.html">CameraMouse</a>
		<a class="software" href="http://www.gazegroup.org/downloads/23-gazetracker">Gaze tracker</a>
		<a class="software" href="http://sourceforge.net/projects/eviacam/files/">eViacam</a>
		<a class="software" href="http://robotica.udl.cat/">HeadMouse</a>
		<a class="software" href="http://myeye.jimdo.com/download/">myEye</a>
		<a href="#">credits</a>
	</div>

</div>

<div id="bottomcontainer">

	<div id="isa_words_content">
		<div class="isa_words_row">
			<a href="./audio/non.mp3" class="track isa_word">non</a>
			<a href="./audio/ho.mp3" class="track isa_word">ho</a>
			<a href="./audio/sete.mp3" class="track isa_word">sete</a>
			<a href="./audio/fame.mp3" class="track isa_word">fame</a>
			<a href="./audio/sonno.mp3" class="track isa_word">sonno</a>
			<a href="./audio/caldo.mp3" class="track isa_word">caldo</a>
			<a href="./audio/freddo.mp3" class="track isa_word">freddo</a>
			<a href="./audio/stobene.mp3" class="track isa_word">sto bene</a>
			<a href="./audio/si.mp3" class="track isa_word">si</a>
			<a href="./audio/no.mp3" class="track isa_word">no</a>
			<a href="./audio/vabene.mp3" class="track isa_word">va bene</a>
		</div>
		<div class="isa_words_row">
			<a href="./audio/non.mp3" class="track isa_word">non</a>
			<a href="./audio/voglio.mp3" class="track isa_word">voglio</a>
			<a href="./audio/leggere.mp3" class="track isa_word">leggere</a>
			<a href="./audio/guardareunfilm.mp3" class="track isa_word">guardare un film</a>
			<a href="./audio/ascoltaremusica.mp3" class="track isa_word">ascoltare musica</a>
			<a href="./audio/menoluce.mp3" class="track isa_word">meno luce</a>
			<a href="./audio/piuluce.mp3" class="track isa_word">piu luce</a>
		</div>
	</div>

</div>

<a class="jp-play" href="#">Play</a>
<a class="jp-pause" href="#">Pause</a>
<a class="jp-stop" href="#">Stop</a>
<a class="jp-mute" href="#">Mute</a>
<a class="jp-unmute" href="#">Unmute</a>
<a class="jp-volume-max" href="#">Max</a>

</div>

</body>

</html>