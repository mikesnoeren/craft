# About mikesnoeren/craft

This repository was created to provide an easy starting point for your new [Craft CMS 3](https://github.com/craftcms/cms) projects.

Please be aware that this project is very opinionated; it expects you to mostly be using [TailwindCSS](https://github.com/tailwindlabs/tailwindcss) and [Alpine.js](https://github.com/alpinejs/alpine) for the frontend. 
If you do require custom JavaScript or CSS, it will be bundled, transformed and minified using [esbuild](https://github.com/evanw/esbuild) and [PostCSS](https://github.com/postcss/postcss).

## Using mikesnoeren/craft
The setup assumes you use [Nitro](https://github.com/craftcms/nitro), if you you use an alternative development environment please change the steps below accordingly.

Copy the repository: <br>
```git clone https://github.com/mikesnoeren/craft.git my-project``` 

Install dependencies: <br>
```composer install && npm install```

Setup Nitro: <br>
```nitro add```

Build the project: <br>
```npm run build```

Start developing: <br>
```npm run watch```