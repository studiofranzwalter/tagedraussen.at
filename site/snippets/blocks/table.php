<?php 
 /*
  *
  * @info Table block
  * @path site/snippets/blocks/table.php
  * @date 20220624
  *
  * @status DRAFT
  *  
  */

  $content    = $block ?? $content ?? '';

  $animation  = $animation ?? '';
  $modifier   = $modifier ?? '';

?>

<?php 
$rows = $block->rows()->toStructure();
if($rows->isNotEmpty()):
?>
<table class="block-table">
  <tr>
    <th>Dish</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
  <?php foreach( $rows as $row): ?>
    <tr>
      <td><?= $row->dish()->html() ?></td>
      <td><?= $row->description()->html() ?></td>
      <td><?= number_format ( $row->price()->toFloat(), 2 , null, '.' ) ?></td>
    </tr>
  <?php endforeach ?>
</table>
<?php endif; ?>
