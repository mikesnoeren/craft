<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';

return [
    // System
    'allowAdminChanges' => $isDev,
    'allowUpdates' => $isDev,
    'cacheDuration' => 0,
    'defaultWeekStartDay' => 1,
    'devMode' => $isDev,
    'disallowRobots' => !$isProd,
    'enableTemplateCaching' => $isProd,
    'maxRevisions' => 10,
    'testToEmailAddress' => App::env('SITE_EMAIL'),
    'timezone' => 'Europe/Amsterdam',
    'useEmailAsUsername' => true,
    'aliases' => [
        '@web' => App::env('CRAFT_SITE_URL'),
        '@web_nl' => App::env('CRAFT_SITE_URL') . 'nl/',
        '@web_de' => App::env('CRAFT_SITE_URL') . 'de/',
        '@assets_path' => App::env('CRAFT_ASSET_PATH'),
        '@assets_base' => App::env('CRAFT_SITE_URL') . App::env('CRAFT_ASSET_PATH')
    ],

    // Routing
    'omitScriptNameInUrls' => true,

    // Security
    'preventUserEnumeration' => true,
    'securityKey' => App::env('CRAFT_SECURITY_KEY'),

    // Assets
    'convertFilenamesToAscii' => true,
    'brokenImagePath' => '', // TODO: add broken image path

    // GraphQL
    'enableGql' => false
];