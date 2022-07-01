<?php
 /*
	*
	* @info Download block
	* @path site/snippets/blocks/download.php
	* @date 20220623
	*
	*/

	$content    = $block ?? $content ?? '';

	$animation  = $animation ?? '';
	$modifier   = $modifier ?? '';

?>

<ul
	data-grid=""
	data-animation="<?= $animation ?>"
	data-block="download"
	<?php e($animation, 'data-animation="'.$animation.'"') ?>
	<?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
	<?php foreach($content->files()->toFiles() as $download): ?>
		<li>
			<a download="" href="<?= $download->url() ?>">
				<?= $download->title()->or($download->name().'.'.$download->extension())?>
			</a><br>
			<?php if($download->description()->isNotEmpty()): ?><?= $download->description()->kti() ?><br><?php endif ?>
			<?= t('fileSize') ?>: <?= $download->niceSize() ?>
		</li>
	<?php endforeach ?>
</ul>
