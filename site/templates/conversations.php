<?php
 /*
  *
  * @info Conversations page template
  * @path site/templates/conversations.php
  * @date 20220624
  *
  */
?>

<?php snippet('head') ?>

<main data-grid>
  
  <?php snippet('header') ?>
  <?php snippet('navigation') ?>
  <?php snippet('contents') ?>
  <?php snippet('blocks/cardlets', ['content' => $kirby->collection('conversations')]) ?>
  <?php snippet('footer') ?>
  
</main>

<?php snippet('foot') ?>
