<?php

use Kirby\Cms\Page;

class MediaImagePage extends Page
{
  public function image(?string $filename = null)
  {
    if (!$filename) {
      return $this->parent()->images()->template('image')->findBy('name', $this->slug());
    }
    return parent::filename($filename);
  }
}
