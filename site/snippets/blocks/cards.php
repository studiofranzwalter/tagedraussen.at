<?php 
 /*
  *
  * @info Cards block
  * @path site/snippets/blocks/cards.php
  * @date 20220623
  *  
  */

  $content    = $block ?? $content ?? $page->children()->listed() ?? '';

  $animation  = $animation ?? '';
  $heading    = $heading ?? '';
  $modifier   = $modifier ?? '';

?>

<div
  data-block="cards"
  data-grid="auto"
  <?php e($animation, 'data-animation="'.$animation.'"') ?>
  <?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
  <?php e($heading, '<h3><span>'.$heading.'</span></h3>') ?>
  <ul data-grid>
    <?php foreach($content as $item): ?>
      <li>
        <a href="<?= $item->url(); ?>">  
          <?= $item->title() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
