module.exports = {
    mode: 'jit',
    purge: [
        './templates/**/*.html',
        './templates/**/*.twig',
        './src/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        container: {
            center: true,
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
