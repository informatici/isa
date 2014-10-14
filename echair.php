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
	
    <script type="text/javascript">
	
		var autoclick = true;
		var echairaction_timeout;
	
		$(document).ready(function() {
			$('.ec_action').on('click',function() {
				echair($(this).attr('id'));
			});
			
			if (autoclick) {
				$('.ec_action').on('mouseover',function() {
					clearTimeout(echairaction_timeout);
					echairaction_timeout = setTimeout("echair('" + $(this).attr('id') + "')",1500);
				});
			}
			
		});
	</script>
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
		<td id="echair_container">

    <div id="echair">
	
		<img src="images/direzioni_en.png" width="900" height="514" border="0" usemap="#direzioni" />
		<map name="direzioni" id="direzioni">
		  <area shape="rect" coords="320,194,579,318" href="#" alt="Stop" title="Stop" name="ec_stop" id="ec_stop" class="ec_action" />
		  <area shape="poly" coords="152,92,319,192,578,192,748,92" href="#" alt="Avanti piano" title="Avanti piano" name="ec_slow_forward" id="ec_slow_forward"  class="ec_action" />
		  <area shape="poly" coords="4,1,151,89,751,89,896,2,22,2" href="#" alt="Avanti Veloce" title="Avanti Veloce" name="ec_fast_forward" id="ec_fast_forward"  class="ec_action" />
		  <area shape="poly" coords="2,4,-1,511,318,318,318,196,1,5" href="#" alt="Sinistra" title="Sinistra" name="ec_left" id="ec_left"  class="ec_action" />
		  <area shape="poly" coords="579,195,580,316,899,510,897,4,592,186" href="#" alt="Destra" title="Destra" name="ec_right" id="ec_right"  class="ec_action" />
		  <area shape="poly" coords="317,318,1,512,896,511,580,320,318,320" href="#" alt="Dietro" title="Dietro" name="ec_back" id="ec_back" class="ec_action" />
		</map>

    </div>

		</td>
	</tr>

</table>

<?php include "./jplayer.php"; ?>

</body>

</html>