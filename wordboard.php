<?
include "config.php"; 
include "functions.php"; 

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

</div>

<div id="maincontainer">

<? include "./leftcolumn.php"; ?>

	<div id="isa_words_content">
	<? 	for ($i=0; $i<count($parole[$language]); $i++) { ?>
		<div class="isa_words_row">
	<? 		for ($j=0; $j<count($parole[$language][$i]); $j++) { ?>
				<a class="track isa_word"><? echo $parole[$language][$i][$j]; ?></a>
	<?		} ?>
		</div>
	<? } ?>
	</div>

</div>

<? include "./jplayer.php"; ?>

</div>

</body>

</html>