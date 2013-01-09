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