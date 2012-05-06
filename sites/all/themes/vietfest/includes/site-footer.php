<div class="footer-container">
    <?php if ($page['footer'])
    {
        print render($page['footer']);
    }; ?>
    
    <div class="container-12 clearfix">
        <div class="grid-10 footer-nav">
            <?php print render($vietfest_menu_footer); ?>
        </div>
        
        <div class="grid-2">
            
        </div>
        
    </div>
</div><!-- end .footer-container -->