<?php $this->load->view($config['site_template'].'/head');?>

<div class="hpage hpage_2 flw">
<?php $this->load->view($config['site_template'].'/header');?>
<main id="main" class="page_content">	
<!--swiper start-->
<div class="main_sl flw">
	<img src="<?=$config['site_templateurl'];?>/img/index-topborder.png" class="index-topborder">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/about-banner1.png"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/about-banner2.png"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/about-banner3.png"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/about-banner4.png"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/about-banner5.png"></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
	</div>
</div>	
<!--swiper end-->
<!--join start-->
	<div class="_section_item flw">
		<div class="container">
			<div class="row about-about">
				<div class="about-about-bt1"><?=$category['name']?></div>
				<?=$category['content']?>
				<div class="about-about-button">
					<a href="#"><input type="button" value="社会招聘"></a>
					<a href="#"><input type="button" value="校园招聘"></a>
				</div>
			</div>
		</div>
	</div>
<!--join end-->

<!--about-middle-img start-->
	<div class="index-kitchen">
		<img src="<?=$category['thumb']?>">
	</div>
<!--about-middle-img end-->

						
						
<div class="event_main_view flw">
	<div class="container">
		<div class="about-about-bt1">我们在元瑞</div>
			<?php 
			$tmpData = x6cms_modellist('article', 43,'',10);
			?>
			<?php foreach ($tmpData as $k=>$item): ?>
				<?php if($k%2){ ?>
					<div class="list_">
					<div class="box_img">
						<a href="#">
							<img src="<?=$item['thumb']?>" alt="img event">
						</a>
					</div>
					<div class="box_sumary_ about-list-text">
						<h3><?=$item['title']?></h3>
						<?=$item['content']?>
					</div>
				</div>
				<?php }else{ ?>
				<div class="list_">
					<div class="box_sumary_ about-list-text">
						<h3><?=$item['title']?></h3>
						<?=$item['content']?>
					</div>
					<div class="box_img">
						<a href="#">
							<img src="<?=$item['thumb']?>" alt="img event">
						</a>
					</div>
				</div>
				<?php } ?>
			<?php endforeach; ?>
		
		
	</div>
</div>
</main>
<?php $this->load->view($config['site_template'].'/footer');?>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>