<?php
 /*
  *
  * @info Build virtual pages from an imported RSS feed
  * @path site/models/rssfeed.php
  * @date 20220623
  *
  */

class RssfeedPage extends Page {

  public function children()
  {
    $results = [];
    $pages   = [];

    $request = Remote::get('https://www.alpenvereinsjugend.blog/feed/');

    // if the request was sucessfully, parse feed as $results
    if ($request->code() === 200) {
      $results = Xml::parse($request->content());
    }

    // if we have any results, create the child page props for each result
    if (count($results) > 0) {
      foreach ($results['channel']['item'] as $item) {
        $pages[] = [
          'slug'     => Str::slug($item['title']),
          'template' => 'feeditem',
          'model'    => 'feeditem',
          'content'  => [
            'title'       => $item['title'],
            'date'        => $item['pubDate'] ?? '',
            'link'        => $item['link'] ?? '',
          ]
        ];
      }
    }

    // create a pages collection for the child pages
    return Pages::factory($pages, $this);
  }
}
