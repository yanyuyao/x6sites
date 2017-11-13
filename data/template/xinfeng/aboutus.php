<?php $this->load->view($config['site_template'].'/head');?>
<body>
	<?php $this->load->view($config['site_template'].'/header');?>

	<!-- Site Content -->
	<div class="site-content">

		<!-- Page Heading -->
		<div class="page-head bg-one">
			<div class="parallax-mask"></div>
			<div class="container">
				<h1><?=$category['top']['name']?></h1>
			</div>
		</div>

		<!-- Featured Article -->
		<div class="featured-article-wrapper second-style">
			<div class="container">
				<article class="row">
					<div class="col-md-6 info-block">
						<h3><?=$category['name']?></h3>
						<div class="colored-line"></div>
						<h2><?=$category['title']?></h2>
						<?=$category['content']?>
						<a href="/index.php?/category/support" class="btn btn-solid"><span>联系我们</span></a>
					</div>
					<div class="col-md-6">
						<div class="img-wrapper">
							<img src="<?=$category['thumb']?>" alt="" class="img-responsive">
						</div>
					</div>
				</article>
			</div>
		</div>
		
	

		<!-- 推荐产品3个 -->
		<?php $this->load->view($config['site_template'].'/home-product-promotion');?>

		<!-- Big CTA -->
		<div class="big-cta-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>我们无法改变空气污染</h2>
						<h2 style="margin:30px 0px;">但可以让你在室内<span style="font-size:1.5em">自由呼吸</span></h2>
						<a href="#" class="btn btn-solid "><span>Read More</span></a>
					</div>
				</div>
			</div>
		</div>
	

		<!-- Partners -->
		<div class="partners-wrapper style-two">
			<div class="container">
				<div class="section-title">
					<h2><span>ours</span> 合作品牌</h2>
				</div>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-12 clearfix">
						<div class="partners">
							<div class="partner top">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-9.png" alt="">
							</div>
							<div class="partner top">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-10.png" alt="">
							</div>
							<div class="partner top">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-11.png" alt="">
							</div>
							<div class="partner top last">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-12.png" alt="">
							</div>
							<div class="partner bottom">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-13.png" alt="">
							</div>
							<div class="partner bottom">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-14.png" alt="">
							</div>
							<div class="partner bottom">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-15.png" alt="">
							</div>
							<div class="partner bottom last">
								<img src="<?=$config['site_templateurl'];?>/assets/img/logos/img-16.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<!-- Footer -->
<?php $this->load->view($config['site_template'].'/foot');?>