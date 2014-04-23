<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<section class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <header>
    <h3><?php print render($content['field_university_name']); ?></h3>
    <p><?php print render($content['field_degree_name']); ?> - <?php print render($content['field_place']); ?> - <?php print render($content['field_working_dates']); ?></p>
    <?php print render($content['field_company_logo']); ?>
  </header>
  <?php print render($content['body']); ?>
</section>
<hr />
