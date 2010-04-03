<?php
// $Id: node.tpl.php,v 1.4 2009/08/09 07:21:33 posco Exp $

/**
 * @file
 * Base node template file for the OOCSS theme.
 *
 * For a list of variables available to you in this template
 * view: http://api.drupal.org/api/file/modules/node/node.tpl.php/6.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="node <?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' nodeUnpublished'; } ?> complex excerpt">
  <div class="inner">
    <?php if ($page == 0): ?>
      <div class="hd">
        <h1><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h4>
      </div>
    <?php endif; ?>
    <div class="bd">
      <?php if ($picture || $submitted): ?>
      <div class="line">
          <?php if ($picture): ?>
            <div class="leftCol">
              <?php print $picture; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if ($terms): ?>
        <?php print $terms; ?>
      <?php endif; ?>
      
      <?php print $content; ?>
      <?php if ($submitted): ?>
          <p><?php print $submitted; ?></p>
      <?php endif; ?>
    </div>
    <div class="ft">
      <?php print $links; ?>
    </div>
  </div>
</div>