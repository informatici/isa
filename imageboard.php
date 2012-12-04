<?

include "functions.php"; 

$lan=$_GET['lang'];

$configurazione['en'] = array("http://www.walks.to/isa/imageboard.php?lang=it","Italiano");	
$configurazione['it'] = array("http://www.walks.to/isa/imageboard.php?lang=en","English");

$parole['en'][]  = array("windowopen", "food", "tv","yes","happy");
$parole['en'][]  = array("windowclose", "water","music","no","sad");
$parole['en'][] = array("kiss", "toilette", "light", "people");
$parole['en'][] = array("heart", "sleep", "dark", "alone");
	
$parole['it'][]  = array("finestraaperta", "cibo", "tv","si","felice");
$parole['it'][]  = array("finestrachiusa", "acqua","musica","no","triste");
$parole['it'][] = array("bacio", "bagno","luce","persone");
$parole['it'][] = array("cuore", "sonno","buio","solo");

?>
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

	<div id="messagearea">
		<a href="http://www.informaticisenzafrontiere.org/" title="Informatici Senza Frontiere"><img src="images/isf_isa_logo.png" /></a>
		<a href="<? echo $configurazione[$lan][0]; ?>"><? echo $configurazione[$lan][1]; ?></a>
	</div>

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

	<div id="isa_images_content">
	<? 	for ($i=0; $i<count($parole[$lan]); $i++) { ?>
		<div class="isa_words_row">
	<? 		for ($j=0; $j<count($parole[$lan][$i]); $j++) { ?>
				<a class="track isa_word"><img src="images/board/<? echo $parole['it'][$i][$j]; ?>.jpg" title="<? echo $parole[$lan][$i][$j]; ?>" /></a>
	<?		} ?>
		</div>
	<? } ?>
	</div>
	
</div>

<a class="jp-play" href="#">Play</a>
<a class="jp-pause" href="#">Pause</a>
<a class="jp-stop" href="#">Stop</a>
<a class="jp-mute" href="#">Mute</a>
<a class="jp-unmute" href="#">Unmute</a>
<a class="jp-volume-max" href="#">Max</a>

</div>

<iframe name="hiddenframe" width="1" height="1" id="hiddenframe" src="about_blank"></iframe>

</body>

</html>