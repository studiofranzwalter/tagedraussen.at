<?php 
 /*
  *
  * @info Text block
  * @path site/snippets/blocks/text.php
  * @date 20220624
  *  
  */
  
  $content    = $block ?? $content ?? '';
  
  $animation = $animation ?? '';
  $modifier  = $modifier ?? '';

?>

<div 
  data-block="text"
  <?php e($animation, 'data-animation="'.$animation.'"') ?>
  <?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
  <?= $block->text()->kti() ?>
</div>
