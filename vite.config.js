import viteCompression from 'vite-plugin-compression';
import ViteRestart from 'vite-plugin-restart';

export default ({command}) => ({
    base: command === 'serve' ? '' : '/dist/',
    publicDir: './src/img',
    build: {
        manifest: true,
        outDir: './web/dist/',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                js: './src/js/app.js',
            }
        },
    },
    plugins: [
        viteCompression({
            filter: /\.(js|mjs|json|css|map)$/i
        }),
        ViteRestart({
            reload: [
                './templates/**/*',
            ],
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 3000,
        strictPort: true
    },
});