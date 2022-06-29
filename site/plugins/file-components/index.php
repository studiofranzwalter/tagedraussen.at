<?php
/*
 *
 * @info Plugin to serve video and audio files from the content folder
 * @path site/plugins/file-component/index.php
 * @date 20220627
 * 
 * @link https://getkirby.com/docs/cookbook/setup/purpose-of-media-folder
 * 
 */

use Kirby\Cms\App as Kirby;

Kirby::plugin('studiofranzwalter/file-components', [
  'components' => [
    'file::url' => function (Kirby $kirby, $file) {
      if (
        $file->type() == 'video'   OR 
        $file->type() == 'audio'   OR 
        $file->type() == 'archive' 
      ):
        return $kirby->url() . '/content/' . $file->parent()->diruri() . '/' . $file->filename();
      else:
        return $file->mediaUrl();
      endif;
    }
  ]
]);
