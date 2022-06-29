<?php snippet('header') ?>
<?php snippet('intro') ?>

<ul class="grid" style="--gutter: 1.5rem">
  <?php foreach ($page->children() as $child): ?>
  <li class="column" style="--columns: 4">
    <a href="<?= $child->url() ?>">
      <?php if ($image = $child->image()) : ?>
      <figure>
        <span class="img" style="--w:4;--h:5">
          <?= $image->crop(500,600) ?>
        </span>
      </figure>
      <?php endif; ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>
