// INIT

// creo l'oggetto tag STYLE
var styletag = document.createElement('style');

// inizializzo le variabili base
var screen_width;
var screen_height;

var ratio_width;
var ratio_height;

var left_correction;
var top_correction;

$(document).ready(function() {
	initgrid();
	$(window).resize(function() {
		initgrid();
	});	
})

function initgrid() {
	// aggiungo un tag style alla pagina per le classic he compongono la GRID
	while (styletag.firstChild) {
		styletag.removeChild(styletag.firstChild);
	}

	styletag.appendChild(document.createTextNode(''));
	document.head.appendChild(styletag);
	stylegrid = styletag.sheet;

	// rilevo le dimensioni desiderate dello stage, dala ratio preimpostata
	var ratio_desired_dims_array = new Array();
	if (desiredratio.indexOf(':') != -1) {
		ratio_desired_dims_array = desiredratio.split(':');
		ratio_desired_dims = ratio_desired_dims_array[0]/ratio_desired_dims_array[1];
	} else {
		ratio_desired_dims = 1;
	}

	// rilevo le dimensioni reali dello schermo e ne calcolo la ratio
	screen_width = $(window).width();
	screen_height = $(window).height();
	
	ratio_width = screen_width/100;
	ratio_height = screen_height/100;
	
	left_correction = 0;
	top_correction = 0;

	ratio_screen_dims = screen_width/screen_height;

	// confronto la ratio desiderata e quella reale per impostare le opportune correzioni

	if (ratio_desired_dims == 1) {

		// se la ratio desiderata è 1:1, l'output occuperà la massima area disponibile
		// sia in width che in height
		ratio_width = screen_width/100;
		ratio_height = screen_height/100;

	} else if (ratio_screen_dims > ratio_desired_dims) {

		// se la ratio dello schermo è maggiore della ratio desiderata, la height dell'output occuperà tutto lo spazio disponibile,
		// mentre la width si adeguerà in proporzione, mantenendo la ratio proporzionale a quella desiderata
		desired_width = screen_height*ratio_desired_dims;
		ratio_width = desired_width/100;
		ratio_height = screen_height/100;

		left_correction = (screen_width - desired_width)/2;

	} else if (ratio_screen_dims < ratio_desired_dims) {

		// se la ratio dello schermo è minore della ratio desiderata, la width dell'output occuperà tutto lo spazio disponibile,
		// mentre la height si adeguerà in proporzione, mantenendo la ratio proporzionale a quella desiderata
		ratio_width = screen_width/100;
		desired_height = screen_width/ratio_desired_dims;
		ratio_height = desired_height/100;

		top_correction = (screen_height - desired_height)/2;

	}

	var grid_width = 0;

	for (i=0; i<=100; i++) {
		
		grid_width = Math.floor(i*ratio_width*1000)/1000;
		grid_height = Math.floor(i*ratio_height*1000)/1000;

		if (stylegrid.insertRule) {
		   // all browsers, except IE before version 9
			stylegrid.insertRule('.w' + i + ' {width:' + grid_width + 'px;}',0);
			stylegrid.insertRule('.h' + i + ' {height:' + grid_height + 'px;}',0);
			stylegrid.insertRule('.t' + i + ' {top:' + grid_height+top_correction + 'px;}',0);
			stylegrid.insertRule('.l' + i + ' {left:' + grid_width+left_correction + 'px;}',0);
		} else {
			// Internet Explorer before version 9
			if (stylegrid.addRule) {
				stylegrid.addRule('.w' + i,'width:' + grid_width + 'px;',1);
				stylegrid.addRule('.h' + i,'height:' + grid_height + 'px;',1);
				stylegrid.addRule('.t' + i,'top:' + grid_height+top_correction + 'px;',1);
				stylegrid.addRule('.l' + i,'left:' + grid_width+left_correction + 'px;',1);
			}
		}

	}

	// globals
	$('table#homemenu').addClass('w75 h85');

	$('table#container').addClass('w100 h100 t0 l0');

	$('td#menu_container').css({height:11*ratio_height});

	$('table#isa_menu').css({width:100*ratio_width});

	$('td#text_container').css({height:10*ratio_height});
	$('td#text_container input').css({width:99*ratio_width,height:12*ratio_height,fontSize:6*ratio_height,borderRadius:1.5*ratio_height});

	$('td#xt9_container').css({height:10*ratio_height});
	$('input.xt9_word').css({fontSize:3.6*ratio_height});

	// keyboard
	$('td#keyboard_container').css({height:62*ratio_height});
	$('td#keyboard_container table').css({width:100*ratio_width});
	$('td#keyboard_container table td').css({width:9*ratio_width,height:12*ratio_height});

	// keyboard buttons
	$('td#keyboard_container table td.fullbutton a').css({fontSize:8.5*ratio_height});
	$('td#keyboard_container table td.halfbutton a').css({fontSize:4.7*ratio_height});
	$('td#keyboard_container table td.quarterbutton a').css({fontSize:3*ratio_height});

	// wordboard
	$('td#wordboard_container table td').css({height:8*ratio_height});
	$('td#wordboard_container table td a').css({lineHeight:0.45*ratio_height,fontSize:2.25*ratio_height});

	// domotic
	$('td#domotic_container table td').css({height:28*ratio_height});
	$('td#domotic_container table td button span').css({fontSize:3*ratio_height});

	// software
	$('td#software_container a span').css({fontSize:2*ratio_height});
	
	// browser
	$('iframe#isa_browser').css({height:100*ratio_height});
	

}