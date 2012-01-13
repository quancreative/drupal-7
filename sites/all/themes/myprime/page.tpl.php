<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="wrapper">

	<div id="site-header" class="container-12">
		<div id="branding" class="grid-3">
			<?php if ($linked_logo_img): ?>
				<span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
			<?php endif; ?>
			<?php if ($linked_site_name): ?>
				<h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
			<?php endif; ?>
			<?php if ($site_slogan): ?>
				<div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
			<?php endif; ?>
		</div>


		<?php if ($page['header']): ?>


			<div id="header-region" class="grid-9">
				<?php print render($page['header']); ?>
				<?php if ($main_menu_links): ?>
					<div id="site-menu" class="grid-12">
						<?php print $main_menu_links; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div><!-- end #site-header -->

	<?php if ($page['highlighted']): ?>
		<div id="highlighted" class="<?php print ns('container-12', $page['header'], 7); ?>">
			<?php print render($page['highlighted']); ?>
		</div>
	<?php endif; ?>

	<div id="main" class="container-12 clearfix">
		<?php print render($title_prefix); ?>
		<?php if ($title): ?>
			<h1 class="title" id="page-title"><?php print $title; ?></h1>
		<?php endif; ?>
		<?php print render($title_suffix); ?>      
		<?php if ($tabs): ?>
			<div class="tabs"><?php print render($tabs); ?></div>
		<?php endif; ?>
		<?php print $messages; ?>
		<?php print render($page['help']); ?>

		<div id="main-content" class="region clearfix">
			<?php print render($page['content']); ?>
		</div>

		<?php if ($page['sidebar_first']): ?>
			<div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
				<?php print render($page['sidebar_first']); ?>
			</div>
		<?php endif; ?>

		<?php if ($page['sidebar_second']): ?>
			<div id="sidebar-right" class="column sidebar region grid-3">
				<?php print render($page['sidebar_second']); ?>
			</div>
		<?php endif; ?>
		<?php print $feed_icons; ?>
	</div><!-- end #main -->


	<div id="footer" class="container-12 clearfix">
		<?php if ($page['footer'])
		{
			print render($page['footer']);
		}; ?>
	</div>

</div> <!-- end #wrapper -->
