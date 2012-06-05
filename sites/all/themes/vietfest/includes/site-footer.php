<div class="footer-container">
    <?php if ($page['footer'])
    {
        print render($page['footer']);
    }; ?>
    
    <div class="container-12 clearfix">
        <div class="grid-3 footer-nav">
            <h3>Sitemap</h3>
            <?php print render($vietfest_menu_footer); ?>
        </div>
        
        <div class="grid-3">
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
        
        <div class="box-6 box-last">
            <h3>Our Friends</h3>
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com/pages/VietFest-2012/304220736279418&amp;width=450&amp;connections=28&amp;stream=false&amp;header=false&amp;height=409" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:409px;" allowTransparency="true"></iframe>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if(!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");

            </script>
        </div>
        
    </div>
</div><!-- end .footer-container -->