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
  <article id="photography" class="container box style1 <?php print render($content['field_position']); ?> node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="image full">
      <?php print render($content['field_image']); ?>
    </div>
    <div class="inner">
      <header>
        <h2><?php print $node->title; ?></h2>
      </header>
      <?php print render($content['body']); ?>
    </div>
  </article>
</section>
<?php print render($content['field_block_reference']); ?>
