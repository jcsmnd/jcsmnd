#!/usr/bin/env nodejs
// var http = require('http');
// http.createServer(function (request, response) {
//    response.writeHead(200, {'Content-Type': 'text/plain'});
//    response.end('Node.js is working correctly!!\n');
// }).listen(8085);
// console.log('Server running at https://127.0.0.1:8085/');

const express = require('express')
const app = express()
app.get('/', (req, res) => res.send('node.js + express in apache server using proxyPass'))
app.listen(8085, () => console.log('Example app listening on port 8085!'))