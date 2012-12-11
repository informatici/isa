<?
include "config.php"; 
include "functions.php";
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

	<? include "leftcolumn.php"; ?>

	<a class="software" href="http://cameramouse.org/downloads.html">CameraMouse</a>
	<a class="software" href="http://www.gazegroup.org/downloads/23-gazetracker">Gaze tracker</a>
	<a class="software" href="http://sourceforge.net/projects/eviacam/files/">eViacam</a>
	<a class="software" href="http://robotica.udl.cat/">HeadMouse</a>
	<a class="software" href="http://myeye.jimdo.com/download/">myEye</a>
	<a class="credits" href="http://www.informaticisenzafrontiere.org/2012/09/i-s-a-i-speak-again/">credits</a>

</div>

<? include "./jplayer.php"; ?>

</div>

</body>

</html>