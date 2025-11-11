<?php

/**
 * @var \Kirby\Cms\App $kirby
 */

use Kirby\Cms\App as Kirby;
use Hennirocks\Helpers;

Kirby::plugin('hennirocks/hb-theme-v13', [
    'hooks' => [
        'system.loadPlugins:after' => function () {
            if (!kirby()->plugin('hennirocks/hb-commons')) {
                throw new \Exception(
                    'Dieses Theme benötigt zunächst das Plugin "hennirocks/hb-commons".'
                );
            }
        }
    ],
    'blueprints' => Helpers::mapFiles(__DIR__, 'blueprints', ['yml', 'yaml']),
    'snippets'   => Helpers::mapFiles(__DIR__, 'snippets', ['php']),
    'templates'  => Helpers::mapFiles(__DIR__, 'templates', ['php']),
]);
