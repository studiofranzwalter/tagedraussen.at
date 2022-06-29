<?php
 /*
  *
  * @info Screenings Collection
  * @path site/collections/screenings.php
  *
  */

return function ($site) {
  return $site
    ->find('vorfuehrungen')
    ->children()
    // ->listed()
    ->template('screenings.item')
    ->sortBy('date', 'asc')
    // ->filterBy('date', 'date <', 'today')
  ;
};
