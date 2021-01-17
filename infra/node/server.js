var http = require('http');

http.createServer(function (request, response) {
    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.end('Hello World\n');
}).listen(process.env.PORT);

console.log(`Server running at http://127.0.0.1:${process.env.PORT}/`);