<?php
 /*
  *
  * @info Site controller
  * @path site/controllers/site.php
  * @date 20220628
  * 
  */

return function ($page, $pages, $site, $kirby) {

  $metaAuthor      = $page->metaAuthor()->or($site->metaAuthor());
  $metaDescription = $page->metaDescription()->kti()->or($page->subheading()->kti()->or($site->metaDescription()));
  $metaFavicon     = $page->metaFavicon()->or($site->metaFavicon());
  if($page->metaImage() != ''): 
    $metaImage = $page->metaImage()->toFile()->focusCrop(1200, 630)->url();
  else: 
    $metaImage = $site->metaImage()->toFile()->focusCrop(1200, 630)->url();
  endif;
  $metaKeywords    = $page->metaKeywords()->or($site->metaKeywords());
  $metaRobots      = $page->metaRobots() ?? 'index,follow';
  $metaTitle       = $site->title() . ' ― ' . $page->metaTitle()->or($page->title());
  $metaUrl         = $page->url() ?? $site->url();

  $heading         = $page->heading();
  $subheading      = $page->subheading();
  $lede            = $page->lede();
  $downloads       = $page->children()->find('downloads') ?? '';
  $media           = $page->children()->find('media') ?? '';

  if ($kirby->user()) {}
  $error = false;
  if ($kirby->request()->is('POST') && get('login')) {
    if ($user = $kirby->user(get('email'))) {
      try {
        $user->login(get('password'));
      } catch (Exception $e) {
        $error = true;
      }
    } else {
      $error = true;
    }
  }

  return compact(
    'downloads',
    'error',
    'heading',
    'lede',
    'media',
    'metaAuthor',
    'metaDescription',
    'metaFavicon',
    'metaImage',
    'metaKeywords',
    'metaRobots',
    'metaTitle',
    'metaUrl',
    'subheading',
  );
};
