<?php
 /*
	*
	* @info German language settings
	* @path site/languages/de.php
	*
	*/

return array (
	'code' => 'de',
	'default' => true,
	'direction' => 'ltr',
	'locale' => 'de_DE',
	'name' => 'Deutsch',
	'slug' => [
		'ä' => 'ae',
		'ö' => 'oe',
		'ß' => 'sz',
		'ü' => 'ue'
	],
	'slugs.maxlength' => 120,
	'smartypants' => [
		'doublequote.open'  => '&#8222;',
		'doublequote.close' => '&#8220;',
		'singlequote.open'  => '&#8218;',
		'singlequote.close' => '&#8216;'
	],
	'translations' => Yaml::decode(F::read(kirby()->root('languages'). DS . 'de.yml')),
	'url' => option('language.url.de'),
);
