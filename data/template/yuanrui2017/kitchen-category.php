<?php $this->load->view($config['site_template'].'/head');?>

<div class="hpage hpage_2 flw">
<?php $this->load->view($config['site_template'].'/header');?>
<main id="main" class="page_content">	
<!--swiper start-->
	<div class="main_sl flw">
		<img src="<?=$config['site_templateurl'];?>/img/index-topborder.png" class="index-topborder">
	</div>	
<!--swiper end-->

<!--banner start-->
<div class="flw">
	<div class="container">
		<div class="family-link-bt">
			<a href="/index.php">元瑞首页 >></a><a href="/index.php?/category/diyufengwei"> 美食厨房 >></a> <?=$category['name']?>
		</div>
	</div>
<!--banner end-->
<!--list start-->
	<div class="classes_enroll flw">
		<div class="container">
			<div class="item_ flw">
				<?php foreach ($list as $item): ?>
					<div class="col-md-3 col-lg-3 kitchen-list">
						<a href="<?=$item['url']?>">
							<img src="<?=$item['thumb']?>" width="100%">
							<div class="kitchen-singlelist-bt"><?=$item['title']?></div>
						</a>
					</div>
				<?php endforeach; ?>
					
				
			</div>
		</div>
	</div>
<!--list end-->


</main>
<?php $this->load->view($config['site_template'].'/footer');?>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>