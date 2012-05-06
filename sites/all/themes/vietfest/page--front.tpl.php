
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
                            <a href="<?php print $front_page . "/event"; ?>"><img src="<?php print $directory;?>/images/home/slideshow/featuring_singers.jpg" alt="Come taste Vietnamese home-style cuisine" /></a>
                            <img src="<?php print $directory;?>/images/home/slideshow/father_and_daughter.jpg" alt="Father and Daughter" />
                        </div>
                    </div>
                </div>
    
                <?php if ($title): ?>
                  <h2 class="title" id="page-title"><?php print $title; ?></h2>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                
                <div class="box-6">
                    <h2>Location</h2>
                    <iframe width="450" height="409" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=4500+Patriot+Circle,+Fairfax,+VA,+22033+(George+Mason+University,+Lot+K)&amp;aq=&amp;sll=38.826737,-77.30974&amp;sspn=0.008676,0.01929&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=4500+Patriot+Cir,+Fairfax,+Virginia+22030&amp;t=m&amp;z=14&amp;ll=38.826745,-77.30975&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=4500+Patriot+Circle,+Fairfax,+VA,+22033+(George+Mason+University,+Lot+K)&amp;aq=&amp;sll=38.826737,-77.30974&amp;sspn=0.008676,0.01929&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=4500+Patriot+Cir,+Fairfax,+Virginia+22030&amp;t=m&amp;z=14&amp;ll=38.826745,-77.30975" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                </div>
                
                <div class="box-6 box-last">
                    <h2>Our Friends</h2>   
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com/pages/VietFest-2012/304220736279418&amp;width=450&amp;connections=28&amp;stream=false&amp;header=false&amp;height=409" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:409px;" allowTransparency="true"></iframe>
                    
                    <a href="https://twitter.com/VietFest" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @VietFest</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
               </div>                
                
            </div>
            
       </div> 
    </div><!-- end .main-content-container -->
    
    <div class="sponsor-container container-12 clearfix">
            
        <div class="grid-12 clearfix">
            <h2>Sponsors</h2>       
            <div class="sponsor">
   	           <img src="./sites/all/themes/vietfest/images/sponsors/Sponsor Logos.png" alt="Sponsors" usemap="#sponsorMap" />
				<map name="sponsorMap">
				  <area shape="rect" coords="0,0,160,155" href="http://www.wellsfargo.com" alt="Wells Fargo" />
				  <area shape="rect" coords="160,0,410,70" href="http://www.statefarm.com/" alt="State Farm" />
				  <area shape="rect" coords="160,72,410,155" href="http://www.metlife.com" alt="Met Life" />
				  <area shape="rect" coords="421,0,567,155" href="http://www.bbt.com/" alt="BB&T" />
				  <area shape="rect" coords="576,0,900,100" href="http://www.fvcbank.com/" alt="FVC Bank" />
				  <area shape="rect" coords="580,110,700,130" href="http://www.pragmatics.com" alt="Pragmatics" />
				  <area shape="rect" coords="720,120,887,130" href="http://www.vabadc.com" alt="VA BA DC" />
				  <area shape="rect" coords="740,140,900,200" href="http://songquedeli.com" alt="Song Que Deli" />				  				  
				  <area shape="rect" coords="12,161,280,240" href="http://www.massmutual.com/home?gclid=CPjqmLyVlK8CFUMTNAodYFJr0Q" alt="Mass Mutual" />
				  <area shape="rect" coords="280,160,370 250" href="http://www.hotnjuicycrawfish.com/" alt="Hot and Juicy" />
				  <area shape="rect" coords="370,160,480,260" href="http://edencenter.com/portfolio/vy-bistro/" alt="Vy Bistro" />
				  <area shape="rect" coords="480,165,610,260" href="http://marylandlivecasino.com/" alt="Maryland Casino" />				  
				  <area shape="rect" coords="610,165,740,260" href="http://mrellc.net/" alt="MRE" />
				  <area shape="rect" coords="770,200,900,260" href="http://www.yelp.com/biz/banh-cuon-thang-long-falls-church" alt="Banh cuong thang long" />				  
				</map>
            </div>
            
          
           
            <!-- div class="sponsor">
                <a href="http://www.wellsfargo.com"><img src="<?php print $directory;?>/images/sponsors/wellsfargo.jpg" alt="Wells Fargo"/></a>
            </div>         
           
			<div class="sponsor">
                <a href="http://www.massmutual.com/home?gclid=CPjqmLyVlK8CFUMTNAodYFJr0Q"><img src="<?php print $directory;?>/images/sponsors/Mass_Mutual.jpg" alt="Mass Mutual" style="width:250px;height:115px"/></a>
            </div>  
			
			<div class="sponsor">
                <a href="http://www.pragmatics.com/"><img src="<?php print $directory;?>/images/sponsors/pragmatics.jpg" alt="Pragmatics" style="height:115px"/></a>
            </div> 
			
			<div class="sponsor">
                <a href="http://www.vabadc.com/"><img src="<?php print $directory;?>/images/sponsors/vabadc.jpg" alt="" style="width:115px;height:115px"/></a>
            </div> 
			
			<div class="sponsor">
                <a href="http://edencenter.com/portfolio/vy-bistro/"><img src="<?php print $directory;?>/images/sponsors/p_vybistro.jpg" alt="" style="width:115px;height:115px"/></a>
            </div --> 
			
           
          </div>
        
    </div><!-- end .sponsor-container -->

	<div class="partner-container container-12 clearfix">
        <div class="grid-12 clearfix">
  		<h2>Partners</h2>       
            <div class="partner">
   	           <img src="./sites/all/themes/vietfest/images/sponsors/Partner Logos.png" alt="Sponsors" usemap="#partnerMap" />

				<map name="partnerMap">
				  <area shape="rect" coords="0,0,160,80" href="http://www.bpsos.org" alt="BPSOS" />
				  <area shape="rect" coords="300,0,640,80" href="http://www.mauvsa.org/" alt="MAUVSA" />
				  <area shape="rect" coords="670,0,900,80" href="http://www.anhoi.com/" alt="Anh Oi" />
				  <area shape="rect" coords="0,100,240,200" href="http://www.ketdoan.org/" alt="Ket Doan" />
				  <area shape="rect" coords="245,100,440,200" href="http://vndcradio.com/" alt="Viet DC Radio" />
				  <area shape="rect" coords="460,100,600,200" href="http://www.vnps.net/" alt="VNPS" />
				  <area shape="rect" coords="600,100,730,200" href="http://viettoon.net/" alt="Viet Toon" />				  
				  <area shape="rect" coords="730,100,900,200" href="http://www.galeriebrigitte.co" alt="Galerie Brigitte" />
				  <area shape="rect" coords="0,210,180,340" href="http://www.nhavietnam.org/" alt="Nha Viet Nam" />
				  <area shape="rect" coords="180,210,480,260" href="http://www.eastwind.biz" alt="East Wind Reastaurant" />
				  <area shape="rect" coords="480,210,630,260" href="http://www.sbtndc.com/" alt="SBTN-DC" />
				  <area shape="rect" coords="180,270,420,330" href="http://www.vietmymagazine.net/" alt="Viet My" />
				  <area shape="rect" coords="420,270,645,330" href="http://www.akaritutoring.com" alt="Arkari Tutoring" />
				  <area shape="rect" coords="625,200,730,290" href="http://www.vietamcham.com" alt="VN American Chamber" />					
				  <area shape="rect" coords="730,210,900,280" href="http://tunein.com/radio/Radio-Viet-Nam-Hai-Ngoai-s116579/" alt="VNHN" />  				  
				</map>
            </div>
        </div>
        <div class="partner-container-footer"></div>
    </div><!-- end .sponsor-container -->
    
    
    <?php include 'includes/site-footer.php'; ?>
    
</div> <!-- end #wrapper -->

<script type="text/javascript" src="<?php print $directory;?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php print $directory;?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider(
        {
            pauseTime : 8000
        }
    );
});
</script>