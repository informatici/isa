<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    <script type="text/javascript">

    var ttse = 'tingwo';

    <?php
    $ttse = 'tingwo';

    if (isset($_GET['ttse']) && ($_GET['ttse'] == 'ivona')) {
        $ttse = 'ivona';
    }
    if (isset($_GET['ttse']) && ($_GET['ttse'] == 'festival')) {
        $ttse = 'festival';
    }
    ?>

    </script>

    <script type="text/javascript" src="scripts/utils.js"></script>
    <link type="text/css" href="css/general.css" rel="stylesheet" />
</head>

<body>

<div id="container">

<table id="homemenu" cellspacing="10px" cellpadding="0">
<tr class="homerow">
    <td class="left"><a href="speechboard_base.php?lang=it&amp;ttse=<?php echo $ttse; ?>"><img src="images/home/menu_speechboardbase.png" /></a></td>
    <td class="left"><a href="speechboard.php?lang=it&amp;ttse=<?php echo $ttse; ?>"><img src="images/home/menu_speechboard.png" /></a></td>
</tr>
<tr class="homerow">
    <td class="left"><a href="imageboard.php?lang=it&amp;ttse=<?php echo $ttse; ?>"><img src="images/home/menu_imageboard.png" /></a></td>
    <td class="right"><a href="wordboard.php?lang=it&amp;ttse=<?php echo $ttse; ?>"><img src="images/home/menu_wordboard.png" /></a></td>
</tr>

<tr class="homerow">
    <td class="left"><a href="software.php"><img src="images/home/menu_software.png" alt="software image"/></a></td>
    <td class="logoright"><a href="http://www.informaticisenzafrontiere.org"><img src="images/home/menu_logo.png" /></a></td>
</tr>

</table>

</div>

</body>

</html>
