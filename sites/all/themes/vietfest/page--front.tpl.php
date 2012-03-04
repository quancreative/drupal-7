
<?php include 'includes/top-nav.php'; ?>

<div id="wrapper">
    
    <?php include 'includes/site-header.php'; ?>

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
            
                <div id="slider-group">
                    
                    <link rel="stylesheet" href="<?php print $directory;?>/css/nivo-slider/default.css" type="text/css" media="screen" />
                    <link rel="stylesheet" href="<?php print $directory;?>/css/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
                    <div class="slider-wrapper theme-default">
                        <div class="ribbon"></div>
                        <div id="slider" class="nivoSlider">
                            <a href="<?php print $front_page . "/event"; ?>"><img src="<?php print $directory;?>/images/home/slideshow/dragon.jpg" alt="VietFest Coming in May 2012" /></a>
                            <img src="<?php print $directory;?>/images/home/slideshow/1.png" alt="" />
                            <img src="<?php print $directory;?>/images/home/slideshow/3.png" alt="" />
                        </div>
                    </div>
                </div>
    
                <?php if ($title): ?>
                  <h2 class="title" id="page-title"><?php print $title; ?></h2>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                
            </div>
            
       </div> 
    </div><!-- end .main-content-container -->
    
    <div class="sponsor-container container-12 clearfix">
            
        <div class="grid-12 clearfix">
            <h2>Sponsors</h2>
       
            <div class="sponsor">
                <a href="#"><img src="<?php print $directory;?>/images/sponsors/nha_hang_tay_do.jpg" alt="Nha Hang Tay Do"/></a>
            </div>
            <div class="sponsor">
                <a href="http://www.wellsfargo.com"><img src="<?php print $directory;?>/images/sponsors/wellsfargo.jpg" alt="Wells Fargo"/></a>
            </div>
            <div class="sponsor">
                <a href="http://acnwellness.blogspot.com/"><img src="<?php print $directory;?>/images/sponsors/acn_wellness.jpg" alt="ACN Wellness Center"/></a>
            </div>
          
            <div class="sponsor">
                <a href="http://www.edencenter.com/"><img src="<?php print $directory;?>/images/sponsors/eden_center.jpg" alt="Eden Center"/></a>
            </div>
           
          </div>
        <div class="sponsor-container-footer"></div>
    </div><!-- end .sponsor-container -->

    <?php include 'includes/site-footer.php'; ?>
    
</div> <!-- end #wrapper -->

<script type="text/javascript" src="<?php print $directory;?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php print $directory;?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider(
        {
            pauseTime : 4000
        }
    );
});
</script>