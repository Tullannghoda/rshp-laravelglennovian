import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import tailwindcss from '@tailwindcss/vite';
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
    ],
});
