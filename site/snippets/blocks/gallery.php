<?php
 /*
	*
	* @info Gallery block
	* @path site/snippets/blocks/gallery.php
	* @date 20220623
	*
	*/

	$content   = $block ?? $content ?? '';
	$image     = $content->images()->toFiles();

	$animation = $animation ?? '';
	$heading   = $heading ?? '';
	$modifier  = $modifier ?? '';

?>

<div
	data-block="gallery"
	data-grid
	<?php e($animation, 'data-animation="'.$animation.'"') ?>
	<?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
	<?php if($heading->isNotEmpty()): '<h3><span>'.$heading.'</span></h3>';endif; ?>
	<?php foreach ($block->images()->toFiles() as $image): ?>
		<figure>
			<picture id="id<?= substr($image->hash(),0,7) ?>">
				<source
					type="image/webp"
					sizes="90vw"
					srcset="<?= $image->srcset([
						'300w'   => ['width' => 300,  'height' => 300,  'format' => 'webp'],
						'600w'   => ['width' => 600,  'height' => 600,  'format' => 'webp'],
						'1000w'  => ['width' => 900,  'height' => 900,  'format' => 'webp'],
					]) ?>"
				/>
				<source
					type="image/jpeg"
					sizes="90vw"
					srcset="<?= $image->srcset([
						'300w'   => ['width' => 300,  'height' => 300,  'format' => 'jpg'],
						'600w'   => ['width' => 600,  'height' => 600,  'format' => 'jpg'],
						'1000w'  => ['width' => 900,  'height' => 900,  'format' => 'jpg'],
					]) ?>"
				/>
				<img
					draggable="false"
					oncontextmenu="return false"
					alt="<?= $image->alt() ?>"
					height="<?= $image->height() ?>"
					width="<?= $image->width() ?>"
					src="<?= $image->thumb(['width' => 600])->url() ?>"
				>
			</picture>
		</figure>
	<?php endforeach ?>
</div>
