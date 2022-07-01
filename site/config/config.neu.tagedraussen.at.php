<?php
 /*
	*
	* @info Staging config on Uberspace
	* @path site/config/config.neu.tagedraussen.at.php
	* @date 20220515
	*
	*/

return [

	'cache' => [
		'pages'   => ['active' => true],
		'plugins' => ['active' => true]
	],

	'debug' => true,
	'genxbe.ray.enabled' => false,
	'panel' => false,

	'languages.detect' => false,
	'language.url.de'  => '/',
	'language.url.en'  => '/en',

];
