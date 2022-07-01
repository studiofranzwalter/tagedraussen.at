<?php
 /*
	*
	* @info Teaser block
	* @path site/snippets/blocks/teaser.php
	* @date 20220624
	*
	*/

	$content    = $block ?? $content ?? $page->children()->listed();

	$animation = $animation ?? '';
	$heading   = $heading ?? '';
	$modifier  = $modifier ?? '';

?>

<div
	data-block="teaser"
	data-grid="auto"
	<?php e($animation, 'data-animation="'.$animation.'"') ?>
	<?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
	<?php foreach($content->pages()->toPages() as $item): ?>
		<a href="<?= $item->url() ?>">
			<figure>
				<?php if($item->teaserImage()->isNotEmpty()): ?>
					<img
						data-modifier="cover"
						src="<?= $item->teaserImage()->toFile()->resize(500)->url() ?>" alt=""
					/>
				<?php endif ?>
			</figure>
			<h3><?= $item->teaserHeading()->kti()->or($item->title()) ?></h3>
			<p><?= $item->teaserText()->kti() ?></p>
		</a>
	<?php endforeach ?>
</div>
