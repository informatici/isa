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
$tmpdir = "./tmp";

$available_voices = array();

$available_voices['it'] = array();
$available_voices['en'] = array();

// ITALIAN
$available_voices['it'][1] = 'Fabio';
$available_voices['it'][2] = 'Giulia';
$available_voices['it'][0] = 'Marcello';

//ENGLISH
$available_voices['en'][0] = '';


if (isset($_POST["language"]) && ($_POST["language"] != '')) {
    $chosen_voice = $available_voices[$_POST["language"]][0];
} else $chosen_voice = $available_voices['it'][0];

if (isset($_POST["speech"]) && ($_POST["speech"] != '')) {

    $speech = stripslashes(trim($_POST["speech"]));
    $speech = substr($speech, 0, 2048);
    $volume_scale = intval($_POST["volume_scale"]);
    if ($volume_scale <= 0) { $volume_scale = 1; }
    if ($volume_scale > 100) { $volume_scale = 100; }

    // continue only if some text was entered for conversion
    if ($speech != "") {
        // unique file name
        $filename = substr($speech,0,32);
        $filename = strtolower(trim($filename));
        $filename = preg_replace("/[^a-zA-Z0-9]/", "", $filename);

        // other file names
        $speech_file = "{$tmpdir}/{$filename}";

        // open the temp file for writing
        $fh = fopen($speech_file, "w+");
        if ($fh) {
            fwrite($fh, $speech);
            fclose($fh);
        }

        // if the speech file exists, use text2wave
        if (file_exists($speech_file)) {
            $tts_cmd = sprintf($tts_bin_path . " -q -b -v".$chosen_voice." %s",$speech_file);
            trace("cmd: ".$tts_cmd);
            exec($tts_cmd);

            // delete the temp speech file
            unlink($speech_file);
        }
    }

}
