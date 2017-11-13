<?php $this->load->view($config['site_template'].'/head_home');?>
<body>

	<?php $this->load->view($config['site_template'].'/header');?>
	<style>
		div.features.big .icon{
			width:180px;
			height:180px;
		}
	</style>
	<!-- Site Content -->
	<div class="site-content">

		<!-- Main Slider -->
		<?php $this->load->view($config['site_template'].'/slider');?>
		
		<!-- Features -->
		<div class="features-wrapper">
			<div class="container">
				<div class="section-title">
					<h2>Welcome to <span>新风系统</span></h2>
				</div>
				<div class="row features big">
					<div class="col-md-4 col-sm-6 col-xs-12 feature">
						<div class="icon"><i class="icofont"><img src="<?=$config['site_templateurl'];?>/images/hp-1.png" /></i></div>
						<h3>新鲜空气</h3>
						<p>提供新鲜空气。一年365天，每天24小时源源不断为室内提供新鲜空气，不用开窗也能享受大自然的新鲜空气，满足人体的健康需求。</p>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 feature">
						<div class="icon"><i class="icofont"><img src="<?=$config['site_templateurl'];?>/images/hp-2.png" /></i></div>
						<h3>驱除有害气体</h3>
						<p>驱除有害气体。有效驱除油烟异味、CO2、香烟味、细菌、病毒等各种不健康或有害气体，可避免家里小孩、爱人和老人深受二手烟危害。</p>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 feature">
						<div class="icon"><i class="icofont"><img src="<?=$config['site_templateurl'];?>/images/hp-3.png" /></i></div>
						<h3>降低能耗</h3>
						<p>降低能耗。一年四季持续运转，用电量可能不及你的一台冰箱，并且能够回收排出室外空气中的能量，最大程度的减少了夏季或冬季室内的冷源和热源的损失，减少了空调的能耗。</p>
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
						<h2>提供<span>室内空气净化</span>治理的最佳解决<span>方案</span></h2>
						<p class="highlight">我们的目标是：立足济南市场，以客户需求为中心，为小区、别墅、会所、酒店、医院、幼儿园提供室内空气净化治理的最佳解决方案；让千万个客户远离室内空气污染，享受健康好生活。</p>
						<a href="<?=site_url('category/aboutus'.$langurl)?>" class="btn btn-solid"><span>更多</span></a>
					</div>
					<div class="col-md-6">
						<div class="img-wrapper">
							<img src="<?=$config['site_templateurl'];?>/images/aboutus.png" alt="" class="img-responsive">
						</div>
					</div>
				</article>
			</div>
		</div>

		<!-- Portfolio -->
		<?php $this->load->view($config['site_template'].'/home-product');?>

		<!-- Services -->
		<div class="services-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>新风系统</span> 优势</h2>
				</div>
				<div class="row services">
					<div class="col-md-3 col-xs-6 services-col">
						<div class="service">
							<div class="content">
								<h3>新鲜空气</h3>
								<i class="icofont icofont-tree-alt"></i>
								<p>每天24小时源源不断为室内提供新鲜空气，不用开窗也能享受大自然的新鲜空气，满足人体的健康需求。</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>驱除有害气体</h3>
								<i class="icofont icofont-umbrella"></i>
								<p>有效驱除油烟异味、CO2、细菌、病毒等各种不健康或有害气体，可避免家人深受二手烟危害。</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 services-col space-top">
						<div class="service">
							<div class="content">
								<h3>避免“空调病”</h3>
								<i class="icofont icofont-hotel-alt"></i>
								<p>让千万个客户远离室内空气污染，享受健康好生活，避免“空调病”</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>防霉除异味</h3>
								<i class="icofont icofont-brand-airtel"></i>
								<p>将室内潮湿污浊空气排出，根除异味，防止发霉和滋生细菌，有利于延长建筑及家具的使用寿命。</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 services-col">
						<div class="service">
							<div class="content">
								<h3>减少噪音污染</h3>
								<i class="icofont icofont-bell"></i>
								<p>减少噪音污染。无需忍受开窗带来的纷扰，使室内更安静更舒适。</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>防尘</h3>
								<i class="icofont icofont-building"></i>
								<p>防尘。避免开窗带来大量的灰尘，有效过滤室外空气，保证进入室内的空气洁净。</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 services-col space-top">
						<div class="service">
							<div class="content">
								<h3>降低能耗</h3>
								<i class="icofont icofont-sand-clock"></i>
								<p>一年四季持续运转，并且能够回收排出室外空气中的能量，最大程度的减少了室内的冷源和热源的损失。</p>
							</div>
						</div>
						<div class="service">
							<div class="content">
								<h3>安全方便</h3>
								<i class="icofont icofont-library"></i>
								<p>避免开窗引起的财产和人身安全隐患。即使家里没人，也能自动新风换气。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Fun facts -->
		<!--
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
		-->
		<!-- Team -->
		<?php $this->load->view($config['site_template'].'/home-product-promotion');?>

		<!-- Teaser -->
		<div class="teaser-wrapper" style="background:#fff;text-align:center;">
			<div class="container-fluid">
				<div class="row">
					<div class="img-wrapper col-md-12">
						<img src="<?=$config['site_templateurl'];?>/images/home-lanshe.jpg" alt=" " >
					</div>
					
				</div>
			</div>
		</div>
		<!--
		<div class="teaser-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="img-wrapper col-md-6">
						<img src="<?=$config['site_templateurl'];?>/images/home-center-baner2.jpg" alt=" " >
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
		-->
		<!-- Testimonials -->
		<?php $this->load->view($config['site_template'].'/case_center');?>

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
		<!--
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
		-->

		<!-- Contact Form -->
	<style>
		#contactus div.icon { padding-top:16px;}
	</style>
		<div class="contact-wrapper" id="contactus">
			<div class="container">
				<div class="section-title">
					<h2><span>联系</span> 我们</h2>
				</div>
				<div class="row contact-details">
					<div class="col-xs-4 contact-detail">
						<div class="icon">
							<i class="icofont icofont-social-wechat"></i>
							</div>
						<h4 class="name">微信</h4>
						<h4 class="info">
							<img src="/images/xinfeng_weixin.jpg" style="width:200px;" />
						</h4>
					</div>
					<div class="col-xs-4 contact-detail">
						<div class="icon">
							<i class="icofont icofont-ui-call"></i>
						</div>
						<h4 class="name">电话</h4>
						<h4 class="info">15615612645</h4>
					</div>
					<div class="col-xs-4 contact-detail">
						<div class="icon">
							<i class="icofont icofont-envelope"></i>
						</div>
						<h4 class="name">邮箱</h4>
						<h4 class="info">1065557504@qq.com</h4>
					</div>
				</div>
				<!--
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
				-->
			</div>
		</div>

		
	</div>

	<?php $this->load->view($config['site_template'].'/foot_home');?>