<?php
 /*
  *
  * @info Custom hooks for the site
  * @path site/config/config.hooks.php
  * @date 20220626
  *
  */


return [

  /*---------- Write addition metadata to the corresponding text file  ----------*/

  'file.create:before' => function($file, $upload) {
      $filename = $upload->filename();
      $filename = substr($filename, strpos($filename, ".") + 1);
      kirby()->session()->set('ofilename', $filename);
  },

  'file.create:after' => function($file) {
    $filename = kirby()->session()->get('ofilename');
    $file->update([
      'originalFilename' => $filename
    ]);
    if($file->template()== 'image') {
      $file->update([
        'originalFilename' => $filename,
        'originalAspectRatio' =>  str_replace(',', '.', round(($file->width() / $file->height()),1)),
        'originalIntrinsicSize' => $file->width().'x'.$file->height(),
        'originalHeight' =>  $file->height(),
        'originalWidth' =>  $file->width(),
        'originalOrientation' => $file->orientation(),
      ]);
    }
  },

  'file.update:after' => function ($newFile, $oldFile) {
    if($oldFile->template()== 'image') {
    $newFile->update([
      'originalAspectRatio' =>  str_replace(',', '.', round(($oldFile->width() / $oldFile->height()),1)),
      'originalIntrinsicSize' => $oldFile->width().'x'.$oldFile->height(),
      'originalHeight' =>  $oldFile->height(),
      'originalWidth' =>  $oldFile->width(),
      'originalOrientation' => $oldFile->orientation(),
    ]);
    }
  },


  /*----------  Document user logins  ----------*/

  'user.login:after' => function ($user) {
    $user->update([
      'lastLogin' => date("m.d.Y-H:i:s"),
    ]);
  },

  
  /*----------  Convert Kirby tags  ----------*/

  'kirbytags:before' => function ($text, $data, $options) {
    return Str::replace($text,
      ["(-)", "(+)", "(*)"],
      ["&shy;", "&nbsp;", "&midast;"]);
  },


  /*----------  Hook for pagetree plugin  ----------*/

  'page.create:after' => function ($page) {
      buildPageTree($page);
  },

];
