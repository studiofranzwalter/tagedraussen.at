<?php
 /*
		*
		* @info Collection of all screenings
		* @path site/collections/screenings.php
		*
		*/

return function ($site) {
	return $site->find('gespraeche')->children()->sortBy('date', 'asc')
		;
};
