<?php
 /*
	*
	* @info Thumb config
	* @path site/config/config.routes.php
	* @date 20220418
	*
	*/

return [

	'quality' => 90,

	'srcsets' => [
		'default' => [
				'300w'  => ['width' => 300],
				'600w'  => ['width' => 600],
				'900w'  => ['width' => 900],
				'1200w' => ['width' => 1200],
				'1800w' => ['width' => 1800]
		],
		'avif' => [
				'300w'  => ['width' => 300,  'format' => 'avif'],
				'600w'  => ['width' => 600,  'format' => 'avif'],
				'900w'  => ['width' => 900,  'format' => 'avif'],
				'1200w' => ['width' => 1200, 'format' => 'avif'],
				'1800w' => ['width' => 1200, 'format' => 'avif']
		],
		'webp' => [
				'300w'  => ['width' => 300,  'format' => 'webp'],
				'600w'  => ['width' => 600,  'format' => 'webp'],
				'900w'  => ['width' => 900,  'format' => 'webp'],
				'1200w' => ['width' => 1200, 'format' => 'webp'],
				'1800w' => ['width' => 1200, 'format' => 'webp']
		],
	],

];
