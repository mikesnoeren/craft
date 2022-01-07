module.exports = {
    content: [
        './templates/**/*.html',
        './templates/**/*.twig',
        './src/**/*.js',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
}