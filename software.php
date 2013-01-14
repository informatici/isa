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

	<div id="software">
		<a href="http://cameramouse.org/downloads.html"><span>CameraMouse</span></a>
		<a href="http://www.gazegroup.org/downloads/23-gazetracker"><span>Gaze tracker</span></a>
		<a href="http://sourceforge.net/projects/eviacam/files/"><span>eViacam</span></a>
		<a href="http://robotica.udl.cat/"><span>HeadMouse</span></a>
		<a href="http://myeye.jimdo.com/download/"><span>myEye</span></a>
		<a href="http://www.informaticisenzafrontiere.org/2012/09/i-s-a-i-speak-again/"><span>credits</span></a>
	</div>

</div>

<? include "./jplayer.php"; ?>

</div>

</body>

</html>