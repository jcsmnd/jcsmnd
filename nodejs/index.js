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

//******** working start*****/
// const express = require('express'); 
// const app = express();
// const server = app.listen(8085,console.log("Socket.io Hello Wolrd server started!"));
// const io = require('socket.io')(server);

// app.use((req, res) => {
//    res.send('socket.io connected');
// });

// var allClients = [];

// io.on('connection', (socket) => {
//     console.log("Client connected!");
//     socket.on('message-from-client-to-server', (msg) => {
//         console.log(msg);
//     })

//     socket.disconnect();
// });
//******** working end*****/

//Setup basic express server
// const express = require('express');
// const app = express();
// const path = require('path');
// const server = require('http').createServer(app);
// const io = require('socket.io')(server);
// const port = 8085;

// server.listen(port, () => {
//   console.log('Server listening at port %d', port);
// });

// // Routing
// //app.use(express.static(path.join(__dirname, 'public')));
// app.use(express.static(path.join('public')))
// app.use('/public',express.static('public'));

// // Chatroom
// let numUsers = 0;

// io.on('connection', (socket) => {
//   let addedUser = false;

//   // when the client emits 'new message', this listens and executes
//   socket.on('new message', (data) => {
//     // we tell the client to execute 'new message'
//     socket.broadcast.emit('new message', {
//       username: socket.username,
//       message: data
//     });
//   });

//   // when the client emits 'add user', this listens and executes
//   socket.on('add user', (username) => {
//     if (addedUser) return;

//     // we store the username in the socket session for this client
//     socket.username = username;
//     ++numUsers;
//     addedUser = true;
//     socket.emit('login', {
//       numUsers: numUsers
//     });
//     // echo globally (all clients) that a person has connected
//     socket.broadcast.emit('user joined', {
//       username: socket.username,
//       numUsers: numUsers
//     });
//   });

//   // when the client emits 'typing', we broadcast it to others
//   socket.on('typing', () => {
//     socket.broadcast.emit('typing', {
//       username: socket.username
//     });
//   });

//   // when the client emits 'stop typing', we broadcast it to others
//   socket.on('stop typing', () => {
//     socket.broadcast.emit('stop typing', {
//       username: socket.username
//     });
//   });

//   // when the user disconnects.. perform this
//   socket.on('disconnect', () => {
//     if (addedUser) {
//       --numUsers;

//       // echo globally that this client has left
//       socket.broadcast.emit('user left', {
//         username: socket.username,
//         numUsers: numUsers
//       });
//     }
//   });
// });