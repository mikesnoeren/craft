<?php

use craft\helpers\App;

return [
    'checkDevServer' => true,
    'devServerInternal' => 'http://localhost:3000',
    'devServerPublic' => App::env('CRAFT_SITE_URL') . ':3000',
    'serverPublic' => App::env('CRAFT_SITE_URL') . '/dist/',
    'useDevServer' => App::env('CRAFT_ENVIRONMENT') === 'dev',
    'manifestPath' => '@webroot/dist/manifest.json',
];