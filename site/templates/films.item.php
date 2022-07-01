<?php
 /*
	*
	* @info Films item page template
	* @path site/templates/films.item.php
	* @date 20220529
	*
	*/
?>

<?php snippet('head') ?>

<main data-grid >
	<header
		data-banner-type="<?= $page->bannerType()->or('logo') ?>"
		data-flex
	>
		<h1 hidden><?= $site->heading() ?></h1>
		<h2 data-flex>
			<?php if($page->uid() == 'inklusion'): ?>
				<?= asset('assets/images/tagedraussen-fuer-alle-logo-'.$kirby->language()->code().'.svg')->read() ?>
			<?php else: ?>
				<?= asset('assets/images/tagedraussen-logo-'.$kirby->language()->code().'.svg')->read() ?>
			<?php endif ?>
			<span>
				<?= $page->subheading()->kti() ?>
			</span>
		</h2>
		<?php
			switch ( $page->bannerType()) {
				case "image":
					snippet('blocks/image', [
						'block' => $page->bannerImage(),
					]);
					break;
				case "video":
					snippet('blocks/video', [
						'block'  => $page->bannerVideo(),
						'poster' => $page->poster(),
					]);
					break;
				default:
			}
		?>
	</header>
	<aside data-flex>
		<a
			href="https://alpenverein.at/jugend/"
			rel="me"
			target="_blank"
		>
			<?php $logo = asset('assets/images/alpenvereinsjugend-wordmark.svg') ?>
			<img alt="Signet <?= t('oeavjugend') ?>" src="<?= $logo->url() ?>" width="<?= $logo->width() ?>" height="<?= $logo->height() ?>" oncontextmenu="return false" draggable="false">
		</a>
	</aside>
	<?php snippet('navigation') ?>
	<?php snippet('contents', []) ?>
	<?php snippet('blocks/cardlets', ['content' => $page->sibilings()->listed()]) ?>
	<?php snippet('footer') ?>
</main>

<?php snippet('foot') ?>
