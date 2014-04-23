<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<section data-id="<?php print render($content['field_section_id']); ?>">
  <article class="container box style3 <?php print render($content['field_position']); ?> node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <header>
      <h2><?php print $node->title; ?></h2>
      <?php print render($content['body']); ?>
    </header>
    <?php print render($content['webform']); ?>
  </article>
</section>
