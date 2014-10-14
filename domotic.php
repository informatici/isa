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
		<td id="domotic_container">

			<table>
			
			<? for ($j=0; $j<3; $j++) {
			
				echo "<tr>";
				
					for ($i=1; $i<4; $i++) {
						
						$disabled = '';
						if ($domotic_switch[$j][$i]) {$disabled = ' disabled';}
						
						echo "<td class='domo_switch " . $disabled . "'><button class='OFF' value='" . ($i+(3*$j)) . "'><span>" . ($i+(3*$j)) . "</span></button></td>";
					}
				
				echo "</tr>";			
			
			} ?>
			
			</table>

		</td>
	</tr>
</table>

<?php include "./jplayer.php"; ?>

</div>

</body>

</html>