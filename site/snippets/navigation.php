<?php
 /*
	*
	* @info Site navigation
	* @path site/snippets/menus/navigation.php
	* @date 20220704
	*
	*/

	$items = $site->navigation()->toPages();

?>

<nav>
	<div data-flex>
		<?php foreach ($items as $item) : ?>
			<a href="<?= $item->url() ?>"<?php if(str_contains($page->uri(), $item->slug())){ echo ' data-state="active"';} ?> title="<?= $item->title() ?>"><?= $item->title() ?></a>
		<?php endforeach ?>
		<?php foreach($kirby->languages() as $language): ?>
			<a lang="<?= $kirby->language() ?>" <?php e($kirby->language() === $language, 'hidden') ?> href="<?php e($page->translation($language->code())->exists(), $page->url($language->code()), page($kirby->option('home'))->url($language->code())) ?>"><?php echo $language->name(); ?></a>
		<?php endforeach ?>
	</div>
</nav>
