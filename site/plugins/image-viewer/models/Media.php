<?php

use Kirby\Cms\Page;
use Kirby\Cms\Pages;

class MediaPage extends Page
{
  public function children()
  {
    $images = [];

    foreach ($this->images()->template('image') as $image) {
      $images[] = [
        'slug'     => $image->name(),
        'num'      => $image->sort()->value(), // or use the image sort number here if available
        'template' => 'media.image',
        'model'    => 'mediaImage',
        'content'  => $image->content()->toArray(),
      ];
    }

    return Pages::factory($images, $this);
  }
}
