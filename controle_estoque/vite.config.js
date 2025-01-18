import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import dotenv from 'dotenv';
import vue from '@vitejs/plugin-vue';
import path from 'path';

// Carregar as variáveis de ambiente do arquivo .env
dotenv.config();

export default defineConfig({
    server: {
        host: '0.0.0.0', // Permite o acesso a partir de qualquer IP
        port: 5173,
        strictPort: true,
        hmr: {
          host: process.env.VITE_SERVER_IP || 'localhost', // Pega o IP do servidor do .env
        },
    },
    base: `http://${process.env.VITE_SERVER_IP || 'localhost'}:5173/`, // Usar o IP do servidor do .env
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
});
