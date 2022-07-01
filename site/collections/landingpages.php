<?php
 /*
	*
	* @info Collection of landingpages
	* @path site/collections/core.php
	*
	*/

return function ($site) {
	return $site->find('goto')->children()->sortBy('title', 'asc');
};
