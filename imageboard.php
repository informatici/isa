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