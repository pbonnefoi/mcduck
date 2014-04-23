<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <!-- Header -->
  <?php if (drupal_is_front_page()): ?>
    <section id="header">
      <header>
        <?php if ($site_name): ?>
          <h1>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
          </h1>
        <?php endif; ?>
        <ul class="icons">
          <li><a href="https://twitter.com/Pierre_Bonnefoi" class="fa fa-twitter solo" target="_blank"><span>Twitter</span></a></li>
          <!-- <li><a href="https://www.facebook.com/bonnefoi.pierre" class="fa fa-facebook solo" target="_blank"><span>Facebook</span></a></li> -->
          <li><a href="https://plus.google.com/+PierreBONNEFOI/posts" class="fa fa-google-plus solo" target="_blank"><span>Google+</span></a></li>
          <!-- <li><a href="http://www.pinterest.com/pbonnefoi/" class="fa fa-pinterest solo"><span>Pinterest</span></a></li> -->
          <li><a href="http://www.linkedin.com/in/pierrebonnefoi" class="fa fa-linkedin solo"><span>LinkedIn</span></a></li>
          <li><a href="https://drupal.org/user/1319492" class="fa fa-tint solo"><span>Drupal</span></a></li>
        </ul>
        <?php print render($page['header']); ?>
        <br />
        <a href="#about" class="arrow scrolly scrolly-centered"></a>
      </header>
    </section>
  <?php else: ?>
    <section id="header-not-front" class="fixed">
      <header>
        <?php print render($page['header']); ?>
        <ul class="icons">
          <li><a href="https://twitter.com/Pierre_Bonnefoi" class="fa fa-twitter solo" target="_blank"><span>Twitter</span></a></li>
          <!-- <li><a href="https://www.facebook.com/bonnefoi.pierre" class="fa fa-facebook solo" target="_blank"><span>Facebook</span></a></li> -->
          <li><a href="https://plus.google.com/+PierreBONNEFOI/posts" class="fa fa-google-plus solo" target="_blank"><span>Google+</span></a></li>
          <!-- <li><a href="http://www.pinterest.com/pbonnefoi/" class="fa fa-pinterest solo"><span>Pinterest</span></a></li> -->
          <li><a href="http://www.linkedin.com/in/pierrebonnefoi" class="fa fa-linkedin solo"><span>LinkedIn</span></a></li>
        </ul>
      </header>
    </section>
  <?php endif ?>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div>

  </div>

  <?php print render($page['footer']); ?>

</div>
