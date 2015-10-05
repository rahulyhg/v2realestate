<body data-offset="62" data-spy="scroll" data-target=".navbar" onload="initialize()">
	<!-- ===== PAGE LOADER GRAPHIC ===== -->
	<div id="pageloader">
		<div class="loader-img">
			<img alt="loader" src="<?php echo base_url('assets/img/loader.gif');?>" /> </div>
	</div>

	<section id="homes">
		<!-- ======================================= -->
		<!-- ========== START PARALLAX SLIDER ========== -->
		<!-- ======================================== -->
		<!-- SlidesJS Required: Start Slides -->
		<!-- The container is used to define the width of the slideshow -->

		<div id="slides">
			<div class="slides-container">
				<div class="parallax img-overlay3" style="background-image:url(<?php echo base_url('assets/img/slider/skyscrapers.jpg');?>)" data-stellar-background-ratio="0.2">
					<div class="img-overlay-solid" style="background-color:rgba(60,62,71,0.3);"></div>
					<div class="caption text-center">
						<div class="color-white text-center weight-300 large-caption " style="margin-top: -150px">Are you ready to be</div>
						<div class="color-white text-center weight-800 super-large-caption vlogo">v<span class="two">2</span>RealEstate</div>
						<h4 class="color-white text-center weight-600 uppercase " style="margin-top: 60px; letter-spacing: 1px;">Find out all about us</h4>
						<a href="#about" class="scrollto btn btn-primary btn-outline btn-lg rounded" style="margin-top: 10px"><i class="fa-chevron-down" style="font-size: 16px"></i></a>
					</div>
				</div>
				<div class="parallax img-overlay3" style="background-image:url(<?php echo base_url('assets/img/slider/skyscrapers.jpg');?>)" data-stellar-background-ratio="0.2">
					<div class="img-overlay-solid" style="background-color:rgba(60,62,71,0.3);"></div>
					<div class="caption">
						<div class="color-white weight-800 uppercase text-center extra-large-caption " style="margin-top: -200px">Real Estate</div>
						<div class="color-white weight-300 text-center medium-caption " style="letter-spacing: 1px;">Real Estate</div>
						<br/>
						<div class="text-center"><a href="#portfolio" class="scrollto btn btn-white btn-outline" style="margin-top: 10px">Our Products</a><a href="#about" class="scrollto btn btn-primary btn-outline" style="margin-top: 10px">About Us</a>
						</div>
					</div>
				</div>
			</div>
			<nav class="slides-navigation">
				<a href="#" class="next"><i class="fa-angle-right"></i></a>
				<a href="#" class="prev"><i class="fa-angle-left"></i></a>
			</nav>
		</div>
		<!-- End SlidesJS Required: Start Slides -->
		<!-- ======================================= -->
		<!-- ========== END PARALLAX SLIDER ========== -->
		<!-- ======================================== -->
	</section>

	<!-- ======================================== -->
	<!-- =========== START ABOUT SECTION ============ -->
	<!-- ======================================== -->
	<section id="about" class="pad-left">
		<div class="fullwidth-section" style="background-color: #fff">
			<div class="container">
				<div class="row" style="margin-bottom: 60px;">

					<div class="col-md-8 col-md-offset-2 text-center pdn">
						<h1 class="weight-800 kill-top-margin uppercase">About Us</h1>
						<h4 class="weight-400"> V2 REAL ESTATE PVT. LTD. is one of the fastest-growing Mumbai-based Real Estate Company.</h4>

					</div>
				</div>
				<!-- ========== START ICON FEATURES BOX ========== -->
				<div class="row">
					<div class="col-md-8 pdn">
						<div class="about-cont">
							<p>
								V2 REAL ESTATE PVT. LTD. is one of the fastest-growing Mumbai-based Real Estate Company which is conducting activities of real estate acquisition and leasing and is providing prime real estate to MNCs, Consulates, Indian corporates, Indian & foreign Banks &amp; Industrial houses in India’s Leading Commercial Complexes, I. T. Parks, Warehouses, Showroom spaces.</p>

							<p>V2 Real Estate boasts of a country-wide real estate spread across many cities of India and spread across multiple projects catering to ultra-luxury and luxury commercial properties to its variety of clients and boasts of providing real-estate solutions to MNCs, Consulates, Indian corporates, Indian &amp; foreign Banks &amp; Industrial houses.</p>

							<p>V2 Real Estate is renowned for strong solution-centric project execution, skills through an in-house project management team and strategic tie-ups / associations with domestic / International contractors, architects, engineers, legal firms and brand partners. V2 Real Estate is associated with many national &amp; international brands as its ESTEEMED CLIENTS. V2 Real Estate is also having strategic partnership with India’s leading Logistic Company. </p>
						</div>
						<div class="pull-right">
							<a href="<?php echo site_url('site/aboutus') ?>">
                                read-more
                            </a>
						</div>
					</div>
					<div class="col-md-4 pdn clear">
						<figure class="text-center">
							<img src="<?php echo base_url('assets/img/pictures/about_us.jpg');?>">
						</figure>
					</div>
				</div>
			</div>
			<!-- END ICON FEATURES BOX -->
		</div>
	</section>
	<!-- ======================================== -->
	<!-- =========== START PORTFOLIO SECTION ============= -->
	<!-- ======================================== -->
	<section id="portfolio" class="container pad-left">
		<div class="fullwidth-section kill-bottom-padding">
			<div class="container">
				<div class="row" style="margin-bottom: 40px;">
					<div class="col-md-8 col-md-offset-2 text-center pdn wdy">
						<h1 class="weight-800 kill-top-margin uppercase">Products</h1>
						<h4 class="weight-400">Have a look at what we've been up to. View some of our best work.</h4>
					</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-md-12" id="isotope-filter">
					<a data-filter="*" href="#" class="btn btn-sm btn-outline btn-primary active">Show All</a>
					<a data-filter=".central-warehouse" href="#" class="btn btn-primary btn-sm btn-outline">Central Warehousing</a>
					<a data-filter=".bare-shell" href="#" class="btn btn-sm btn-outline btn-primary">Tailored Made office</a>
					<a data-filter=".period-offices" href="#" class="btn btn-sm btn-outline btn-primary">Period Offices</a>
					<a data-filter=".banking-sol" href="#" class="btn btn-sm btn-outline btn-primary">Banking Solutions</a>
				</div>
			</div>
			<div class="row">
				<div id="isotope">
					<div class="col-sm-3 central-warehouse pdn">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons">
								<a href="<?php echo site_url('site/project') ?>" on-click="">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/CWC.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/CWC.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 period-offices ">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/periodoffice.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/periodoffice.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 bare-shell">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/bareshell.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/bareshell.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 central-warehouse">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/warehouse.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/warehouse.jpg');?>');">
						</div>
					</div>

					<div class="col-sm-3 banking-sol">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/28bank.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/28bank.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 bare-shell">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/bareshell.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/bareshell.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 period-offices">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/periodoffice.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/periodoffice.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 banking-sol">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/28bank.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/28bank.jpg');?>');">
						</div>
					</div>

					<div class="col-sm-3 bare-shell">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/bareshell.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/bareshell.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 banking-sol">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/28bank.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/28bank.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 period-offices">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/periodoffice.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/periodoffice.jpg');?>');">
						</div>
					</div>
					<div class="col-sm-3 bare-shell">
						<div class="portfolio-hover">
							<div class="portfolio-hover-buttons"><a href="<?php echo site_url('site/project') ?>">View Project</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo base_url('assets/img/pictures/bareshell.jpg');?>" title=""><i class="im-expand2"></i></a>
							</div>
						</div>
						<div class="img-thumb" style="background-image: url('<?php echo base_url('assets/img/pictures/bareshell.jpg');?>');">
						</div>
					</div>
				</div>
				<!-- END ISOTOPE SCRIPT -->
			</div>

		</div>
	</section>
	<!-- ======================================== -->
	<!-- =========== END PORTFOLIO SECTION ============= -->
	<!-- ======================================== -->


	<!-- ======================================== -->
	<!-- =========== START CONTACT SECTION ============= -->
	<!-- ======================================== -->
	<section id="contact" class="pad-left">
		<div class="fullwidth-section">
<!--			<div class="parallax img-overlay4" style="background-image: url('img/slider/newyork.jpg');?>')" data-stellar-background-ratio="0.3"></div>-->
			<div class="img-overlay-solid" style="background-color:rgba(60,62,71,0.7);"></div>
			<div class="container">
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-6 col-md-offset-3 text-center pdn">

						<h1 class="weight-800 kill-top-margin uppercase color-white">Contact Us</h1>
						<h4 class="color-white weight-400">Our support is top notch so please don't hesitate to contact us if you need some help.</h4>
					</div>
				</div>
				<!-- START FORM WRAPPER -->

				<div class="row">
					<div class="col-md-8 col-md-offset-2 pdn">

						<form action="contact-form.php" method="post" role="form">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Tell us your name</label>
										<input class="form-control" name="name" id="name" placeholder="" type="text" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>What&#39;s your email address?</label>
										<input class="form-control" name="email" id="email" placeholder="" type="email" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Give us the details</label>
										<textarea class="form-control" id="message" placeholder="" rows="8"></textarea>
									</div>
									<div class="text-center">
										<br/>
										<button class="btn btn-primary btn-round" type="submit">Send Message
										</button>
										<br>
										<div id="error">Please fill out all required fields</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- END FORM WRAPPER -->
			</div>
		</div>
		<!-- ======================================== -->
		<!-- ============= START MAP DISPLAY ============= -->
		<!-- ======================================== -->

		<div class="fullwidth-section" style="background-color: #F5F5F5">
			<div class="container">
				<div class="row" style="margin-bottom: 20px">
					<div class="col-md-8 col-md-offset-2 text-center pdn">
						<h1 class="weight-800 kill-top-margin uppercase">Find us on the map</h1>
						<h4 class="weight-400">Call us, email us or stop by the office, we're always here for you!</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 pdn">
						<div class="map-wrapper">
							<div id="maps">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.155785457462!2d72.82063059999999!3d18.924497400000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1ec1fde5d67%3A0x4e34c6cf4eaf0073!2sArcadia+Building!5e0!3m2!1sen!2sin!4v1437828303453" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="col-md-4 mid-made pdn ">
						<h4 class="uppercase weight-700" style="margin-top: 20px">Drop by the office</h4>
						<p><strong class="color-primary text-upper">V2RealEstate</strong>
							<br>802, Arcadia,
							<br> NCPA Road,
							<br> Nariman Point,
							<br> Mumbai - 400 021.
							<br> Telphone No :- 022 22884506
							<hr/>
							<h4 class="uppercase weight-700">Give us a shout</h4>
							<p><a href="mailto:v2re.contact@gmail.com">v2re.contact@gmail.com</a>
								<br/>Telphone No :- 022 22884506
					</div>
				</div>
			</div>
		</div>

		<!-- ======================================== -->
		<!-- ================ END MAP DISPLAY =========== -->
		<!-- ======================================== -->
	</section>
	<!-- ======================================== -->
	<!-- =========== END CONTACT SECTION ============= -->
	<!-- ======================================== -->

	

	<!-- ================================================== -->
	<!-- ============= START SCROLL TO TOP SCRIPT ============= -->
	<!-- ================================================== -->
	<div class="scrollup">
		<a class="scrolltotop" href="#"><i class="fa fa-angle-double-up"></i></a>
	</div>
	<!-- ================================================== -->
	<!-- ============== END SCROLL TO TOP SCRIPT ============== -->
	<!-- ================================================== -->

	<!-- ===================================== -->
	<!-- ========== START JQUERY SCRIPTS ========== -->
	<!-- ===================================== -->
	
	<!-- ==================================== -->
	<!-- ========== END JQUERY SCRIPTS ========== -->
	<!-- ==================================== -->
</body>

</html>