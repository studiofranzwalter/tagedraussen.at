<?php 
 /*
  *
  * @info Image block
  * @path site/snippets/blocks/image.php
  * @date 20220628
  *  
  */

  $content    = $block ?? $content ?? '';
  $image      = $content->image()->toFile() ?? '';
  if ($image) {
    $alt      = $image->alt() ?? '';
  };

  $animation  = $animation ?? '';
  $heading    = $heading ?? '';
  $modifier   = $modifier ?? '';
  
?>

<?php if ($image): ?>

  <figure data-block="image">
    <picture>
      <source
        srcset="<?= $image->srcset('webp') ?>"
        sizes="100vw"
        type="image/webp"
      >
      <img
        alt="<?= $image->alt() ?>"
        draggable="false" 
        oncontextmenu="return true;"
        src="<?= $image->resize(300)->url() ?>"
        srcset="<?= $image->srcset() ?>"
        sizes="100vw"
        width="<?= $image->width() ?>"
        height="<?= $image->height() ?>"
      >
    </picture>

    <?php // Apply caption if exists ?>
    <?php if($page->bannerCaption()->isNotEmpty()): ?>
      <figcaption>
        <?= $page->bannerCaption() ?>
      </figcaption>
    <?php endif ?>

  </figure>
<?php endif ?>
