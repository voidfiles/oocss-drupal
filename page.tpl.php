<?php
// $Id: page.tpl.php,v 1.5 2009/08/09 07:21:33 posco Exp $

/**
 * @file
 * Base page template for the OOCSS theme.
 *
 * For a list of variables available to you in this template
 * view: http://api.drupal.org/api/file/modules/system/page.tpl.php/6.
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>

<body>
  <div class="page">
    <div class="head">
      <!-- Logo -->
      <div class="line">
        <?php if ($logo): ?>
          <div class="leftCol size1of3">
            <div class="mod noCorners">
              <b class="top"><b class="tl"></b><b class="tr"></b></b>
              <div class="inner">
                <div class="bd">
                  <?php
                    print '<a href="'. check_url($front_page) .'" title="'. check_plain($site_name) .'">';
                    print '<img src="'. check_url($logo) .'" alt="'. check_plain($site_name) .'" id="logo" />';
                    print '</a>';
                  ?>
                </div>
              </div>
              <b class="bottom"><b class="bl"></b><b class="br"></b></b>
            </div>
          </div>
        <?php endif; ?>
      
        <!-- Search Box -->
        <?php if ($search_box): ?>
          <div class="rightCol size1of3">
            <div class="unit <?php print $search_width; ?>">
              <div class="mod noCorners">
                <b class="top"><b class="tl"></b><b class="tr"></b></b>
                <div class="inner">
                  <div class="bd">
                    <?php print $search_box; ?>
                  </div>
                </div>
                <b class="bottom"><b class="bl"></b><b class="br"></b></b>
              </div>
            </div>
          </div>
        <?php endif; ?>
      
        <!-- Site title and slogan -->
        <?php if ($site_name || $site_slogan): ?>
          <div class="main">
            <div class="mod noCorners">
              <b class="top"><b class="tl"></b><b class="tr"></b></b>
              <div class ="inner">
                <div class="bd">
                  <?php if ($site_name): ?>
                    <h1><?php print $site_name; ?></h1>
                  <?php endif; ?>
      
                  <?php if ($site_slogan): ?>
                    <h2><?php print $site_slogan ?></h2>
                  <?php endif; ?>
                </div>
              </div>
              <b class="bottom"><b class="bl"></b><b class="br"></b></b>
            </div>
          </div>
        <?php endif; ?>
      </div>
      
      <!-- Primary Links -->
      <?php if (isset($primary_links) && !empty($primary_links)): ?>
        <?php print theme('links', $primary_links, array('class' => 'line horzList primaryLinks')) ?>
      <?php endif; ?>
      
      <!-- Secondary Links -->
      <?php if (isset($secondary_links) && !empty($secondary_links)): ?>
        <?php print theme('links', $secondary_links, array('class' => 'line horzList secondaryLinks')) ?>
      <?php endif; ?>
      
      <!-- Header Region -->
      <?php if ($header): ?>
        <div class="line">
          <?php print $header; ?>
        </div>
      <?php endif; ?>
    </div>
    
    <div class="body">
      <!-- Left Region -->
      <?php if ($left): ?>
        <div class="leftCol">
          <?php print $left; ?>
        </div>
      <?php endif; ?>
      
      <!-- Right Region -->
      <?php if ($right): ?>
        <div class="rightCol">
          <?php print $right; ?>
        </div>
      <?php endif; ?>
      
      <div class="main">
        <!-- Breadcrumbs -->
        <?php if ($breadcrumb): ?>
          <?php print $breadcrumb; ?>
        <?php endif; ?>
        
        <?php if ($is_front && $mission): ?>
          <div class="mod mission pop sommers">
            <b class="top"><b class="tl"></b><b class="tr"></b></b>
            <div class="inner">
              <div class="bd">
                <?php print $mission; ?>
              </div>
            </div>
            <b class="bottom"><b class="bl"></b><b class="br"></b></b>
          </div>
        <?php endif; ?>
        
        <?php if ($title): ?>
          <h3><?php print $title; ?></h3>
        <?php endif; ?>
        
        <!-- Primary Tabs -->
        <?php if ($tabs): ?> 
          <?php print $tabs; ?>
        <?php endif; ?>
        
        <!-- Secondary Tabs -->
        <?php if ($tabs2): ?> 
          <?php print $tabs2; ?>
        <?php endif; ?>
        
        <!-- Help -->
        <?php if ($help): ?>
          <?php print $help; ?>
        <?php endif; ?>
        
        <!-- Drupal Messages -->
        <?php if ($show_messages && $messages): ?>
          <?php print $messages; ?>
        <?php endif; ?>
        
        <!-- Content Region -->
        <?php print $content; ?>
        
        <div class="mod noCorners feedIcons">
          <b class="top"><b class="tl"></b><b class="tr"></b></b>
          <div class="inner">
            <div class="bd">
              <?php print $feed_icons; ?>
            </div>
          </div>
          <b class="bottom"><b class="bl"></b><b class="br"></b></b>
        </div>
      </div>
    </div>
    
    <?php if ($footer || $footer_message): ?>
      <div class="foot">
        <?php if ($footer_message): ?>
          <div class="mod noCorners footerMessage">
            <b class="top"><b class="tl"></b><b class="tr"></b></b>
            <div class="inner">
              <div class="bd">
                <?php print $footer_message; ?>
              </div>
            </div>
            <b class="bottom"><b class="bl"></b><b class="br"></b></b>
          </div>
        <?php endif; ?>

        <!-- Footer Region -->
        <?php print $footer ?>
      </div>
    <?php endif; ?>  
  </div>
  <?php print $closure ?>
</body>

</html>
