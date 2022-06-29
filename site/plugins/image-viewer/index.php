<?php
use Kirby\Cms\App as Kirby;

require __DIR__ . '/models/Media.php';
require __DIR__ . '/models/MediaImage.php';

Kirby::plugin('studiofranzwalter/imageviewer', [
  'blueprints' => [
    // 'pages/media.image' => __DIR__ . '/blueprints/pages/media.image.yml',
  ],
  'pageModels' => [
    'media'      => 'MediaPage',
    'mediaImage' => 'MediaImagePage',
  ],
  'templates' => [
    'media.image' => __DIR__ . '/templates/media.image.php',
  ],
]);
