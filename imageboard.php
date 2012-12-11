<?
include "config.php"; 
include "functions.php"; 

$parole['en'][]  = array("windowopen", "food", "tv","yes","happy");
$parole['en'][]  = array("windowclose", "water","music","no","sad");
$parole['en'][] = array("kiss", "toilette", "light", "people","hot");
$parole['en'][] = array("heart", "sleep", "dark", "alone","cold");
	
$parole['it'][]  = array("finestraaperta", "cibo", "tv","si","felice");
$parole['it'][]  = array("finestrachiusa", "acqua","musica","no","triste");
$parole['it'][] = array("bacio", "bagno","luce","persone", "caldo");
$parole['it'][] = array("cuore", "sonno","buio","solo", "freddo");

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

</div>

<div id="maincontainer">

<? include "./leftcolumn.php"; ?>

	<div id="isa_images_content">
	<? 	for ($i=0; $i<count($parole[$language]); $i++) { ?>
		<div class="isa_images_row">
	<? 		for ($j=0; $j<count($parole[$language][$i]); $j++) { ?>
				<a class="track isa_word"><img src="images/board/<? echo $parole['it'][$i][$j]; ?>.png" title="<? echo $parole[$language][$i][$j]; ?>" /></a>
	<?		} ?>
		</div>
	<? } ?>
	</div>
	
</div>

<? include "./jplayer.php"; ?>

</div>

</body>

</html>