import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,  // Assurez-vous que manifest est activé
        outDir: 'public/build',  // Le répertoire de sortie pour les fichiers compilés
    },
});