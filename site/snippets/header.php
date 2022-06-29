<?php
 /*
  *
  * @info Header snippet
  * @path site/snippets/header.php
  * @date 20220529
  * 
  */
?>

<header 
  data-banner-type="<?= $page->bannerType()->or('logo') ?>" 
  data-flex
>

  <h1 hidden><?= $site->heading()->html() ?></h1>

  <h2 data-flex aria-label="<?= $site->metaSummary()->html() ?>">
    <?= asset('assets/images/tagedraussen-logo-'.$kirby->language().'.svg')->read() ?>
    
    <span>
      <?= $page->subheading()->kti() ?>
    </span>
  </h2>

  <?php switch ( $page->bannerType()) {
  case "image":
    snippet('blocks/image', [
      'block' => $page->bannerImage(),
    ]);
    break;
  case "video":  
    snippet('blocks/video', [
      'block'  => $page->bannerVideo(),
      'poster' => $page->poster(),
    ]);
    break;
  default:
  } ?> 

</header>

<aside data-flex>
  <a 
    href="https://alpenverein.at/jugend/" 
    rel="me" 
    target="_blank"
  >
    <?php $logo = asset('assets/images/alpenvereinsjugend-wordmark.svg') ?>
    <img alt="Logo <?= t('oeavjugend') ?>" src="<?= $logo->url() ?>" width="<?= $logo->width() ?>" height="<?= $logo->height() ?>" oncontextmenu="return false" draggable="false">
  </a>
</aside>
