var http = require('http');


var server = http.createServer(function(req, res) {

res.writeHead(200, {"Content-Type": "text/html"});

res.end('<p>Hi JK bro <strong>Ive done with it</strong>!</p>');

});

server.listen(8080);