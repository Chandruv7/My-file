var http = require('http');


var server = http.createServer(function(req, res) {

res.writeHead(200, {"Content-Type": "text/html"});

res.end('<p><strong>I've done with it</strong>!</p>');

});

server.listen(8080);