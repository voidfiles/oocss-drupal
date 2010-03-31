<?php

/**
 * Implementation of hook_panels_layouts().
 */
function oocss_2ColLeftDynamic_panels_layouts() {
  $items['2ColLeftDynamic'] = array(
    'title' => t('two col, left dynamic, right static'),
    'icon' => '2ColLeftDynamic.png',
    'theme' => '2ColLeftDynamic',
    'css' => '2ColLeftDynamic.css',
    'panels' => array(
      'top' => t('Top'),
      'left' => t('Left side'),
      'right' => t('Right side'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}
