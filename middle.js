var express = require('express');

var morgan = require('morgan'); // loads the piece of middleware for logging

var favicon = require('serve-favicon'); // loads the piece of middleware for the favicon


var app = express();


app.use(morgan('combined')) // loads the piece of middleware for logging

.use(express.static(__dirname + '/public')) // Specifies that the /public folder includes static files (basic piece of middleware loaded)

.use(favicon(__dirname + '/public/favicon.ico')) // Activates the favicon specified

.use(function(req, res){ // finally answers

    res.send('Hello');

});


app.listen(8080);
