<?php
 /*
  *
  * @info English language settings
  * @path site/languages/en.php
  *
  */

return array (
  'code' => 'en',
  'default' => false,
  'direction' => 'ltr',
  'locale' => 'en_EN',
  'name' => 'English',
  'slug' => [
    'ä' => 'ae',
    'ö' => 'oe',
    'ß' => 'sz',
    'ü' => 'ue'
  ],
  'slugs.maxlength' => 120,
  'smartypants' => [
    'doublequote.open'  => '&#8222;',
    'doublequote.close' => '&#8220;',
    'singlequote.open'  => '&#8218;',
    'singlequote.close' => '&#8216;'
  ],
  'translations' => Yaml::decode(F::read(kirby()->root('languages'). DS . 'en.yml')),
  'url' => option('language.url.en'),
);
