<?php
 /*
	*
	* @info Feed [alpenvereinsjugend.blog] page template
	* @path site/templates/avblog-feed.php
	* @date 20220626
	*
	*/
?>

<?php snippet('head') ?>

<main>

	<div class="feed">
		<?php foreach ($page->children()->sortBy('date', 'desc') as $item): ?>
			<div>
				<a href="<?= $item->url() ?>">
					<h2><?= $item->title() ?></h2>
					<time><?= $item->date()->toDate('d F Y') ?></time>
				</a>
			</div>
		<?php endforeach ?>
	</div>

</main>

<?php snippet('footer') ?>
