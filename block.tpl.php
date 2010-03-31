<?php
// $Id: block.tpl.php,v 1.4 2009/08/09 07:21:33 posco Exp $

/**
 * @file
 * Base block template file for the OOCSS theme.
 *
 * For a list of variables available to you in this template
 * view: http://api.drupal.org/api/file/modules/system/block.tpl.php/6.
 */
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="mod block basic nicole">
  <b class="top"><b class="tl"></b><b class="tr"></b></b>
  <div class="inner">
    <?php if (!empty($block->subject)): ?>
      <div class="hd">
        <h4><?php print $block->subject ?></h4>
      </div>
    <?php endif;?>
    <div class="bd">
      <?php print $block->content ?>
    </div>
  </div>
  <b class="bottom"><b class="bl"></b><b class="br"></b></b>
</div>