import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        sourcemap: false, // Désactiver les cartes sources
    },
    server: {
        // host: , // Écouter sur toutes les interfaces
        port: 5173, // Port par défaut ou celui que vous voulez utiliser
    },
});
