<?php
 /*
  *
  * @info Head snippet
  * @path site/snippets/head.php
  * @date 20220628
  *
  */
?>

<!doctype html>
<html
	class="no-js"
	dir="ltr"
	lang="<?= $kirby->language() ?>"
	data-intended-template="<?= $page->intendedTemplate() ?>"
	data-parent="<?= $page->parents()->last() ?>"
	data-template="<?= $page->template() ?>"
	data-uid="<?= $page->uid() ?>"
>

<!-- Hi there, nice to meet you. -->
<!-- If you have any questions, feel free to write to me: -->
<!-- https://franzwalter.com/contact -->

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

	<script>
		document.documentElement.classList.remove('no-js');
		document.documentElement.classList.add('has-js');
	</script>

	<link rel="canonical" href="<?= $metaUrl ?>">

	<title><?= $metaTitle ?></title>

	<?= css('assets/css/site.min.css') ?>

	<?php if (file_exists($kirby->root('index') . '/assets/css/templates/' . $page->intendedTemplate().'.css')) {
		echo css('/assets/css/templates/' . $page->intendedTemplate().'.css');
	} ?>


	<meta content="<?= $metaAuthor ?>" name="author" >
	<meta content="<?= $metaDescription ?>" name="description" >
	<meta content="<?= $metaKeywords ?>" name="keywords">
	<meta content="<?= $metaRobots ?>" name="robots">

	<meta content="<?= $metaDescription ?>" property="og:description">
	<meta content="<?= $metaImage ?>" property="og:image" >
	<meta content="<?= $metaDescription ?>" property="og:image:alt">
	<meta content="<?= $metaTitle ?>" property="og:title">
	<meta content="<?= $metaUrl ?>" property="og:url">
	<meta content="website" property="og:type">

	<meta content="<?= $metaTitle ?>" property="twitter:title">
	<meta content="<?= $metaDescription ?>" property="twitter:description">
	<meta content="<?= $metaUrl ?>" property="twitter:url">

	<meta content="<?= $metaTitle ?>" name="apple-mobile-web-app-title">
	<meta content="telephone=no" name="format-detection">
	<meta content="watch" name="disabled-adaptations">

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Webpage",
			"name": "<?= $metaTitle ?>",
			"url": "<?= $metaUrl ?>",
			"logo": "<?= url('assets/favicons/favicon-512x512.png') ?>"
		}
	</script>

	<link rel="icon" href="<?= url('assets/favicons/favicon.ico') ?>">
	<link rel="apple-touch-icon" href="<?= url('assets/favicons/favicon-180x180.png') ?>">
	<link rel="icon" href="<?= url('assets/favicons/favicon.svg') ?>" type="image/svg+xml" sizes="any">

	<link rel="author" href="<?= url('.well-known/humans.txt') ?>">
	<link rel="manifest" href="<?= url('.well-known/site.webmanifest') ?>">

</head>
<body>
