<?php
 /*
  *
  * @info Simple page template
  * @path site/templates/simple.php
  * @date 20220427
  *
  */
?>

<?php snippet('head') ?>

<main data-grid>

	<?php snippet('header') ?>

	<nav data-flex>
		<a href="<?= page('startseite')->url() ?>">‹ <?= t('goBackHome') ?></a>
	</nav>

	<?php snippet('contents') ?>

	<?php snippet('footer') ?>

</main>

<?php snippet('foot') ?>
