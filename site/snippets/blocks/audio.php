<?php 
 /*
  *
  * @info Audio block
  * @path site/snippets/blocks/audio.php
  * @date 20220623
  *
  * @status DRAFT
  *
  */

  $content    = $block ?? $content ?? '';

  $animation  = $animation ?? '';
  $heading    = $heading ?? '';
  $modifier   = $modifier ?? '';

?>

<div
  data-block="audio"
  <?php e($animation, 'data-animation="'.$animation.'"') ?>
  <?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
  <?php e($heading, '<h3><span>'.$heading.'</span></h3>') ?>
  <audio       
    controls
    preload="auto"
    src="<?= $page->episode()->toFile()->url() ?>"
  ></audio>
</div>
