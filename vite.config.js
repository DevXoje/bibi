import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',// in spa this file import in js
                'resources/js/app.js'
            ],
            ssr: ['resources/js/ssr.js'],
            refresh: true,
        }),
    ],
    server:{
        host:"0.0.0.0",
        hmr:{
            host:'localhost'
        }
    }
});
