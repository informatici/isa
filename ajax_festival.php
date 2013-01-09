<?
/*
	Copyrightę 2012,2013 Informatici Senza Frontiere Onlus
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

include "functions.php";
$tmpdir = "/var/www/walks/isa/tmp";
$audiodir = "/var/www/walks/isa/audio";

$available_voices = array();

$available_voices['it'] = array();
$available_voices['en'] = array();

// ITALIAN
$available_voices['it'][0] = 'voice_lp_mbrola';
$available_voices['it'][1] = 'voice_pc_mbrola';
$available_voices['it'][2] = 'voice_lp_diphone';
$available_voices['it'][3] = 'voice_pc_diphone';

//ENGLISH
$available_voices['en'][0] = 'voice_kal_diphone';
$available_voices['en'][1] = 'voice_don_diphone';
$available_voices['en'][2] = 'voice_en1_mbrola';
$available_voices['en'][3] = 'voice_us1_mbrola';
$available_voices['en'][4] = 'voice_us2_mbrola';
$available_voices['en'][5] = 'voice_us3_mbrola';

$chosen_voice = $available_voices['it'][0];

if (isset($_POST["language"]) && ($_POST["language"] != '')) {
	$chosen_voice = $available_voices[$_POST["language"]][0];
}

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
		$wave_file = "{$audiodir}/{$filename}.wav";
		$mp3_file  = "{$audiodir}/{$filename}.mp3";

		// open the temp file for writing
		$fh = fopen($speech_file, "w+");
		if ($fh) {
			fwrite($fh, $speech);
			fclose($fh);
		}

		// if the speech file exists, use text2wave
		if (file_exists($speech_file)) {
			// create the text2wave command and execute it
			$text2wave_cmd = sprintf("text2wave -eval \"(" . $chosen_voice . ") (Parameter.set 'Duration_Stretch 1.5)\" -o %s -scale %d %s",$wave_file,$volume_scale,$speech_file);
			exec($text2wave_cmd);

			// create the lame command and execute it
			$lame_cmd = sprintf("lame %s %s",$wave_file,$mp3_file);
			exec($lame_cmd);
			unlink($wave_file);
				
			// delete the temp speech file
			// unlink($speech_file);

			// which file name and type to use? WAV or MP3
			$listen_file = basename($mp3_file);
			$file_type = "MP3";

			// show audio file link
			$show_audio = true;
		}
	}
	  
	$return_value = $listen_file;

	header('Content-Type: text/html');
	echo $return_value;

}

?>