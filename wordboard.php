<?

include "functions.php"; 

$lan=$_GET['lang'];

$configurazione['en'] = array("http://www.walks.to/isa/wordboardln.php?lang=it","Italiano");	
$configurazione['it'] = array("http://www.walks.to/isa/wordboardln.php?lang=en","English");

$parole['en'][] = array("I", "you", "we", "you", "them", "she", "him", "I", "my", "your", "our", "your", "his ");
$parole['en'][] = array("yes", "no", "not", "I'm fine", "I", "have", "we", "is", "six", "you", "okay", "can");
$parole['en'][] = array("family", "uncles", "grandparents", "mother", "daddy", "sister", "brother", "cousins", "children", "all");
$parole['en'][] = array("want", "think", "drink", "eat", "sleep", "open", "change", "call", "go", "write");
$parole['en'][] = array("read" , "a book", "a newspaper", "watch a movie", "watch TV", "listen to themusic", "listen to the radio", "I agree");
$parole['en'][] = array("speak", "tell all", "how are you", "pulling", "celebration", "and as was the trip", "make me laugh", "are you okay");	
$parole['en'][] = array("warming up", "turn up the volume", "less light", "more light", "it hurts", "most of", "the most down", "hot", "cold");
$parole['en'][] = array("window", "water", "cold drink", "fresh", "bath", "covered", "mobile", "clock");
$parole['en'][] = array("being alone", "I'm angry", "I'm sad", "I'm disappointed" ,"the devil", "I'm sorry", "excuse me");
$parole['en'][] = array("I want company","do not disturb me", "what a pleasure", "I love you", "I miss you", "thank you", "you're special");
	
$parole['it'][]  = array("io", "tu", "noi", "voi", "loro", "lei", "lui", "ti", "mia", "tua", "nostra", "vostra", "sua");
$parole['it'][]  = array("si", "no","non", "sto bene", "ho", "hanno", "abbiamo", "e'", "sei", "siete","va bene", "puoi");
$parole['it'][] = array("famiglia", "zii", "nonni", "mamma", "papa'", "sorella", "fratello", "cugini", "bambini", "tutti");
$parole['it'][] = array("voglio", "penso", "bere", "mangiare", "dormire", "aprire", "cambiare", "chiamare", "andare", "scrivere");
$parole['it'][] = array("leggere","un libro","un giornale","guardare un film","guardare la tv","ascoltare musica","ascoltare la radio","sono d' accordo");
$parole['it'][] = array("parliamo", "raccontami tutto", "come stai", "si tira", "auguri", "come e' andato il viaggio", "fammi ridere", "stai bene");
$parole['it'][] = array("alza il riscaldamento", "alza il volume", "meno luce", "piu luce", "mi fa male", "piu' su", "piu' giu'", "caldo", "freddo");
$parole['it'][] = array("finestra", "acqua", "bibita fresca", "dolce", "bagno", "coperta", "cellulare", "orologio");
$parole['it'][] = array("restare solo", "sono arrabbiato", "sono triste", "sono deluso", "al diavolo", "mi dispiace", "scusa");
$parole['it'][] = array("voglio compagnia", "non mi disturbate", "che piacere", "ti voglio bene", "mi manchi", "grazie", "sei speciale");

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
	</div>
	<a href="<? echo $configurazione[$lan][0]; ?>"><? echo $configurazione[$lan][1]; ?></a>

	<form name="speechform" id="speechform" method="post" action="ajax_festival.php" class="sjbjl_form">
		<input type="hidden" name="speech" id="speech" />
		<input type="hidden" name="volume_scale" id="volume_scale" value="1"> 
	</form>

</div>

<div id="bottomcontainer">
	<div id="isa_words_content">
	<? 	for ($i=0; $i<count($parole[$lan]); $i++) { ?>
		<div class="isa_words_row">
	<? 		for ($j=0; $j<count($parole[$lan][$i]); $j++) { ?>
				<a class="track isa_word"><? echo $parole[$lan][$i][$j]; ?></a>
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