<?php
 /*
  *
  * @info Footer snippet
  * @path site/snippets/footer.php
  * @date 20220621
  *
  */
?>

<footer>
  <div data-grid="auto">
    <div data-block="footerLinksInt" data-flex>
      <h4><?= t('information') ?></h4>
      <?php foreach ($site->footerLinksInt()->toPages() as $item) : ?>
        <a href="<?php echo $item->url(); ?>"><?php echo $item->title() ?></a>
      <?php endforeach ?>
    </div>
    <div data-block="footerLinksExt" data-flex>
      <h4><?= t('relatedLinks') ?></h4>
      <?php foreach ($site->footerLinksExt()->toStructure() as $item) : ?>
        <a href="<?php echo $item->link(); ?>"><?php echo $item->name() ?></a>
      <?php endforeach ?>
    </div>
    <div data-block="footerLinksSocial" data-flex>
      <h4><?= t('socialMedia') ?></h4>
      <?php foreach ($site->footerLinksSocial()->toStructure() as $item) : ?>
        <a href="<?php echo $item->link(); ?>"><?php echo $item->name() ?></a>
      <?php endforeach ?>
    </div>
  </div>
  <h3>
    &copy; 2019–<?= date("Y") ?><br>
    <a href="#" title="Zum Seitenbeginn">⇧</a>
  </h3>
</footer>
