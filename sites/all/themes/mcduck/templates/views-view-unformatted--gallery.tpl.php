<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row flush">
  <?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
    <?php if (($id + 1) % 4 == 0): ?>
      <div class="row flush">
      </div>
    <?php endif ?>
  <?php endforeach; ?>
</div>
