<?php
// $Id: comment.tpl.php,v 1.4 2009/08/09 07:21:33 posco Exp $

/**
 * @file
 * Base comment template file for the OOCSS theme.
 *
 * For a list of variables available to you in this template
 * view: http://api.drupal.org/api/file/modules/comment/comment.tpl.php/6.
 */
?>
<div class="mod noCorners comment <?php print ($comment->new) ? 'commentNew' : ''; print ' '. $status; print ' '. $zebra; ?>">
  <b class="top"><b class="tl"></b><b class="tr"></b></b>
  <div class="inner">
    <div class="hd">
      <h5><?php print $title; print ($comment->new) ? ' '. $new : ''; ?></h5>
    </div>
    <div class="bd">
      <? if ($picture): ?>
        <div class="leftCol size1of5">
          <?php print $picture ?>
        </div>
      <?php endif; ?>
      <div class="main">
        <?php if ($submitted): ?>
          <p class="submitted"><?php print $submitted; ?></p>
        <?php endif; ?>
        <?php print $content; ?>
      </div>
    </div>
  </div>
  <?php if ($signature || $links): ?>
    <div class="ft">
      <?php print $signature ?>
      <?php print $links ?>
    </div>
  <?php endif; ?>
  <b class="bottom"><b class="bl"></b><b class="br"></b></b>
</div>