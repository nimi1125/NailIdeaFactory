import { createServer } from 'vite';

createServer({
    server: { port: process.env.PORT || 3000 }
}).listen();
