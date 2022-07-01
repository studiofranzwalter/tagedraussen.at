<?php
 /*
	*
	* @info RSS feed
	* @path site/snippets/rssfeed.php
	* @date 20220622
	*
	*/
?>

<h3 data-block="heading">Aktuelle Beiträge aus dem Alpenvereinsjugend-Blog</h3>

<ol data-block="feed">
	<?php foreach (page('rssfeed')->children() as $item): ?>
		<li>
			<a href="<?= $item->link() ?>">
				<?= $item->title() ?>
			</a>
		</li>
	<?php endforeach ?>
</ol>
