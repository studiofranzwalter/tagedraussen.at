<?php 
 /*
  *
  * @info Heading block
  * @path site/snippets/blocks/heading.php
  * @date 20220623
  *  
  */

  $content    = $block ?? $content ?? '';

  $animation  = $animation ?? '';
  $modifier   = $modifier ?? '';

?>

<<?=$content->level()->or('h3') ?>
  data-block="heading"
  <?php e($animation, 'data-animation="'.$animation.'"') ?>
  <?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
  <?= $content->text() ?>
</<?=$content->level()->or('h3') ?>>
