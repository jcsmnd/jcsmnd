#!/usr/bin/env nodejs
var http = require('http');
http.createServer(function (request, response) {
   response.writeHead(200, {'Content-Type': 'text/plain'});
   response.end('Node.js is working correctly.\n');
}).listen(8085);
console.log('Server running at https://127.0.0.1:8085/');