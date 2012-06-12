<?php
include 'includes/top-nav.php';
?>

<div id="wrapper">
	<?php
	include 'includes/site-header.php';
	?>

	<div class="main-content-container container-12 clearfix">
		<div class="grid-12 clearfix">
			<div class="content-box">
				<?php print $messages;?>
				<?php print render($title_prefix);?>
				<?php print render($title_suffix);?>
				<?php if ($tabs):
				?>
				<div class="tabs">
					<?php print render($tabs);?>
				</div>
				<?php endif;?>
				<?php print render($page['help']);?>

				<div id="slider-group">
					<link rel="stylesheet" href="<?php print $directory;?>/css/nivo-slider/default.css" type="text/css" media="screen" />
					<link rel="stylesheet" href="<?php print $directory;?>/css/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
					<div class="slider-wrapper theme-default">
						<div class="ribbon"></div>
						<div id="slider" class="nivoSlider">
							<a href="<?php print $front_page . "/event";?>"> <img src="<?php print $directory;?>/images/home/slideshow/dragon.jpg" alt="VietFest Coming in May 2012" /></a>
							<a href="<?php print $front_page . "/event";?>"> <img src="<?php print $directory;?>/images/home/slideshow/featuring_singers.jpg" alt="Come taste Vietnamese home-style cuisine" /></a>
							<img src="<?php print $directory;?>/images/home/slideshow/father_and_daughter.jpg" alt="Viet Culture" />
							<img src="<?php print $directory;?>/images/home/slideshow/AnhMinh.jpg" alt="Anh Minh" />
						</div>
					</div>
				</div>
				<?php if ($title):
				?>
				<h2 class="title" id="page-title"><?php print $title;?></h2>
				<?php endif;?>
				<?php print render($page['content']);?>

				<div class="box-6">
					<h2>Location</h2>
					<iframe width="450" height="409" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=4500+Patriot+Circle,++Fairfax,+VA+22030&amp;ie=UTF8&amp;hq=&amp;hnear=4500+Patriot+Cir,+Fairfax,+Virginia+22030&amp;gl=us&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=38.826745,-77.30975&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?hl=en&amp;q=4500+Patriot+Circle,++Fairfax,+VA+22030&amp;ie=UTF8&amp;hq=&amp;hnear=4500+Patriot+Cir,+Fairfax,+Virginia+22030&amp;gl=us&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=38.826745,-77.30975&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div>
				
				<div class="box-6 box-last">
					<h2>Info</h2>
					<address>George Mason University<br />
					    4500 Patriot Circle<br />
					    Parking lot K<br />
					    Fairfax, VA 22030
					</address>
					<p>10:00 A.M. - 8:00 P.M</p>
					
					<a class="buy-ticket-btn" title="Purchase tickets" href="<?php print $base_path;?>tickets">Buy Tickets</a>
					<p>Admission: $5 if purchased in advance, $7 onsite, children 5 and under Free<br/><i>FREE ADMISSION FOR WEARING FULL VIETNAMESE TRADITIONAL DRESS (áo gấm, áo dài, áo ngũ thân, áo yếm, áo tứ thân)</i></p>
					<p>The first 100 paid guests will receive FREE door prizes, including unique gifts from Vietnam.</p>
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
					<area shape="rect" coords="578,82,657,152" href="https://www.newyorklife.com" alt="NY Life" />
					<area shape="rect" coords="578,9,717,68" href="http://www.pragmatics.com" alt="Pragmatics" />
					<area shape="rect" coords="736,15,890,65" href="http://www.vabadc.com" alt="VA BA DC" />
					<area shape="rect" coords="635,187,793,247" href="http://songquedeli.com" alt="Song Que Deli" />
					<area shape="rect" coords="9,167,278,248" href="http://www.massmutual.com/home?gclid=CPjqmLyVlK8CFUMTNAodYFJr0Q" alt="Mass Mutual" />
					<area shape="rect" coords="536,179,625,258" href="http://www.hotnjuicycrawfish.com/" alt="Hot and Juicy" />
					<area shape="rect" coords="290,160,390,254" href="http://edencenter.com/portfolio/vy-bistro/" alt="Vy Bistro" />
					<area shape="rect" coords="406,163,526,265" href="http://marylandlivecasino.com/" alt="Maryland Casino" />
					<area shape="rect" coords="808,193,907,237" href="http://www.yelp.com/biz/banh-cuon-thang-long-falls-church" alt="Banh Cuon Thang Long" />
					<area shape="rect" coords="10,253,226,319" href="http://edencenter.com" alt="Eden Center" />
					<area shape="rect" coords="243,265,408,318" href="http://www.qatarairways.com/us/en/homepage.page" alt="QATAR Airways" />
					<area shape="rect" coords="669,75,909,132" href="http://www.wwsettlements.com" alt="Worldwise Settlements" />
					<area shape="rect" coords="421,271,563,320" href="http://www.yelp.com/biz/viet-bistro-falls-church" alt="Viet Bistro" />
					<area shape="rect" coords="725,252,904,281" href="http://www.nnlawfirm.com/" alt="Nguyen Nguyen" />
					<area shape="rect" coords="572,276,716,322" href="http://www.topkickonline.com/" alt="Top Kick" />
					<area shape="rect" coords="725,287,906,323" http://www.enterprise.com/car_rental/home.do" alt="Enterprise" />
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
					<area shape="rect" coords="19,103,165,177" href="http://www.ketdoan.org/" alt="Ket Doan" />
					<area shape="rect" coords="167,103,311,177" href="http://vndcradio.com/" alt="Viet DC Radio" />
					<area shape="rect" coords="332,97,428,181" href="http://www.vnps.net/" alt="VNPS" />
					<area shape="rect" coords="444,94,531,190" href="http://viettoon.net/" alt="Viet Toon" />
					<area shape="rect" coords="747,91,894,178" href="http://www.galeriebrigitte.co" alt="Galerie Brigitte" />
					<area shape="rect" coords="17,203,311,252" href="http://www.eastwind.biz" alt="East Wind Reastaurant" />
					<area shape="rect" coords="591,206,726,254" href="http://www.sbtndc.com/" alt="SBTN-DC" />
					<area shape="rect" coords="17,283,200,338" href="http://www.vietmymagazine.net/" alt="Viet My" />
					<area shape="rect" coords="207,283,388,338" href="http://www.akaritutoring.com" alt="Arkari Tutoring" />
					<area shape="rect" coords="641,100,734,184" href="http://www.vietamcham.com" alt="VN American Chamber" />
					<area shape="rect" coords="747,192,892,241" href="http://tunein.com/radio/Radio-Viet-Nam-Hai-Ngoai-s116579/" alt="VNHN" />
					<area shape="rect" coords="541,99,632,179" href="http://vnlac.org/" alt="Nha Viet Nam" />
					<area shape="rect" coords="742,293,909,336" href="http://childrenvietnam.org/" alt="Children of Vietnam" />
					<area shape="rect" coords="563,295,736,338" href="http://www.asianfortunenews.com/" alt="Asian Fortune News" />
					<area shape="rect" coords="348,204,567,263" href="http://www.bluejadestudio.com/" alt="Blue Jade Studio" />					
				</map>
			</div>
		</div>
		<div class="partner-container-footer"></div>
	</div><!-- end .sponsor-container -->
	<?php
		include 'includes/site-footer.php';
	?>
</div>
<!-- end #wrapper -->
<script type="text/javascript" src="<?php print $directory;?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php print $directory;?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({
			pauseTime : 8000
		});
	});

</script>