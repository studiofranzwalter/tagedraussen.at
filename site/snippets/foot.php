<?php
 /*
	*
	* @info Foot snippet
	* @path site/snippets/foot.php
	* @date 20220627
	*
	*/
?>

<?php // snippet('clip-paths') ?>

<?= js([
	'assets/js/hls.light.min.js',
	'assets/js/quicklink.min.js',
	], ['defer' => ' ']); ?>

<?php if(url::host() == "tagedraussen.at"): ?>
	<script src="https://neon-honey.tagedraussen.at/script.js" data-site="FPCMUPRW" defer></script>
<?php endif ?>

</body>
<!-- Last modified: <?= $page->modified('Y-m-d') ?> -->
</html>
