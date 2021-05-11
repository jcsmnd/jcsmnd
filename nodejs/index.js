#!/usr/bin/env nodejs
// var http = require('http');
// http.createServer(function (request, response) {
//    response.writeHead(200, {'Content-Type': 'text/plain'});
//    response.end('Node.js is working correctly!!\n');
// }).listen(8085);
// console.log('Server running at https://127.0.0.1:8085/');

// const express = require('express');
// const socket = require('socket.io');

// const PORT = 8085;
// const app = express();
// // app.get('/', (req, res) => res.send('node.js + express in apache server using proxyPass'));
// // app.listen(PORT, () => console.log('Example app listening on port 8085!'));

// const server = app.listen(PORT, () => console.log('Port:',PORT));
// app.use(express.static('public'));

// const io = socket(server);

// io.on('connection', function(socket){
//     console.log("socket connection on");
// });

const express = require('express'); 
const app = express();
const server = app.listen(8085,console.log("Socket.io Hello Wolrd server started!"));
const io = require('socket.io')(server);

app.use((req, res) => {
   res.send('socket.io connected');
});

var allClients = [];

io.on('connection', (socket) => {
    console.log("Client connected!");
    socket.on('message-from-client-to-server', (msg) => {
        console.log(msg);
    })

    socket.disconnect();
});