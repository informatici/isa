var app = require('http').createServer(handler)
  , url = require('url')
  , io = require('socket.io').listen(app)
  , fs = require('fs')
  , path = require('path')
  , sys = require('sys');

app.listen(8080);

function handler (req, res) {
  fs.readFile(__dirname + '/sample1.html',
  function (err, data) {
    if (err) {
      res.writeHead(500);
      return res.end('Error loading sample1.html');
    }

    res.writeHead(200);
    res.end(data);
  });
}

app.addListener("listening", function() {
	//nella versione precedente di node sys era deprecato a favore dell'utilizzo di
	//util, ora non dà nessun errore utilizzando sys.
    sys.log("In attesa di connessioni...");
});

//on e addListener hanno la stessa funzione...almeno cosi dicono!!
app.on('connection', function (stream) {
  sys.log('Client Connesso!');										//Client Connesso compare 2/3 volte in console!!??!!
});

var stdin = process.openStdin(); //permette di inviare messaggi dal server (standard input)

stdin.setEncoding('utf8');

stdin.on('data', function (chunk) {                             //stampa sulla console ogni chunk scritto preceduto da data:
  process.stdout.write('data: ' + chunk);
});

stdin.addListener('data', function(text) {
	io.sockets.emit('news', { testo: text });
});