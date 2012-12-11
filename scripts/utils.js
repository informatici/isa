function xt9_load() {
	thema_value = $('#writtentext').val();
	thema_value_lastpos = thema_value.lastIndexOf(' ');
	thema_value = thema_value.substring(thema_value_lastpos);

	$('#xt9').load('./ajax_xt9.php?lang=' + language + '&thema=' + $.trim(thema_value));
}

function xt9_replace_word(text) {
	thema_value = $('#writtentext').val();
	thema_value_lastpos = thema_value.lastIndexOf(' ');
	$('#writtentext').val(thema_value.substring(0,thema_value_lastpos) + " " + text + " ").focus();
}

function isa_write(char_to_write) {

	switch (char_to_write) {
		case 'enter':
		// speach
		break;

		case 'backspace':
		var previous_value = $('#writtentext').val();
		previous_value = previous_value.substring(0,previous_value.length-1);
		$('#writtentext').focus().val(previous_value);
		xt9_load();
		break;

		case 'backspaceall':
		$('#writtentext').val('');
		break;

		default:
		var previous_value = $('#writtentext').val();
		$('#writtentext').focus().val(previous_value + char_to_write);
		xt9_load();
		break;
	}

}

function isa_tts() {
	$('#speech').val($('#writtentext').val());
	$.post('ajax_festival.php', $('#speechform').serialize(), function(msg) {
		$('#isa_tts_button').attr("href","./audio/" + msg);
	});

	my_jPlayer.jPlayer("setMedia", {
		mp3: $('#isa_tts_button').attr("href")
	});
	my_jPlayer.jPlayer("play");
	return false;

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
		$.post('ajax_festival.php', $('#speechform').serialize(), function(msg) {
			my_jPlayer.jPlayer("setMedia", {
				mp3: "./audio/" + msg
			}).jPlayer("play");
		});

		$(this).blur();
		return false;
	});

	// Create click handlers for the different tracks
	$("#isa_images_content .track img").click(function(e) {
		$('#speech').val($(this).attr('title'));
		$.post('ajax_festival.php', $('#speechform').serialize(), function(msg) {
			my_jPlayer.jPlayer("setMedia", {
				mp3: "./audio/" + msg
			}).jPlayer("play");
		});

		$(this).blur();
		return false;
	});

	$("#isa_tts_button").click(function(e) {
	
		var comodo = $('#writtentext').val();
		comodo = comodo.replace(/[^a-z0-9]/gi,'');

		$('#speech').val(comodo);
		$.post('ajax_festival.php', $('#speechform').serialize(), function(msg) {
			my_jPlayer.jPlayer("setMedia", {
				mp3: "./audio/" + msg
			}).jPlayer("play");
			setTimeout("$('#writtentext').val('').focus()",1000);
		});

		return false;
	});

	$("#isa_button_send").click(function(e) {
		$("#hiddenframe").attr("src","http://isf-walks.sinapto.net:9090/index.html?speech=" + encodeURIComponent($('#writtentext').val()));
		setTimeout("$('#writtentext').val('').focus()",1000);
		return false;
	});
	
	$('#writtentext').bind('keypress',function() {
		xt9_load();
	});
	
});