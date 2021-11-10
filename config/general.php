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

$isDev = App::env('ENVIRONMENT') === 'dev';
$isProd = App::env('ENVIRONMENT') === 'production';

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


    // Routing
    'omitScriptNameInUrls' => true,

    // Security
    'preventUserEnumeration' => true,
    'securityKey' => App::env('SECURITY_KEY'),

    // Assets
    'convertFilenamesToAscii' => true,

    // GraphQL
    'enableGql' => false
];