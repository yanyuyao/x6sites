<?php $this->load->view($config['site_template'].'/head');?>
<body>
	<?php $this->load->view($config['site_template'].'/header');?>
	<div class="site-content product-detail">
	<!-- Page Heading -->
	<?php //var_dump($detail);?>
		<div class="page-head bg-three">
			<div class="parallax-mask"></div>
			<div class="container">
				<h1><?=$detail['title']?></h1>
			</div>
		</div>
		<div class="portfolio-single-wrapper">
				<div class="container">
					<div class="img-wrapper">
						<div class="row info-block">
							<div class="col-md-4 col-sm-5 description">
								<img src="<?=$detail['thumb']?>" class="img-responsive" alt="" style="margin-bottom:30px;">
							</div>
							<div class="col-md-8 col-sm-7 details">
								<h2><?=$detail['title']?></h2>
								<ul style="margin-top:30px;">
									<li><span>品牌：</span><?=$detail['categoryname']?></li>
									<li><span>价格：</span><?php if($detail['price'] == '0' || $detail['price'] == '0.00'){ echo '请联系我们获得报价'; }else{echo $detail['price'];}?></li>
								</ul>
								<p><?=$detail['description']?></p>
								<!--
								<div class="social-media">
									<span>Share</span>
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
								</div>
								-->
							</div>
						</div>
						<div class="row detail_detail_row">
							<h2 class="detail_desc">产品详情</h2>
							<?=$detail['content']?>
						</div>
					</div>
					
					<?php $this->load->view($config['site_template'].'/product_related');?>
					<div style="margin-top:30px;">
						<a href="javascript:window.history.go(-1);" class="btn btn-solid">返&nbsp;&nbsp;&nbsp;&nbsp;回</a>
					</div>
				</div>
		</div>	
	</div>
<?php $this->load->view($config['site_template'].'/foot');?>