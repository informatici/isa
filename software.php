<?
/*
	Copyright� 2012,2013 Informatici Senza Frontiere Onlus
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

		<a href="./isa_browser_addon/dist/isf_isa_addon.xpi">
			<img src="images/software/logo_firefox.png" />
			<span>
			Installa I.S.A. Firefox addon sul tuo browser Mozilla, componi un URL in ISA e poi clicca sul pulsante della navigazione web. La tastiera virtuale scomparirà 
			momentaneamente per lasciare spazio alla pagina web richiesta, ma potrai ancora utilizzare ISA per compilare i campi dei form online o dei motori di ricerca, 
			mediante questo addon che riproduce ISA in versione ridotta, ma ti permette di interagire senza limiti con le normali pagine web.
			</span>
		</a>

		<a href="http://cameramouse.org/downloads.html">
			<img src="images/software/logo_cameramouse.png" />
			<span>
			Cameramouse consente di spostare il cursore con i movimenti della testa. Usa la tua webcam e configura l'applicazione specificando il punto 
			di riferimento da seguire sul tuo volto, come la fronte o la narice. Il cursore virtuale seguirà i tuoi movimenti. Una pausa, invece, realizzerà il click.
			CameraMouse permette di configurare la sensibilità al movimento dell'applicazione e di impostare altri parametri di interesse per ottimizzare l'esperienza d'uso.
			</span>
		</a>

		<a href="http://www.gazegroup.org/downloads/23-gazetracker">
			<img src="images/software/logo_itugazetracker.png" />
			<span>
			Gaze Tracker: Gaze tracking permette di interagire con un computer usando solo il movimento dell'occhio.  
			Gaze Tracker e' un software free e open source che usa una web cam or una video camera per tracciare il movimento dell'occhio.Permette all'utente l'interazione tecnologica e da' la possibilità di configurare il software con le proprie necessità.
			Disponibile per Linux e Windows
			</span>
		</a>

		<a href="http://sourceforge.net/projects/eviacam/files/">
			<img src="images/software/logo_eviacam.png" />
			<span>
			eViacam permette di muovere il puntatore del mouse e simularne i diversi tipi di clic, semplicemente con il movimento della testa.
			eViacam funziona su qualsiasi computer dotato di webcam, senza necessità di hardware aggiuntivo. 
			eViacam funziona perfettamente su Windows 2000 e XP, mentre deve essere eseguito come amministratore su Vista e 7.
			L'installazione è alla portata di tutti, in quanto si tratta di pochi clic sul pulsante Avanti.
			</span>
		</a>

		<a href="http://robotica.udl.cat/">
			<img src="images/software/logo_headmouse.png" />
			<span>
			HeadMouse 2 consente di controllare il cursore del mouse tramite movimenti della vostra testa.
			Il software è compatibile con la maggior parte delle versioni di Windows e richiede, come unico requisito, una webcam.
			Una volta installato, si avvia il processo di riconoscimento del viso e di calibrazione per i migliori risultati possibili.
			Esistono vari modi per far clic: chiudendo gli occhi, o chiudendone uno solo, o attendere immobili più di 1,5 secondi. 
			</span>
		</a>

		<a href="http://myeye.jimdo.com/download/">
			<img src="images/software/logo_myeye.png" />
			<span>
			myEye: L'obiettivo del progetto è quello di sviluppare un software che attraverso il movimento degli occhi permetta 
			alle persone con gravi disabilità motorie di utilizzare lo sguardo come dispositivo di input per interagire con un computer.
			E'stato pensato per aiutare le persone con sclerosi laterale amiotrofica (SLA o anche chiamata "malattia di Lou Gehrig"), che hanno perso la loro voce, ma sono in grado di muovere gli occhi. E' un software free.
			</span>
		</a>

		<a href="http://www.informaticisenzafrontiere.org/2012/09/i-s-a-i-speak-again/">
			<img src="images/software/logo_isf.png" />
			<span>
			I.S.A. I Speak Again è un'applicazione web gratuita progettata e realizzata dai soci di ISF, pensata per restituire la parola in modo semplice 
			ed immediato a chi per malattia perde temporaneamente o definitivamente la possibilità di parlare e muoversi.
			L’obiettivo è offrire a tutti, anche ai non esperti, uno strumento facile, gratuito, che non lasci nessuno nel silenzio, 
			dando la possibilità a chiunque viva situazioni così difficili di pensare… "Io parlo di nuovo".
			</span>
		</a>
	</div>

</div>

<? include "./jplayer.php"; ?>

</div>

</body>

</html>