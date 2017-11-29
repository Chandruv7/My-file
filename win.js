var EventEmitter = require('events').EventEmitter;


var game = new EventEmitter();


game.on('newplayer', function(message){

    console.log(message);

});

game.on('gameover', function(message){

    console.log(message);

});
game.emit('gameover', 'You WiN!');
game.emit('newplayer', 'Mario', 35);