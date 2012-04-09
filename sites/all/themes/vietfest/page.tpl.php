<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<?php include 'includes/top-nav.php'; ?>

<div id="wrapper">
    
    <?php include 'includes/site-header.php'; ?>
    
	<?php if ($page['highlighted']): ?>
		<div class="<?php print ns('container-12', $page['header'], 7); ?>">
			<?php print render($page['highlighted']); ?>
		</div>
	<?php endif; ?>

	<div class="main-content-container container-12 clearfix">
    	<div class="grid-12 clearfix">
	       <div class="content-box">
	        
            <?php print $messages; ?>
            <?php print render($title_prefix); ?>
            <?php print render($title_suffix); ?>      
            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            
                <?php if ($title): ?>
                  <h2 class="title" id="page-title"><?php print $title; ?></h2>
                <?php endif; ?>
    			<?php print render($page['content']); ?>
    			<style type="text/css">
            
        </style>
    			
    		</div>
    		    	
	    </div>
	</div><!-- end .main-content-container -->

    <?php include 'includes/site-footer.php'; ?>
    
</div> <!-- end #wrapper -->
