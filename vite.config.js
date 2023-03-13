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
    plugins: [],
    server: {
        host: '0.0.0.0',
        port: 3000,
        strictPort: true
    },
});