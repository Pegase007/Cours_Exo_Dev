var io = require("socket.io")(1337);

io.on("connection",function(socket){

socket.on("msg",function(message){

	io.emit("msg_reçu",message);
})
console.log("ok");


})