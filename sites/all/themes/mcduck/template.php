<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

// function mcduck_js_alter(&$javascript) {
//   global $theme;
//   if ($theme == 'mcduck') {
//     unset($javascript['misc/jquery.js']);
//   }
// }

// function mcduck_css_alter(&$css) {
//   global $theme;
//   if ($theme == 'mcduck') {
//     unset($css['sites/all/modules/contrib/webform/css/webform.css']);
//   }
// }

function mcduck_preprocess_node(&$vars) {
  $node = &$vars['node'];
  if ($node->type == 'photo') {
    $field_image = field_get_items('node', $node, 'field_image');
    $image = field_view_value('node', $node, 'field_image', $field_image[0], array('type' => 'image'));
    $vars['image_styled_url'] = image_style_url('image_web_resize', $image['#item']['uri']);
  }
  if ($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__' . $vars['view_mode'];
  }
}

function mcduck_menu_tree__main_menu($vars) {
  if (drupal_is_front_page()) {
    return '<ul id="main-menu" class="menu">' . $vars['tree'] . '</ul>';
  }
  else {
    return '<ul class="menu">' . $vars['tree'] . '</ul>';
  }
}

function mcduck_menu_link__main_menu($vars) {
  $element = $vars['element'];
  $sub_menu = '';

  $last = FALSE;
  if (in_array('last', $element['#attributes']['class'])) {
    $last = TRUE;
  }

  $element['#localized_options']['attributes']['class'][] = 'scrolly';
  // $element['#localized_options']['attributes']['class'][] = 'scrolly-centered';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $separator = $last ? '' : '<span>//</span>';
  $output = '#' . l($element['#title'], $element['#href'], $element['#localized_options']) . $separator;
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
