<?php
 /*
  *
  * @info Kirby settings
  * @path site/config/config.php
  * @date 20220623
  *
  */

header('Cache-Control: public,max-age=300,must-revalidate');

header('Content-Security-Policy: base-uri \'self\'; default-src \'self\' tagedraussen.at *.mux.com  blob:; script-src \'self\' *.tagedraussen.at \'unsafe-inline\' blob: \'unsafe-eval\'; style-src \'self\' \'unsafe-inline\'; img-src \'self\' *.tagedraussen.at *.mux.com data:; font-src \'self\'; connect-src \'self\' *.mux.com *.mux.dev;  manifest-src \'self\'; object-src \'none\'; ');

header('Expect-CT: enforce,max-age=172800');
header('Feature-Policy: microphone \'none\'; camera \'none\'; geolocation \'none\';');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Strict-Transport-Security: max-age=172800');

header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: sameorigin');
header('X-Permitted-Cross-Domain-Policies: none');
header('X-XSS-Protection: 1; mode=block');

return [

  'cache'                    => require __DIR__ . '/config.cache.php',
  'hooks'                    => require __DIR__ . '/config.hooks.php',
  'panel'                    => require __DIR__ . '/config.panel.php',
  'routes'                   => require __DIR__ . '/config.routes.php',
  'thumbs'                   => require __DIR__ . '/config.thumbs.php',
  
  'content'                  => ['locking' => false],
  'debug'                    => true,
  'error'                    => 'fehlerseite',
  'home'                     => 'startseite',
  
  'languages'                => true,
  'languages.detect'         => false,
  'language.url.de'          => '/',
  'language.url.en'          => '/en',  
    
  'kirby-extended.redirects' => [
    'download'               => 'vault',
    'downloads'              => 'vault',
    'film'                   => 'filme',
    'vorfuehrungen'          => 'gespraeche',
    'themen'                 => 'haltung',
    'ulligunde'              => 'filme/freiraum',
    'gespraeche/feed.xml'    => '/assets/feeds/feed.xml',
  ],
  
  'kirby-extended.sitemap'   => [
    'enable' => false,
  ],

  'medienbaecker.autoresize.maxWidth'         => 3000,
  'medienbaecker.autoresize.maxHeight'        => 3000,
  'medienbaecker.autoresize.excludeTemplates' => ['download'],
  'medienbaecker.autoresize.excludePages'     => ['downloads', 'download'],

];
