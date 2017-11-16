<?php $this->load->view($config['site_template'].'/head');?>
<body>
	<?php $this->load->view($config['site_template'].'/header');?>
<div class="site-content">
		<!-- Page Heading -->
		<div class="page-head bg-four">
			<div class="parallax-mask"></div>
			<div class="container">
				<h1><?=$category['top']['name']?></h1>
			</div>
		</div>
		
		<!-- Blog Page -->
		<div class="blog-page-wrapper article-detail">
			<div class="container">
				<div class="row">
					<div class="col-md posts-list ">
						<div class="blog-post">
						<!--
							<div class="img-wrapper">
								<img src="assets/img/blog/big-1.jpg" alt="" class="img-responsive">
							</div>
							-->
							<div class="info-block">
								<!--<h3 class="category"><?=$detail['title']?></h3>-->
								<h2><?=$detail['title']?></h2>
								<div class="meta two">
									<h5 class="icon"><i class="icofont icofont-ui-clock"></i><?=$detail['puttime']?></h5>
									<h5 class="icon"><i class="icofont icofont-ui-click"></i><?=lang('hits')?>:<?=$detail['hits']?></h5>
								</div>
								<div>
									<?=$detail['content']?>
								</div>
								<?php $this->load->view($config['site_template'].'/article_related');?>
								<!--
								<div class="post-footer clearfix">
									<div class="social-media">
										<span>Share</span>
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
										<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
									</div>
									<div class="tags">
										<span>Tags</span>
										<a href="#">Website <span>,</span></a>
										<a href="#">Travel <span>,</span></a>
										<a href="#">Blog <span>,</span></a>
									</div>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

	</div>
<?php $this->load->view($config['site_template'].'/foot');?>