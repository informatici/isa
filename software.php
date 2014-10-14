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
		<td id="software_container">

			<a href="./isa_browser_addon/dist/isf_isa_addon.xpi">
				<img src="images/software/logo_firefox.png" />
				<span><?php echo $software_description['firefox'][$language]; ?></span>
			</a>

			<a href="http://cameramouse.org/downloads.html">
				<img src="images/software/logo_cameramouse.png" />
				<span><?php echo $software_description['cameramouse'][$language]; ?></span>
			</a>

			<a href="http://www.gazegroup.org/downloads/23-gazetracker">
				<img src="images/software/logo_itugazetracker.png" />
				<span><?php echo $software_description['itugazetracker'][$language]; ?></span>
			</a>

			<a href="http://sourceforge.net/projects/eviacam/files/">
				<img src="images/software/logo_eviacam.png" />
				<span><?php echo $software_description['eviacam'][$language]; ?></span>
			</a>

			<a href="http://robotica.udl.cat/">
				<img src="images/software/logo_headmouse.png" />
				<span><?php echo $software_description['headmouse'][$language]; ?></span>
			</a>

			<a href="http://myeye.jimdo.com/download/">
				<img src="images/software/logo_myeye.png" />
				<span><?php echo $software_description['myeye'][$language]; ?></span>
			</a>

			<a href="http://www.informaticisenzafrontiere.org/2012/09/i-s-a-i-speak-again/">
				<img src="images/software/logo_isf.png" />
				<span><?php echo $software_description['isf'][$language]; ?></span>
			</a>

		</td>
	</tr>
</table>

<?php include "./jplayer.php"; ?>

</div>

</body>

</html>
