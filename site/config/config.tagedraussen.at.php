<?php
 /*
	*
	* @info Production config on Uberspace
	* @path site/config/config.tagedraussen.at.php
	* @date 20220510
	*
	*/

return [

	'cache' => [
		'pages'   => ['active' => true],
		'plugins' => ['active' => true]
	],

	'debug' => false,
	'genxbe.ray.enabled' => false,

	'languages.detect' => false,
	'language.url.de'  => '/',
	'language.url.en'  => '/en',

];
