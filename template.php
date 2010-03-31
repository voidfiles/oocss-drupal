<?php
// $Id: template.php,v 1.4 2009/08/24 01:38:25 posco Exp $

/**
 * @file
 * Provide theme function overrides for the OOCSS base theme.
 */

// TODO: Add admin theme functions. Determine which theme functions below
// need to be overrided.

/**
 * Implemention hook_theme().
 */
function oocss_theme() {
  return array(
    'oocss_mod' => array(
      'arguments' => array('bd' => NULL, 'hd' => NULL, 'ft' => NULL, 'attributes' => array()),
    ),
  );
}

/**
 * Return a themed OOCSS module.
 *
 * @param $bd
 *   Required. The HTML or text that goes into div.bd of an OOCSS module.
 * @param $hd
 *   Optional. The HTML or text that goes into div.hd of an OOCSS module.
 * @param $ft
 *   Optional. The HTML or text that goes into div.ft of an OOCSS module.
 * @param $attributes
 *   Optional. An associative array that contains HTML attributes for the opening div
 *   tag in the OOCSS module.
 *
 *   For example:
 * 
 *   <?php
 *     $attributes = array(
 *       'id' => 'my-unique-id',
 *       'class' => 'complex customMod',
 *       'style' => 'color: red;',
 *     );
 *   ?>
 *
 *   Note: The 'mod' class is automatically added and will always be first.
 *
 * @ingroup themeable
 */
function oocss_oocss_mod($bd = NULL, $hd = NULL, $ft = NULL, $attributes = array()) {
  if (isset($attributes['class'])) {
    $attributes['class'] = 'mod '. $attributes['class'];
  }
  else {
    $attributes['class'] = 'mod';
  }

  $oocss_mod = '<div ';
  foreach ($attributes as $attribute => $value) {
    $oocss_mod .= $attribute .'="'. $value .'" ';
  }
  // Remove trailing space char and end open div
  $oocss_mod = trim($oocss_mod);
  $oocss_mod .= '>';

  $oocss_mod .= '<b class="top"><b class="tl"></b><b class="tr"></b></b>';
  $oocss_mod .= '<div class="inner">';

  if (isset($hd)) {
    $oocss_mod .= '<div class="hd">'. $hd .'</div>';
  }

  $oocss_mod .= '<div class="bd">'. $bd .'</div>';

  if (isset($ft)) {
    $oocss_mod .= '<div class="ft">'. $ft .'</div>';
  }

  $oocss_mod .= '</div>';
  $oocss_mod .= '<b class="bottom"><b class="bl"></b><b class="br"></b></b>';
  $oocss_mod .= '</div>';
  
  return $oocss_mod;
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
  $vars['tabs2'] = menu_secondary_local_tasks();
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' » ', $breadcrumb) .'</div>';
  }
}

/**
 * Return a themed help message.
 *
 * @return a string containing the helptext for the current page.
 */
function phptemplate_help() {
  if ($help = menu_get_active_help()) {
    return '<div class="help">'. $help .'</div>';
  }
}

/**
 * Return a themed submenu, typically displayed under the tabs.
 *
 * @param $links
 *   An array of links.
 */
function phptemplate_submenu($links) {
  return '<div class="submenu">'. implode(' | ', $links) .'</div>';
}

/**
 * Return a themed marker, useful for marking new or updated
 * content.
 *
 * @param $type
 *   Number representing the marker type to display
 * @see MARK_NEW, MARK_UPDATED, MARK_READ
 * @return
 *   A string containing the marker.
 */
function phptemplate_mark($type = MARK_NEW) {
  global $user;
  if ($user->uid) {
    if ($type == MARK_NEW) {
      return ' <span class="marker">'. t('new') .'</span>';
    }
    else if ($type == MARK_UPDATED) {
      return ' <span class="marker">'. t('updated') .'</span>';
    }
  }
}

/**
 * Return a themed list of items.
 *
 * @param $items
 *   An array of items to be displayed in the list. If an item is a string,
 *   then it is used as is. If an item is an array, then the "data" element of
 *   the array is used as the contents of the list item. If an item is an array
 *   with a "children" element, those children are displayed in a nested list.
 *   All other elements are treated as attributes of the list item element.
 * @param $title
 *   The title of the list.
 * @param $type
 *   The type of list to return (e.g. "ul", "ol")
 * @param $attributes
 *   The attributes applied to the list element.
 * @return
 *   A string containing the list output.
 */
function phptemplate_item_list($items = array(), $title = NULL, $type = 'ul', $attributes = NULL) {
  $output = '<div class="item-list">';
  if (isset($title)) {
    $output .= '<h3>'. $title .'</h3>';
  }

  if (!empty($items)) {
    $output .= "<$type". drupal_attributes($attributes) .'>';
    $num_items = count($items);
    foreach ($items as $i => $item) {
      $attributes = array();
      $children = array();
      if (is_array($item)) {
        foreach ($item as $key => $value) {
          if ($key == 'data') {
            $data = $value;
          }
          elseif ($key == 'children') {
            $children = $value;
          }
          else {
            $attributes[$key] = $value;
          }
        }
      }
      else {
        $data = $item;
      }
      if (count($children) > 0) {
        $data .= theme_item_list($children, NULL, $type, $attributes); // Render nested list
      }
      if ($i == 0) {
        $attributes['class'] = empty($attributes['class']) ? 'first' : ($attributes['class'] .' first');
      }
      if ($i == $num_items - 1) {
        $attributes['class'] = empty($attributes['class']) ? 'last' : ($attributes['class'] .' last');
      }
      $output .= '<li'. drupal_attributes($attributes) .'>'. $data ."</li>\n";
    }
    $output .= "</$type>";
  }
  $output .= '</div>';
  return $output;
}

/**
 * Returns code that emits the 'more help'-link.
 */
function phptemplate_more_help_link($url) {
  return '<div class="more-help-link">'. t('[<a href="@link">more help...</a>]', array('@link' => check_url($url))) .'</div>';
}

/**
 * Return code that emits an feed icon.
 *
 * @param $url
 *   The url of the feed.
 * @param $title
 *   A descriptive title of the feed.
  */
function phptemplate_feed_icon($url, $title) {
  if ($image = theme('image', 'misc/feed.png', t('Syndicate content'), $title)) {
    return '<a href="'. check_url($url) .'" class="feed-icon">'. $image .'</a>';
  }
}

/**
 * Returns code that emits the 'more' link used on blocks.
 *
 * @param $url
 *   The url of the main page
 * @param $title
 *   A descriptive verb for the link, like 'Read more'
 */
function phptemplate_more_link($url, $title) {
  return '<div class="more-link">'. t('<a href="@link" title="@title">more</a>', array('@link' => check_url($url), '@title' => $title)) .'</div>';
}