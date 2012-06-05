<div id="site-header" class="container-12">
    <div class="grid-6">
       <h1 id="logo"><a href="<?php print $front_page;?>" title="<?php print t('Home'); ?>" rel="home" ><?php print $site_name; ?></a></h1>
       <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
    </div>
    
    <div id="search-box" class="grid-6">
        <!--
        <a id="ticket-link" href="<?php print $base_path;?>tickets" title="Purchase tickets">Buy Ticket</a>
        -->
        <?php if ($page['search_box']): ?>
        <?php print render($page['search_box']); ?>
        <?php endif; ?>
    </div>
</div><!-- end #site-header -->

<div class="clearfix"></div>

<?php if ($page['highlighted']): ?>
    <div class="<?php print ns('container-12', $page['header'], 7); ?>">
        <?php print render($page['highlighted']); ?>
    </div>
<?php endif; ?>

<div class="main-menu-container container-12 clearfix">
    <?php print render($vietfest_menu); ?>
</div><!-- end .main-nav-container -->