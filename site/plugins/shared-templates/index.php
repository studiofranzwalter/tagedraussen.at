<?php
/*
 *
 * @info Different blueprints — same template
 * @path site/plugins/shared-templates/index.php
 * @date 20220628
 * 
 */

use Kirby\Cms\App as Kirby;

Kirby::plugin('cookbook/shared-templates', [
  'templates' => [
    // 'home'  => __DIR__ . '/templates/default.php',
    'press' => __DIR__ . '/templates/simple.php',
  ]
]);
