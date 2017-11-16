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
						<?=$category['description']?>
					</div>
					<div class="col-md-6">
						<div class="img-wrapper">
							<?php if($category['thumb']){?>
							<img src="<?=$category['thumb']?>" alt="" class="img-responsive">
							<?php }else{ ?>
							<img src="<?=$config['site_templateurl'];?>/images/default_page.jpg" alt="" class="img-responsive">
							<?php }?>
						</div>
					</div>
				</article>
				
				<div class="row" style="margin-top:50px;">
					<article>
						<?=$category['content']?>
					</article>
				</div>	
				
						<div>
							<a href="/" class="btn btn-solid"><span>返回首页</span></a>
						</div>
			</div>
		</div>
	</div>
	
	<!-- Footer -->
<?php $this->load->view($config['site_template'].'/foot');?>