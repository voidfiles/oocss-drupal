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
	<?php if ($logo): ?>
	<style type="text/css" media="screen">
		.siteLogo { background: url(<?php echo $logo; ?>) no-repeat top left;}
	</style>
	<?PHP endif;?>
</head>

<body>
	<div class="page liquid liquidLimits">
		<div class="head">
		<!-- Logo -->
			<div class="line">
				<div class="leftCol size1of3">
					<a class="siteLogo h1" href="<?php echo check_url($front_page); ?>" title="<?php echo check_plain($site_name); ?>"><?php echo check_plain($site_name); ?></a>
					<?php if ($site_slogan): ?>
						<span class="siteSlogan h4"><?php echo $site_slogan; ?></span>
					<?php endif ?>
				</div>
				<div class="rightCol size2of3">
					<?php if (isset($primary_links) && !empty($primary_links)): ?>
					<?php print theme('links', $primary_links, array('class' => 'horzList primaryLinks')) ?>
					<?php endif; ?>
					<?php if ($search_box): ?>
					<?php print $search_box; ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- Search Box -->
	        

	        

			<!-- Primary Links -->


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
		<?php if ($subHead): ?>
    	<div class="subHead line">
			<?php if ($is_front && $mission): ?>
				<div class="mod mission pop sommers">
					<div class="bd">
						<?php print $mission; ?>
					</div>
				</div>
        	<?php endif; ?>
        	<!-- Help -->
        	<?php if ($help): ?>
          		<?php print $help; ?>
        	<?php endif; ?>
        
        	<!-- Drupal Messages -->
        	<?php if ($show_messages && $messages): ?>
          		<?php print $messages; ?>
        	<?php endif; ?>
			<?php echo $subHead; ?>
		</div>
		<?php endif;?>
		<div class="body">
		<!-- Left Region -->
			<?php if ($title): ?>
          		<h1 class="pageTitle"><?php print $title; ?></h1>
        	<?php endif; ?>
	        <!-- Breadcrumbs -->
				<?php if ($breadcrumb): ?>
					<?php #print $breadcrumb; ?>
				<?php endif; ?>
        	<!-- Primary Tabs -->
        	<?php if ($tabs): ?> 
          		<?php print $tabs; ?>
        	<?php endif; ?>
        
        	<!-- Secondary Tabs -->
        	<?php if ($tabs2): ?> 
          		<?php print $tabs2; ?>
        	<?php endif; ?>
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

 
        
        	<!-- Content Region -->
        	<?php print $content; ?>
        
        
      		</div>
    	</div>
    
    	<?php if ($footer || $footer_message): ?>
      	<div class="foot">
        	<?php if ($footer_message): ?>
          	<div class="mod footerMessage">
            	<?php print $footer_message; ?>
            </div>
        	<?php endif; ?>

        	<!-- Footer Region -->
        	<?php print $footer ?>
      	</div>
    	<?php endif; ?>  
  </div>
	
	<?php print $scripts ?>
	<?php print $closure ?>
	<script type="text/javascript">
	//<![CDATA[
	(function() {
		var links = document.getElementsByTagName('a');
		var query = '?';
		for(var i = 0; i < links.length; i++) {
		if(links[i].href.indexOf('#disqus_thread') >= 0) {
			query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
		}
		}
		document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/alexkessinger/get_num_replies.js' + query + '"></' + 'script>');
	})();
	//]]>
	</script>
</body>

</html>
