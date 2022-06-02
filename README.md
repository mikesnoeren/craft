# About mikesnoeren/craft

This repository was created to provide an easy starting point for your new [Craft CMS 4](https://github.com/craftcms/cms) projects.

Please be aware that this project is very opinionated; it expects you to mostly be using [TailwindCSS](https://github.com/tailwindlabs/tailwindcss) and [Alpine.js](https://github.com/alpinejs/alpine) for the frontend. 
If you do require custom JavaScript or CSS, it will be bundled, transformed and minified using [vite](https://github.com/vitejs/vite) and [PostCSS](https://github.com/postcss/postcss).

## Using mikesnoeren/craft
The setup assumes you use [ddev](https://github.com/drud/ddev), if you use an alternative development environment, please change the steps below accordingly.

### 1. Clone this project by clicking [here](https://github.com/mikesnoeren/craft/generate)

### 2. Run the project: `ddev start && ddev exec npm run watch`