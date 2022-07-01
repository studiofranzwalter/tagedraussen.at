<?php
 /*
	*
	* @info Video block
	* @path site/snippets/blocks/video.php
	* @date 20220627
	*
	*/

	$content   = $block ?? $content ?? '';
	$video     = $content->videoPage()->toPage() ?? $content->sources()->toFiles() ?? '';
	$poster    = $page->bannerVideoPoster()->toFile() ?? $video->poster()->toFile() ?? null;
	$subtitles = $video->subtitles()->toFiles();

	$animation = $animation ?? '';
	$heading   = $heading ?? '';
	$modifier  = $modifier ?? '';

?>

<figure
	data-block="video"
	<?php e($animation, 'data-animation="'.$animation.'"') ?>
	<?php e($modifier, 'data-modifier="'.$modifier.'"') ?>
>
	<video
		controls
		crossorigin
		draggable="false"
		id="mux-<?= $video->muxPublicId() ?>"
		oncontextmenu="return false"
		playsinline
		poster="<?= $poster->resize(1000)->url() ?>"
		preload="none"
		height="720"
		width="976"
	>

		<?php // Apply local video files if exist ?>
		<?php if($video->sources()->isNotEmpty()): ?>
			<?php foreach($video->sources() as $source): ?>
				<source src="<?= $source->url() ?>" type="<?= $source->mime() ?>">
			<?php endforeach ?>

			<?php // Apply fallback information ?>
			<!-- <a href="<?= $video->sources()->toFiles()->filterBy('mime', 'video/mp4')->first()->url() ?>" download="<?= $video->title()?>.mp4"><?= t('downloadFile') ?></a> -->

		<?php endif ?>

		<?php // Apply subtitles if exist ?>
		<?php if ($subtitles->isNotEmpty()): ?>
			<?php foreach($subtitles as $subtitle): ?>
				<track kind="subtitles" label="<?= $subtitle->label() ?>" src="<?= $subtitle->url() ?>" srclang="<?= $subtitle->srclang() ?>" <?php e($subtitle->onByDefault() == true, 'default') ?> >
			<?php endforeach ?>
		<?php endif ?>

	</video>

	<?php // Use mux.com M3U8 playlist if exists ?>
	<?php if($video->muxPublicId() != ""): ?>

		<script type="module">
			window.addEventListener("load", function () {

				const video = document.querySelector('#mux-<?= $video->muxPublicId() ?>');
				const src = 'https://stream.mux.com/<?= $video->muxPublicId() ?>.m3u8';
				if (video.canPlayType('application/vnd.apple.mpegurl')) {
					video.src = src;
					hls.stopLoad();
				} else if (Hls.isSupported()) {
					const hls = new Hls({
						maxBufferLength: 0.1,
						backBufferLength: 0,
						maxBufferSize: 10 * 1000 * 1000,
						lowLatencyMode: true,
						debug: false,
					});
					hls.loadSource(src)
					hls.attachMedia(video);
				} else {
					console.error("No support for MSE");
				}
			});
		</script>
	<?php endif ?>

	<?php // Apply caption if exists ?>
	<?php if($page->bannerCaption()->isNotEmpty()): ?>
		<figcaption>
			<?= $page->bannerCaption() ?>
		</figcaption>
	<?php endif ?>

</figure>
