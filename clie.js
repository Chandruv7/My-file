var http = require('http');


var server = http.createServer(function(req, res) {

  res.writeHead(200);

  res.end('Hi everybody!');

});


server.on('close', function() { 

    console.log('Goodbye!');

})


server.listen(8080); 


server.close();