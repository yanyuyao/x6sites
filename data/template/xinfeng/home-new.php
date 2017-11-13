<?php $this->load->view($config['site_template'].'/head');?>
<body>
	<?php $this->load->view($config['site_template'].'/header');?>

	<div class="site-content">
		<?php $this->load->view($config['site_template'].'/slider');?>
		
		<!-- Features -->
		<div class="features-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>Welcome</span> to Fam</h2>
				</div>
				<div class="row features">
					<div class="col-md-4 col-sm-6 col-xs-12 feature">
						<div class="icon"><i class="icofont icofont-light-bulb"></i></div>
						<h3>Creative Idea</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipised do eiusmod tempor incididunt ut labore et dolore magna al enim ad minim venia</p>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 feature">
						<div class="icon"><i class="icofont icofont-anchor-alt"></i></div>
						<h3>Multiple Options</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipised do eiusmod tempor incididunt ut labore et dolore magna al enim ad minim venia</p>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 feature">
						<div class="icon"><i class="icofont icofont-rocket"></i></div>
						<h3>Multiple Options</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipised do eiusmod tempor incididunt ut labore et dolore magna al enim ad minim venia</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Featured Article -->
		<div class="featured-article-wrapper">
			<div class="container">
				<article class="row">
					<div class="col-md-6 info-block">
						<h3>Company</h3>
						<div class="colored-line"></div>
						<h2>Best way to <span>get</span> your <span>job</span> done</h2>
						<p class="highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
						<p>	Blore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						<a href="blog-single.html" class="btn btn-solid"><span>Read More</span></a>
					</div>
					<div class="col-md-6">
						<div class="img-wrapper">
							<img src="<?=$config['site_templateurl'];?>/assets/img/random/img-1.jpg" alt="" class="img-responsive">
						</div>
					</div>
				</article>
			</div>
		</div>

		<!-- Portfolio -->
		<div class="portfolio-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>Completed Projects</span> to Fam</h2>
				</div>
				<!-- Trigger nivolight on load -->
				<div class="nivo-activator"></div>
				<div class="portfolio">
					<ul id="fam-filter">
						<li class="selected" data-filter="*"> <span>All</span></li>
						<li  data-filter=".project-801">Design</li>
						<li  data-filter=".project-802">Branding</li>
						<li  data-filter=".project-803">Marketing</li>
						<li  data-filter=".project-801">Photography</li>
					</ul>
					<div class="fam-filterable row">
						<div class="item col-md-3 col-sm-4 project-801 project-804 project-805">
							<div class="project-showcase">
								<div class="overlay">
									<h4>This is Project title</h4>
									<h5>Marketing</h5>
									<a href="assets/img/lightbox/img-2.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<div class="icon"><i class="icofont icofont-plus"></i></div></a>
								</div>
								<img src="<?=$config['site_templateurl'];?>/assets/img/portfolio/img-1.jpg" alt="" class="img-responsive">
							</div>
						</div>
						<div class="item col-md-3 col-sm-4 project-801 project-804 project-802">
							<div class="project-showcase">
								<div class="overlay">
									<h4>This is Project title</h4>
									<h5>Lipsum</h5>
									<a href="assets/img/lightbox/img-3.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<div class="icon"><i class="icofont icofont-plus"></i></div></a>
								</div>
								<img src="<?=$config['site_templateurl'];?>/assets/img/portfolio/img-2.jpg" alt="" class="img-responsive">
							</div>
						</div>
						<div class="item col-md-3 col-sm-4 project-803 project-805">
							<div class="project-showcase">
								<div class="overlay">
									<h4>This is Project title</h4>
									<h5>Lipsum</h5>
									<a href="assets/img/lightbox/img-1.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<div class="icon"><i class="icofont icofont-plus"></i></div></a>
								</div>
								<img src="<?=$config['site_templateurl'];?>/assets/img/portfolio/img-4.jpg" alt="" class="img-responsive">
							</div>
						</div>
						<div class="item col-md-3 col-sm-4 project-802 project-804 project-803">
							<div class="project-showcase">
								<div class="overlay">
									<h4>This is Project title</h4>
									<h5>Lipsum</h5>
									<a href="assets/img/lightbox/img-5.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<div class="icon"><i class="icofont icofont-plus"></i></div></a>
								</div>
								<img src="<?=$config['site_templateurl'];?>/assets/img/portfolio/img-5.jpg" alt="" class="img-responsive">
							</div>
						</div>
						<div class="item col-md-3 col-sm-4 project-801 project-802 project-805 project-803">
							<div class="project-showcase">
								<div class="overlay">
									<h4>This is Project title</h4>
									<h5>Lipsum</h5>
									<a href="assets/img/lightbox/img-4.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<div class="icon"><i class="icofont icofont-plus"></i></div></a>
								</div>
								<img src="<?=$config['site_templateurl'];?>/assets/img/portfolio/img-3.jpg" alt="" class="img-responsive">
							</div>
						</div>
						<div class="item col-md-3 col-sm-4 project-802 project-804 project-805">
							<div class="project-showcase">
								<div class="overlay">
									<h4>This is Project title</h4>
									<h5>Lipsum</h5>
									<a href="assets/img/lightbox/img-6.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<div class="icon"><i class="icofont icofont-plus"></i></div></a>
								</div>
								<img src="<?=$config['site_templateurl'];?>/assets/img/portfolio/img-6.jpg" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<div class="btn-wrapper">
					<a href="portfolio-masonry.html" class="btn btn-solid"><span>View All</span></a>
				</div>
			</div>
		</div>

		<!-- Services -->
		<div class="services-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>Services</span> We Offer</h2>
				</div>
				<div class="row services">
					<div class="col-md-3 col-xs-6 services-col">
						<div class="service">
							<div class="content">
								<h3>Web Design</h3>
								<i class="icofont icofont-contrast"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>Web Security</h3>
								<i class="icofont icofont-umbrella"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 services-col space-top">
						<div class="service">
							<div class="content">
								<h3>Web Developement</h3>
								<i class="icofont icofont-code"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>Marketing</h3>
								<i class="icofont icofont-test-tube-alt"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 services-col">
						<div class="service">
							<div class="content">
								<h3>Mobile App</h3>
								<i class="icofont icofont-bell"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>Web Hosting</h3>
								<i class="icofont icofont-building"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 services-col space-top">
						<div class="service">
							<div class="content">
								<h3>Photography</h3>
								<i class="icofont icofont-camera"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>Research</h3>
								<i class="icofont icofont-library"></i>
								<p>Nosed do eius oimod tempor incidid unt ut labore et dolore magna</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Fun facts -->
		<div class="fun-facts-wrapper counterContainer">
			<div class="container">
				<div class="counters row">
					<div class="col-md-3 col-sm-6 col-xs-6 counter">
						<span id="counting-1" ></span>
						<h3>Clients</h3>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 counter">
						<span id="counting-2" ></span>
						<h3>Projectss</h3>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 counter">
						<span id="counting-3" ></span>
						<h3>Awards</h3>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 counter">
						<span id="counting-4" ></span>
						<h3>Cups Of Coffee</h3>
					</div>
				</div>
			</div>
		</div>

		<!-- Team -->
		<div class="team-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>Creative</span> Peoples</h2>
				</div>
				<div class="row team-members">
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="overlay">
								<div class="name">
									<div class="content">
										<h5>Founder and CEO</h5>
										<h4>Monalisa Khan</h4>
									</div>
								</div>
								<div class="social-media">
									<div class="content">
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
									</div>
								</div>
							</div>
							<img src="<?=$config['site_templateurl'];?>/assets/img/team/img-1.jpg" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="overlay">
								<div class="name">
									<div class="content">
										<h5>Web Developer</h5>
										<h4>Chanki Pande</h4>
									</div>
								</div>
								<div class="social-media">
									<div class="content">
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
									</div>
								</div>
							</div>
							<img src="<?=$config['site_templateurl'];?>/assets/img/team/img-3.jpg" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="overlay">
								<div class="name">
									<div class="content">
										<h5>Designer</h5>
										<h4>Jerin Khan</h4>
									</div>
								</div>
								<div class="social-media">
									<div class="content">
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
									</div>
								</div>
							</div>
							<img src="<?=$config['site_templateurl'];?>/assets/img/team/img-2.jpg" alt="" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Teaser -->
		<div class="teaser-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="img-wrapper col-md-6">
						<img src="<?=$config['site_templateurl'];?>/assets/img/random/img-2.jpg" alt=" " >
					</div>
					<div class="content col-md-6">
						<div class="feature-four">
							<div class='icon-animated'>
							    <i class="icofont icofont-beach-bed"></i>
							 </div>
							 <h3>Awesome Features</h3>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</p>
						</div>
						<div class="feature-four">
							<div class='icon-animated'>
							    <i class="icofont icofont-golden-ratio"></i>
							 </div>
							 <h3>Unique Design</h3>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</p>
						</div>
						<div class="feature-four">
							<div class='icon-animated'>
							   <i class="icofont icofont-pixels"></i>
							 </div>
							 <h3>Easy Customization</h3>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Testimonials -->
		<div class="testimonials-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>Clients</span> Says</h2>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div id="fam-testimonials">
							<div class="item testimonial">
								<img src="<?=$config['site_templateurl'];?>/assets/img/random/img-3.jpg" alt="" class="img-responsive">
								<div class="info-block">
									<h1>These Guys are Aweome</h1>
									<p>Wedor do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
									<h4>Shamsuzzaman</h4>
									<h5>Bhai Paribahan</h5>
								</div>
							</div>
							<div class="item testimonial">
								<img src="<?=$config['site_templateurl'];?>/assets/img/random/img-4.jpg" alt="" class="img-responsive">
								<div class="info-block">
									<h1>I love These Gyus</h1>
									<p>Wedor do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
									<h4>Samuel Holmes</h4>
									<h5>Laloo's Caffe Shop</h5>
								</div>
							</div>
							<div class="item testimonial">
								<img src="<?=$config['site_templateurl'];?>/assets/img/random/img-5.jpg" alt="" class="img-responsive">
								<div class="info-block">
									<h1>A very creative team</h1>
									<p>Wedor do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
									<h4>Andrew Dunn</h4>
									<h5>Kemoboy Design</h5>
								</div>
							</div>
						</div>
						<div class="qoute-icon">
							<i class="icofont icofont-quote-left"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Partners -->
		<div class="partners-wrapper">
			<div class="parallax-mask"></div>
			<div class="container">
				<div class="section-title">
					<h2 class="white">our partners</h2>
				</div>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-12 clearfix">
						<div class="partners">
							<div class="partner top">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-1.png" alt="">
							</div>
							<div class="partner top">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-2.png" alt="">
							</div>
							<div class="partner top">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-3.png" alt="">
							</div>
							<div class="partner top last">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-4.png" alt="">
							</div>
							<div class="partner bottom">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-5.png" alt="">
							</div>
							<div class="partner bottom">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-6.png" alt="">
							</div>
							<div class="partner bottom">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-7.png" alt="">
							</div>
							<div class="partner bottom last">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-8.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Blog -->
		<div class="blog-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>Latest</span> Blog</h2>
				</div>
				<div class="row posts-list">
					<div class="col-md-4 col-xs-6 large-xs">
						<div class="pinned-post">
							<div class="img-wrapper">
								<a href="blog-single.html"><div class="overlay">
										<i class="icofont icofont-plus"></i>
									</div></a>
								<img src="<?=$config['site_templateurl'];?>/assets/img/blog/min-1.jpg" alt="" class="img-responsive">
							</div>
							<div class="info-block">
								<h5>May 01, 2016</h5>
								<a href="blog-single.html"><h4>Lorem ipsum dolor sit amet consec tetur adipis</h4></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 large-xs">
						<div class="pinned-post">
							<div class="img-wrapper">
								<a href="blog-single.html"><div class="overlay">
										<i class="icofont icofont-plus"></i>
									</div></a>
								<img src="<?=$config['site_templateurl'];?>/assets/img/blog/min-2.jpg" alt="" class="img-responsive">
							</div>
							<div class="info-block">
								<h5>April 24, 2016</h5>
								<a href="blog-single.html"><h4>Play with the game to get best ctetur adipis today</h4></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 large-xs">
						<div class="pinned-post">
							<div class="img-wrapper">
								<a href="blog-single.html"><div class="overlay">
										<i class="icofont icofont-plus"></i>
									</div></a>
								<img src="<?=$config['site_templateurl'];?>/assets/img/blog/min-3.jpg" alt="" class="img-responsive">
							</div>
							<div class="info-block">
								<h5>March 24, 2016</h5>
								<a href="blog-single.html"><h4>When the music is over turn ioff the light pis</h4></a>
							</div>
						</div>
					</div>
				</div>
				<div class="btn-wrapper">
					<a href="blog.html" class="btn btn-solid "><span>View More</span></a>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="contact-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>Say Hello</span> to Us</h2>
				</div>
				<div class="row contact-details">
					<div class="col-xs-4 contact-detail">
						<div class="icon">
							<i class="icofont icofont-ui-home"></i>
							</div>
						<h4 class="name">Adress</h4>
						<h4 class="info">22, Bardeshi, Amin Bazar</h4>
					</div>
					<div class="col-xs-4 contact-detail">
						<div class="icon">
							<i class="icofont icofont-ui-call"></i>
						</div>
						<h4 class="name">Phone</h4>
						<h4 class="info">15615612645</h4>
					</div>
					<div class="col-xs-4 contact-detail">
						<div class="icon">
							<i class="icofont icofont-envelope"></i>
						</div>
						<h4 class="name">Email</h4>
						<h4 class="info">1065557504@qq.com</h4>
					</div>
				</div>
				<div class="row contact-form">
					<form class="col-md-6 fam-form clearfix" action="contact.php" method="post" name="contact" id="contact-form">
						<div class="fields-group left">
							<div class="field">
								<input name="name" type="text" class="required" title="Please type your name." placeholder="Name...">
							</div>
							<div class="field">
								<input name="email" type="text" placeholder="Email...">
							</div>
							<div class="field">
								<input name="about" type="text" placeholder="Subject...">
							</div>
						</div>
						<div class="fields-group right">
							<div class="field">
								<textarea name="message" cols="15" rows="5" class="required" placeholder="Message..." title="Please type a message."></textarea>
							</div>
							<div class="button-container">
								<button type="submit" name="submit" class="btn btn-solid"><span>Submit</span></button>
							</div>
						</div>
					</form>
					<div class="col-md-6">
						<div id="gmap"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php $this->load->view($config['site_template'].'/footer');?>
<?php $this->load->view($config['site_template'].'/foot_home');?>