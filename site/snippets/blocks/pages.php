<?php
 /*
	*
	* @info Pages block
	* @path site/snippets/blocks/pages.php
	* @date 20220624
	*
	* @status DRAFT
	*
	*/

	$content = $block ?? $content ?? $page->children()->listed() ?? '';

	$animation = $animation ?? '';
	$modifier = $modifier ?? '';

?>

<div
	data-block="pages"
	data-grid
	<?php e($animation, 'data-animation="'.$animation.'"') ?>
	<?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
	<ul>
		<li aria-hidden="true" >
			<dl data-grid>
				<dt>Touren</dt>
				<dd>Name</dd>
				<dd>Datum</dd>
				<dd>Tags</dd>
			</dl>
		</li>

		<?php foreach($content as $item): ?>
			<li <?php if($page->id() === $item->id()): ?>hidden<?php endif ?>>
				<a href="<?= $item->url(); ?>">
					<dl data-grid role="group">
						<dt>Name:</dt>
						<dd data-content="title"><span><?= $item->title() ?></span></dd>
						<dd data-content="date"><span><?= $item->date()->toDate('m/Y') ?></span></dd>
						<dd data-content="tags"><span></span></dd>
					</dl>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</div>
