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

include "./functions.php";
?>
<!DOCTYPE html>

<html lang="it-IT" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>.:: I Speak Again by ISF ::.</title>
	<meta charset="utf-8">

	<meta name="description" content="Applicazione web di Informatici Senza Frontiere. Restituisce la parola, mediante sintesi vocale, in modo semplice ed immediato a chi per malattia perde temporaneamente o definitivamente la possibilità di parlare e muoversi. Mediante un sistema di puntamento a pupilla (software consigliati in apposita sezione) è possibile utilizzare uno dei servizi disponibili: SpeechBoard base, tastiera virtuale di base; SpeechBoard, tastiera virtuale completa; WordBoard: tastiera virtuale con parole predefinite; ImageBoard, tastiera virtuale con immagini. Obiettivo del progetto è offrire a tutti, anche non esperti, uno strumento di facile utilizzo, gratuito, che non lasci nessuno nel silenzio, dando la possibilità a chi vive situazioni così difficili di pensare: Io parlo di nuovo."/>
	<meta name="keywords" content="ISA, I Speak Again, Io Parlo di Nuovo, ISF, Informatici Senza Frontiere, comunicatore, communicator"/>

	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jplayer.inspector.js"></script>

	<script type="text/javascript" src="scripts/utils.js"></script>
	<link type="text/css" href="css/general.css" rel="stylesheet" />
</head>

<body>

<div id="container">

<table id="homemenu" cellspacing="10px" cellpadding="0">
<tr class="homerow">
	<td class="left"><a href="speechboard_base.php?lang=it"><img src="images/home/menu_speechboardbase.png" /></a></td>
	<td class="left"><a href="speechboard.php?lang=it"><img src="images/home/menu_speechboard.png" /></a></td>
</tr>
<tr class="homerow">
	<td class="left"><a href="imageboard.php?lang=it"><img src="images/home/menu_imageboard.png" /></a></td>
	<td class="right"><a href="wordboard.php?lang=it"><img src="images/home/menu_wordboard.png" /></a></td>
</tr>

<tr class="homerow">
	<td class="left"><a href="software.php"><img src="images/home/menu_software.png" /></a></td>
	<td class="logoright"><a href="http://www.informaticisenzafrontiere.org"><img src="images/home/menu_logo.png" /></a></td>
</tr>

</table>

</div>

</body>

</html>