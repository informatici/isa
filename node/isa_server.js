/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// importazione moduli necessari
var app = require('http').createServer(handler);
var io = require('socket.io').listen(app);
var util = require('util');
var fs = require('fs');

// settaggio porta e indirizzo sui quali il server è in ascolto
app.listen(9090, 'isf-walks.sinapto.net');

function handler(req, res){
	fs.readFile(__dirname + '/index.html',
	function (err, data){
		if (err) {
			res.writeHead(500);
			return res.end('Error loading client.html');
		}
		res.writeHead(200);
		res.end(data);
	});
}

// server in attesa di connessioni
app.addListener('listening', function(){
	util.log('In attesa di connessioni...');
});

// server accetta connessione client
// app.addListener('connection', function(stream){ non visualizzava i mess ricevuti dal client
io.sockets.on('connection', function(socket){
	util.log('Client connesso!!');
	// riceve il messaggio dal client!!!
	socket.on('client_message', function(data){
		console.log(data.text);
		// pusha messaggi ricevuti dal client agli altri client
		io.sockets.emit('notifica', {testo:data.text});
	});
});

// standardInput su console 
var stdin = process.openStdin();
stdin.setEncoding('utf8');

stdin.on('data', function(chunk){
	process.stdout.write('data: ' + chunk);
});

// consente la scrittura di messaggi tramite il canale stdin
stdin.addListener('data', function(text){
	io.sockets.emit('news', {testo: text});
});
