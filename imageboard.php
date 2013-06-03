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


$parole['imag'][]  = array("finestraaperta","cibo","tv","sigrazie","felice");
$parole['text']['en'][]  = array("Open the window, please.", "Some food, please. I am angry", "I want to watch tv","yes, thanks.","I am happy!");
$parole['text']['it'][]  = array("Apri la finestra, per favore", "Vorrei del cibo, ho fame", "Vorrei guardare la tv","si, grazie.","Sono felice");


$parole['imag'][]  = array("finestrachiusa", "acqua","musica","nograzie","triste");
$parole['text']['en'][]  = array("Close the window, please.", "Some water, please, I'm thirsty","I want listen music","no, thanks","I'm sad");
$parole['text']['it'][]  = array("Chiudi la finestra, per favore.", "Vorrei dell'acqua, ho sete.","Vorrei ascoltare della musica.","no, grazie.","Sono triste.");

$parole['imag'][] = array("bacio", "bagno","luce","persone","caldo");
$parole['text']['en'][] = array("kiss", "I must go to the toilette", "Turn the light on, please.", "I wanna see people","It's hot");
$parole['text']['it'][] = array("Eccoti un bacio.", "Devo andare in bagno.","Accendi la luce, per favore.","Vorrei vedere gente.", "Fa caldo.");

$parole['imag'][] = array("cuore", "sonno","buio","solo","freddo");
$parole['text']['en'][] = array("my heart is for you.", "I want to sleep", "Turn the light off, please", "I want to be alone","It's cold");
$parole['text']['it'][] = array("il mio cuore &egrave; per te.", "Ho sonno.","Spegni la luce per favore.","Vorrei restare solo.", "Ho freddo");

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

    var ttse = 'tingwo';

    <?php
    $ttse = 'tingwo';

    if (isset($_GET['ttse']) && ($_GET['ttse'] == 'ivona')) {
        $ttse = 'ivona';
        echo "ttse = 'ivona';";
    }
    if (isset($_GET['ttse']) && ($_GET['ttse'] == 'festival')) {
        $ttse = 'festival';
        echo "ttse = 'festival';";
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

<?php include "./leftcolumn.php"; ?>

    <div id="isa_images_content">
    <?php   for ($i=0; $i<count($parole['imag']); $i++) { ?>
        <div class="isa_images_row">
    <?php       for ($j=0; $j<count($parole['imag'][$i]); $j++) { ?>
                <a class="track isa_word"><img src="images/board/<?php echo $parole['imag'][$i][$j]; ?>.png" title="<?php echo $parole['text'][$language][$i][$j]; ?>" /></a>
    <?php       } ?>
        </div>
    <?php } ?>
    </div>

</div>

<?php include "./jplayer.php"; ?>

</div>

</body>

</html>
