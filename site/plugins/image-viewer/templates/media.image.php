<?php
/*
 *
 * @info Single image viewer template
 * @path site/templates/media.image.php
 * @date 2022-06-06
 *
 */
?>

<?php snippet('head') ?>

<main data-grid>

  <?php snippet('header') ?>

  <?php snippet('navigation') ?>
  <div data-block="fullscreen image">
    <a href="<?= $page->parent()->parent()->url() ?>/#<?= $page->slug() ?>">
      <?php snippet('blocks/image', [
        'content' => $page
      ]) ?>
    </a>
  </div>
  
  <?php snippet('footer') ?>

</main>

<?php snippet('foot') ?>




