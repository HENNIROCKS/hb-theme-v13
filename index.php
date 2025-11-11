<?php

/**
 * @var \Kirby\Cms\App $kirby
 */

use Kirby\Cms\App as Kirby;
use Hennirocks\Helpers;

Kirby::plugin('hennirocks/hb-theme-v13', [
    'blueprints' => Helpers::mapFiles(__DIR__, 'blueprints', ['yml']),
    'snippets'   => Helpers::mapFiles(__DIR__, 'snippets',   ['php']),
    'templates'  => Helpers::mapFiles(__DIR__, 'templates',  ['php']),

    'hooks' => [
        'system.loadPlugins:after' => function () {
            if (!kirby()->plugin('hennirocks/hb-commons')) {
                throw new \Exception(
                    'Dieses Theme benötigt zunächst das Plugin "hennirocks/hb-commons".'
                );
            }
        }
    ],
]);
