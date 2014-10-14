<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include './config.php';
include './functions.php';

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
    <script type="text/javascript" src="scripts/grid.js"></script>

	<?php include 'tts_selection.php'; ?>

    <script type="text/javascript" src="scripts/utils.js"></script>

	<? echo "<script type='text/javascript'>pagename = 'index';</script>"; ?>

    <link type="text/css" href="css/reset.css" rel="stylesheet" />
    <link type="text/css" href="css/general.css" rel="stylesheet" />
</head>

<body>

<table id="container">

	<tr>
		<td id="homemenu_container">
			<table id="homemenu">
				<tr>
					<td><a href="./speechboard_base.php" class="isa_logo"><img src="images/home/isa_logo.png" /></a></td>
				</tr>
				<tr>
					<td><a href="http://www.informaticisenzafrontiere.org" class="isf_logo"><img src="images/home/isf_logo.png" /></a></td>
				</tr>
			</table>
		</td>
	</tr>

</table>

<?php include "./jplayer.php"; ?>

</body>

</html>