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

function xt9_load() {
	thema_value = $('#isa_writtentext').val();
	thema_value_lastpos = thema_value.lastIndexOf(' ');
	thema_value = thema_value.substring(thema_value_lastpos);

	$('#xt9').load('./ajax_api.php?lang=' + language + '&function=xt9_query&param1=' + $.trim(thema_value));
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
		$('#isa_browser').addClass('loader').attr('src',$('#isa_writtentext').val()).slideDown('slow');
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

function isa_resize() {
	var screen_width = $(window).width();
	var screen_height = $(window).height();
	
	if ((screen_width/screen_height) > 1.5) {
		$('#container').width(($(window).height()/2)*3);
		$('#container').height($(window).height());
	} else {
		$('#container').width($(window).width());
		$('#container').height(($(window).width()/3)*2);
	}

	$('#homemenu a img').height($(window).height()/3 - 40);
	var margine = parseInt((screen_height - $('#homemenu').height())/2)-1;
	$('#homemenu').css({'marginTop':margine + 'px'});
	
	$('#isa_browser').height($(window).height()-50);
}

$(document).ready(function() {

	$(window).resize(function() {
		isa_resize();
	});

	isa_resize();
	
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
		cssSelectorAncestor: "#isa_words_content",
		supplied: "mp3",
		wmode: "window"
	});

	// Create click handlers for the different tracks
	$("#isa_words_content .track").click(function(e) {
		$('#speech').val($(this).html());
		isa_tts(my_jPlayer);
		$(this).blur();
		return false;
	});

	// Create click handlers for the different tracks
	$("#isa_images_content .track img").click(function(e) {
		$('#speech').val($(this).attr('title'));
		isa_tts(my_jPlayer);
		$(this).blur();
		return false;
	});

	// create click handler for speak button
	$("#isa_tts_button").click(function(e) {
	
		var comodo = $('#isa_writtentext').val();
		comodo = comodo.replace(/[^a-z0-9]/gi,'');

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

	$("#isa_button_send").click(function(e) {
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

});

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
	}
	
	return false;
}