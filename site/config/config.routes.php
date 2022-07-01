<?php
 /*
	*
	* @info Custom routes
	* @path site/config/config.routes.php
	* @date 20220506
	*
	*/

return [

	[
		'pattern' => 'logout',
		'action'  => function() {
			if ($user = kirby()->user()) {
				$user->logout();
			}
			go('/');
		}
	],

];
