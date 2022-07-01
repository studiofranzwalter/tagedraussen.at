<?php
 /*
	*
	* @info Positions page template
	* @path site/templates/positions.php
	* @date 20220623
	*
	*/
?>

<?php snippet('head') ?>

<main data-grid >

	<?php snippet('header') ?>
	<?php snippet('navigation') ?>
	<?php snippet('contents') ?>

	<?php if($page->uid() == 'haltung'): ?>
		<?php snippet('rssfeed') ?>
	<?php endif ?>

	<?php snippet('footer') ?>

</main>

<?php snippet('foot') ?>
