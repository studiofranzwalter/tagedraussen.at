<?php
 /*
	*
	* @info List block
	* @path site/snippets/blocks/list.php
	* @date 20220623
	*
	*/

	$content    = $block ?? $content ?? '';

	$animation  = $animation ?? '';
	$modifier   = $modifier ?? '';

?>

<div
	data-block="list"
	<?php e($animation, 'data-animation="'.$animation.'"') ?>
	<?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
	<?= $content->text() ?>
</div>
