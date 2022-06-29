<?php 
 /*
  *
  * @info Quote block
  * @path site/snippets/blocks/quote.php
  * @date 20220624
  *  
  */

  $content    = $block ?? $content ?? '';

  $animation  = $animation ?? '';
  $modifier   = $modifier ?? '';

?>

<div
  data-block="quote"
  <?php e($animation, 'data-animation="'.$animation.'"') ?>
  <?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
  <blockquote>
    <p><?= $block->text()->kti() ?></p>
  </blockquote>  
  <?php if ($block->citation()->isNotEmpty()): ?>
    <cite>
      <?= $block->citation() ?>
    </cite>
  <?php endif ?>
</div>
