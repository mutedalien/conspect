const static = require('node-static');
const http = require('http');

const file = new static.Server('.');

http.createServer((req, res) => {
    file.serve(req, res);
}).listen(3000);