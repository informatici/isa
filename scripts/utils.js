/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

var pagename = '';
var extraspeech = '';

var desiredratio = '16:10'; // free, 4:3, '5:4', '16:9', '16:10'

var buttons_timeout;

function xt9_load() {
	thema_value = $('#isa_writtentext').val();
	thema_value_lastpos = thema_value.lastIndexOf(' ');
	thema_value = thema_value.substring(thema_value_lastpos);

	$('#xt9').load('./ajax_api.php?lang=' + language + '&function=xt9_query&param1=' + $.trim(thema_value),function() {initgrid();});
}

function delete_history(id) {
	$.ajax({
		url: './ajax_api.php?function=writtentext_history_delete&param1=' + $.trim(id),
		context: document.body
	});
}

function xt9_replace_word(text,spaced) {
	thema_value = $('#isa_writtentext').val();
	thema_value_lastpos = thema_value.lastIndexOf(' ');

	var addspace = " ";
	
	if (!spaced) {
		addspace = '';
	}
	
	$('#isa_writtentext').val(thema_value.substring(0,thema_value_lastpos) + " " + text + addspace).focus();
	$.ajax({
		url: './ajax_api.php?lang=' + language + '&function=xt9_hits&param1=' + $.trim(text),
		context: document.body
	});
}

function isa_write(char_to_write) {

	switch (char_to_write) {
		case 'enter':
		// speach
		break;

		case 'backspace':
		var previous_value = $('#isa_writtentext').val();
		previous_value = previous_value.substring(0,previous_value.length-1);
		$('#isa_writtentext').focus().val(previous_value);
		xt9_load();
		break;

		case 'backspaceword':
		thema_value = $.trim($('#isa_writtentext').val());
		thema_value_lastpos = thema_value.lastIndexOf(' ');
		$('#isa_writtentext').val(thema_value.substring(0,thema_value_lastpos)).focus();
		break;
		
		case 'backspaceall':
		$('#isa_writtentext').val('').focus();
		break;

		case 'browse':
        var url = $('#isa_writtentext').val();
        if ((url.indexOf("http://") == -1) || (url.indexOf("www") == -1)) {
			url = "http://" + url;
		}
		url = url.replace(" ",""); 
		$('#isa_browser').addClass('loader').attr('src', url).slideDown('slow');
		$('#back_to_isa').slideDown('slow');
		$('#container').slideUp('slow');
		break;
		
		default:
		var previous_value = $('#isa_writtentext').val();
		$('#isa_writtentext').focus().val(previous_value + char_to_write);
		xt9_load();
		break;
	}

}

$(document).ready(function() {

	// Local copy of jQuery selectors, for performance.
	var	my_jPlayer = $("#jquery_jplayer");

	// Some options
	var	opt_play_first = false, // If true, will attempt to auto-play the default track on page loads. No effect on mobile devices, like iOS.
		opt_auto_play = true, // If true, when a track is selected, it will auto-play.
		opt_text_playing = "Now playing", // Text when playing
		opt_text_selected = "Track selected"; // Text when not playing

	// A flag to capture the first track
	var first_track = true;

	// Instance jPlayer
	my_jPlayer.jPlayer({
		swfPath: "scripts",
		cssSelectorAncestor:"#container",
		supplied: "mp3",
		wmode: "window",
		solution:"flash,html"
	});

	// Create click handlers for the different tracks
	$("#wordboard_container .track").click(function(e) {
		$('#speech').val($(this).html());
		isa_tts(my_jPlayer);
		$(this).blur();
		return false;
	});

	// Create click handlers for the different tracks
	$("#imageboard_container .track img").click(function(e) {
		$('#speech').val($(this).attr('title'));
		isa_tts(my_jPlayer);
		$(this).blur();
		return false;
	});

	// create click handler for speak button
	$("#isa_tts_button").click(function(e) {
	
		var comodo = $('#isa_writtentext').val();

		$('#speech').val(comodo);
		isa_tts(my_jPlayer);
		setTimeout("$('#isa_writtentext').focus()",1000);

		// saves writtentext history
		$.ajax({
			url: './ajax_api.php?lang=' + language + '&function=writtentext_history_write&param1=' + $.trim($('#isa_writtentext').val()),
			context: document.body
		});

		return false;
	});

	$("#button_send").click(function(e) {
		$("#hiddenframe").attr("src","http://isf-walks.sinapto.net:9090/index.html?speech=" + encodeURIComponent($('#isa_writtentext').val()));
		setTimeout("$('#isa_writtentext').val('').focus()",1000);
		return false;
	});
	
	$('#isa_writtentext').bind('keypress',function() {
		xt9_load();
	});
	
	// enable back to isa
	$('#back_to_isa').bind('click',function() {
		$('#isa_browser').removeClass('loader').attr('src','about:blank').slideUp('slow');
		$('#back_to_isa').slideUp('slow');
		$('#container').slideDown('slow');
	});

	$("td.fullbutton a, td.halfbutton a, td.quarterbutton a").click(function() {
		$(this).css({
			backgroundColor:"#FF6215",
			color:"yellow"
		}).addClass('clicked');
		setTimeout("resetbutton()",1000);
	});

	if (pagename == 'index') {
		$(document).keydown(function (eventObj) {
			var buttonkey = getKey(eventObj);
			var buttonkeycode = getKeyCode(eventObj);
			switch (buttonkeycode) {

				// "NLOCK"	144
				case 144:
				case 49: // normal keyboard 1
				extraspeech = 'Si!';
				break;

				// "*"		106
				case 106:
				case 50: // normal keyboard 2
				extraspeech = 'No!';
				break;

				// "7"		103
				// "HOME"	 36
				case 103:
				case 36:
				case 51: // normal keyboard 3
				extraspeech = 'Ciao, sono felice di vederti!';
				break;

				// "8"		104
				// "UP"	 	38
				case 104:
				case 38:
				case 52: // normal keyboard 4
				extraspeech = 'Dai, raccontami  qualcosa!';
				break;

				// "9"		105
				// "PGUP"	 33
				case 105:
				case 33:
				case 53: // normal keyboard 5
				extraspeech = 'Vorrei ascoltare della musica!';
				break;

				// "-"		109
				case 109:
				case 54: // normal keyboard 6
				extraspeech = 'Vorrei guardare la televisione!';
				break;

				// "4"  	100
				// "LEFT"	 37
				case 100:
				case 37:
				case 55: // normal keyboard 7
				extraspeech = 'Ti voglio bene, sei sempre nel mio cuore!';
				break;
				
				// "5"  	101
				// "???"	 12
				case 101:
				case 12:
				case 56: // normal keyboard 8
				extraspeech = 'Ho sete!';
				break;

				// "6"  	102
				// "RIGHT"	 39
				case 102:
				case 39:
				case 57: // normal keyboard 9
				extraspeech = 'Ho fame!';
				break;

				// "+"		107
				case 107:
				case 48: // normal keyboard 0
				extraspeech = 'Ho sonno e vorrei riposare!';
				break;

				// "1"       97
				// "END"	 35
				case 97:
				case 35:
				case 81: // normal keyboard Q
				extraspeech = 'Ho caldo!';
				break;

				// "2"		 98
				// "DOWN"	 40
				case 98:
				case 40:
				case 87:  // normal keyboard W
				extraspeech = 'Ho freddo!';
				break;

				// "3"		 99
				// "PGDN"	 34
				case 99:
				case 34:
				case 69: // normal keyboard E
				extraspeech = 'Sono molto felice!';
				break;

			}

			if (extraspeech != '') {
				$('#speech').val(extraspeech);
				isa_tts(my_jPlayer);
			}

		});
	}	

	// create click handler for domotic
	$("td#domotic_container table td button").live('click',function() {
		$(this).toggleClass('OFF').toggleClass('ON');
		$.ajax({
			url: './ajax_domotic.php?domotic_command=' + $(this).attr('class') + '&domotic_receiver=' + $(this).val()
		});
		return false;
	});
});

function resetbutton() {
	$('.clicked').css({
		backgroundColor:"#033046",
		color:"#bfe7f9"
	},800).removeClass('clicked');
}

function isa_tts(my_jPlayer) {
	
	switch (ttse) {
	
		default:
		case 'festival':
		$.post('ajax_festival.php', $('#speechform').serialize(), function(msg) {
			my_jPlayer.jPlayer("setMedia", {
				mp3: "./audio/" + msg
			}).jPlayer("play");
		});
		break;
		
		case 'ivona':
		$.post('ajax_ivona.php', $('#speechform').serialize(), function(msg) {
			my_jPlayer.jPlayer("setMedia", {
				mp3: msg
			}).jPlayer("play");
		});
		break;

		case 'tingwo':
		$.post('ajax_tingwo.php', $('#speechform').serialize(), function(msg) {
			my_jPlayer.jPlayer("setMedia", {
				mp3: msg
			}).jPlayer("play");
		});
		break;

		case 'loquendo':
		$.post('ajax_loquendo.php', $('#speechform').serialize());
		break;
	}
	
	return false;
}

function echair(action) {
	$.ajax({url: './ajax_echair_api.php?&function=' + action});
}

// vocal synthesis based on keyboard button pression
var isCtrl = false;
var isAltGr = false;

$(window).keydown(function(event) {

	var keydowned;

	if (window.event) {
		keydowned = window.event.keyCode;
	} else if (event) {
		keydowned = event.which;
	}

	switch (keydowned) {
		case 17:
		isCtrl = true;
		break;

		case 18:
		isAltGr = true;
		break;

		default:
		break;
	}

});

function getKeyCode(key) {
	//return the key code
	return (key == null) ? event.keyCode : key.keyCode;
}
     
function getKey(key) {
	//return the key
	return String.fromCharCode(getKeyCode(key)).toLowerCase();
}