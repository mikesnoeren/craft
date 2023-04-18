<?php

use craft\helpers\App;

return [
    'headersEnabled' => false,
    'environment' => App::env('CRAFT_ENVIRONMENT') === 'production' ? 'live' : App::env('CRAFT_ENVIRONMENT'),
    'devModeTitlePrefix' => '',
    'cpTitlePrefix' => '',
    'devModeCpTitlePrefix' => '',

    'socialMediaPreviewTarget' => false,
    'sidebarDisplayPreviewTypes' => [
        'google',
        'facebook'
    ],
];