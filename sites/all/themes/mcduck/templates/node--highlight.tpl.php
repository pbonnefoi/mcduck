<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<section class="highlight" data-id="<?php print render($content['field_section_id']); ?>">
  <article id="first" class="container style1 right node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($content['field_image']); ?>
    <div class="inner">
      <header>
        <h2><?php print $node->title; ?></h2>
      </header>
      <?php print render($content['body']); ?>
    </div>
  </article>
</section>
