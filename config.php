<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$version = 'I.S.A. I Speak Again 1.1 - 18 Ottobre 2014';

// db credentials
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'walks_isa';

$db_connection = mysql_connect($db_host, $db_user, $db_password);
if ($db_connection == false) die ("Errore nella connessione! Impossibile accedere al database.");
mysql_select_db($db_name, $db_connection) or die ("Errore nella selezione del database! Impossibile accedere al database dell'applicazione.");
mysql_query("SET NAMES 'utf8'");

// text to speech
$tts_bin_path = "\"C:\\Program Files\\Loquendo\\LTTS\\TTSFileGenerator.exe\"";

// eyetracking
$eyetracking = false;

// domotic
$domotic_enabled = true;
$domotic_bin_path = '"C:\\Program Files\\HE853 Control\HE853.Util.exe"';

$domotic_switch = array();

$domotic_switch[0][1] = false;
$domotic_switch[0][2] = false;
$domotic_switch[0][3] = true;
$domotic_switch[1][1] = true;
$domotic_switch[1][2] = true;
$domotic_switch[1][3] = true;
$domotic_switch[2][1] = true;
$domotic_switch[2][2] = true;
$domotic_switch[2][3] = true;

// i move again
$ima_enabled = true;

// language
$multi_language = true;

$language = 'it';

if (isset($_GET['lang']) && ($_GET['lang'] != '')) {
    $language = $_GET['lang'];
}

// words for wordboard
$parole['en'][] = array("I", "you", "we", "you", "she", "him", "my", "your");
$parole['en'][] = array("yes", "no", "not", "I'm fine", "ho", "is", "you are", "you are");
$parole['en'][] = array("family", "uncles", "grandparents", "mother", "daddy", "sister", "brother", "children");
$parole['en'][] = array("want", "drink", "eat", "sleep", "change", "call", "write", "read");
$parole['en'][] = array("a book", "watch a movie", "watch TV", "listen to the music", "listen to the radio", "I agree!","go","I think");
$parole['en'][] = array("speak", "tell all", "how are you?", "I go on", "wishes!", "how was the trip?", "make me laugh!", "are you okay?");
$parole['en'][] = array("i'm cold", "turn up the volume", "less light", "more light", "more up", "more down", "hot", "cold");
$parole['en'][] = array("window", "water", "cold drink", "sweet", "bath", "cover", "mobile phone", "clock");
$parole['en'][] = array("being alone", "I'm angry", "I'm sad", "I'm disappointed" ,"go to Hell!", "I'm sorry", "sorry","forgive me");
$parole['en'][] = array("I want company","do not disturb me", "what a pleasure", "I love you", "I miss you", "thank you", "you're special","it hurts");

$parole['it'][]  = array("io", "tu", "noi", "voi", "lei", "lui", "mia", "tua"); // 8
$parole['it'][]  = array("si", "no","non", "sto bene", "ho", "e'", "sei", "siete"); // 8
$parole['it'][] = array("famiglia", "zii", "nonni", "mamma", "papa'", "sorella", "fratello", "bambini"); // 8
$parole['it'][] = array("voglio", "bere", "mangiare", "dormire", "cambiare", "chiamare", "scrivere", "leggere"); // 8
$parole['it'][] = array("un libro","guardare un film","guardare la tv","ascoltare musica","ascoltare la radio","sono d'accordo!","andare", "penso"); // 9
$parole['it'][] = array("parliamo", "raccontami tutto", "come stai", "si tira", "auguri!", "come e' andato il viaggio?", "fammi ridere!", "stai bene?"); // 8
$parole['it'][] = array("ho freddo", "alza il volume", "meno luce", "piu luce", "piu' su", "piu' giu'", "caldo", "freddo"); // 9
$parole['it'][] = array("finestra", "acqua", "bibita fresca", "dolce", "bagno", "coperta", "cellulare", "orologio"); // 8
$parole['it'][] = array("restare solo", "sono arrabbiato", "sono triste", "sono deluso", "al diavolo!", "mi dispiace", "scusa","perdonami"); // 7
$parole['it'][] = array("voglio compagnia", "non mi disturbate", "che piacere", "ti voglio bene", "mi manchi", "grazie", "sei speciale","fa male"); // 7

// images for imageboard
$parole['imag'][]  = array("finestraaperta","cibo","tv","sonno","felice","triste");
$parole['text']['en'][]  = array("Open the window, please.", "Some food, please. I am angry", "I want to watch tv","I want to sleep","I am happy!","I'm sad");
$parole['text']['it'][]  = array("Apri la finestra, per favore", "Vorrei del cibo, ho fame", "Vorrei guardare la tv","Ho sonno.","Sono felice","Sono triste.");

$parole['imag'][]  = array("finestrachiusa", "acqua","musica","persone","sigrazie","nograzie");
$parole['text']['en'][]  = array("Close the window, please.", "Some water, please, I'm thirsty","I want listen music","I wanna see people","yes, thanks.","no, thanks");
$parole['text']['it'][]  = array("Chiudi la finestra, per favore.", "Vorrei dell'acqua, ho sete.","Vorrei ascoltare della musica.","Vorrei vedere gente.","Si', grazie.","no, grazie.");

$parole['imag'][] = array("bacio", "bagno","luce","buio","caldo","freddo");
$parole['text']['en'][] = array("kiss", "I must go to the toilette", "Turn the light on, please.","Turn the light off, please","It's hot","It's cold");
$parole['text']['it'][] = array("Eccoti un bacio.", "Devo andare in bagno.","Accendi la luce, per favore.","Spegni la luce per favore.","Fa caldo.","Ho freddo");

// text for software
$software_description = array();

$software_description['firefox']['it'] = "Installa I.S.A. Firefox addon sul tuo browser, componi un URL in ISA e poi clicca sul pulsante della navigazione. ISA scomparirà
momentaneamente per caricare la pagina richiesta, ma potrai ancora utilizzare ISA per compilare i campi dei form o dei motori di ricerca,
mediante questo addon che riproduce ISA in versione ridotta, ma ti permette di interagire senza limiti con le normali pagine web.";

$software_description['firefox']['en'] = "Download and...";

$software_description['cameramouse']['it'] = "Cameramouse consente di spostare il cursore con i movimenti della testa. Usa la tua webcam e configura l'applicazione specificando il punto
da seguire sul tuo volto, come la fronte o il naso. Il cursore seguirà i tuoi movimenti. Una pausa, invece, realizzerà il click.
CameraMouse permette di configurare la sensibilità e di impostare altri parametri di interesse per ottimizzare l'esperienza d'uso.";

$software_description['cameramouse']['en'] = "Cameramouse allows...";

$software_description['itugazetracker']['it'] = "Gaze Tracker permette di interagire con un computer usando solo il movimento dell'occhio.
Gaze Tracker e' un software free e open source che usa una web cam or una video camera per tracciare il movimento dell'occhio.Permette all'utente l'interazione tecnologica e da' la possibilità di configurare il software con le proprie necessità.
Disponibile per Linux e Windows";

$software_description['itugazetracker']['en'] = "Gaze Tracker...";

$software_description['eviacam']['it'] = "eViacam permette di muovere il cursore del mouse e simularne il clic, con il movimento della testa.
eViacam funziona su qualsiasi computer dotato di webcam, senza necessità di hardware aggiuntivo.
Funziona perfettamente su Windows XP, deve invece essere eseguito come amministratore su Windows 7.
L'installazione è alla portata di tutti, in quanto si tratta di pochi clic sul pulsante Avanti.";

$software_description['eviacam']['en'] = "eViacam...";

$software_description['headmouse']['it'] = "HeadMouse 2 consente di controllare il mouse tramite movimenti della testa.
Il software è compatibile con la maggior parte delle versioni di Windows e richiede, come unico requisito, una webcam.
Una volta installato, si avvia il processo di riconoscimento del viso e di calibrazione.
Esistono vari modi per far clic: chiudendo gli occhi, o chiudendone uno solo, o attendere immobili più di 1,5 secondi.";

$software_description['headmouse']['en'] = "HeadMouse 2 allows...";

$software_description['myeye']['it'] = "myEye: L'obiettivo del progetto è quello di sviluppare un software che permetta
a persone con gravi disabilità motorie di utilizzare lo sguardo come dispositivo di input per interagire con un computer.
E'stato pensato per aiutare le persone affette da SLA, che hanno perso la loro voce, ma sono in grado di muovere gli occhi. E' un software free.";

$software_description['myeye']['en'] = "myEye is...";

$software_description['isf']['it'] = "I.S.A. I Speak Again è un'applicazione web gratuita progettata e realizzata dai soci di ISF, pensata per restituire la parola in modo semplice
ed immediato a chi per malattia perde temporaneamente o definitivamente la possibilità di parlare e muoversi.";

$software_description['isf']['en'] = "I.S.A. I Speak Again is...";