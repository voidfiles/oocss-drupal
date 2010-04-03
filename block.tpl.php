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
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block basic ">
  <div class="inner">
    <?php if (!empty($block->subject)): ?>
      <div class="hd">
        <em class="h3"><?php print $block->subject ?></em>
      </div>
    <?php endif;?>
    <div class="bd">
      <?php print $block->content ?>
    </div>
  </div>
</div>