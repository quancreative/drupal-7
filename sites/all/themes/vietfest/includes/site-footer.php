<div class="footer-container">
    <?php if ($page['footer'])
    {
        print render($page['footer']);
    }; ?>
    
    <div class="container-12 clearfix">
        <div class="grid-4 footer-nav">
            <h3>Sitemap</h3>
            <?php print render($vietfest_menu_footer); ?>
        </div>
        
        <div class="grid-2">
            <h3>Connect</h3>
            <ul class="subscribe">
              <li class="facebook">
                  <a href="http://www.facebook.com/pages/VietFest-2012/304220736279418" rel="me">Facebook</a>
              </li>
              <li class="twitter">
                  <a href="https://twitter.com/VietFest">Twitter</a>
              </li>
              <li class="youtube">
                  <a href="http://www.youtube.com/user/NovalDCVietFest">Youtube</a>
              </li>
              <!--
              <li class="googleplus">
                  <a href="http://www.google.com/" rel="me">Google Plus</a>
              </li>
              <li class="rss">
                  <span class="rss"><a href="http://www.vietfest.com/rss.xml">RSS Feed</a></span>
              </li>
              -->
            </ul>
        </div>
        
    </div>
</div><!-- end .footer-container -->