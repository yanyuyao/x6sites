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
			<a href="index.html">元瑞首页 >></a><a href="/index.php?/category/product"> 元瑞家族 >></a><a href="/index.php?/category/product"> 按应用用途划分 >></a> <?=$category['name']?>
		</div>
		<div class="family-banner">
			<?=$category['content']?>
		</div>
	</div>
<!--banner end-->

<!--list start-->
	<div class="classes_enroll flw">
		<div class="container">
			<div class="item_ flw">
						<?php foreach ($list as $item): ?>
								<div class="col-md-6 col-lg-6">
									<a href="<?=$item['url']?>">
										<img src="<?=$item['thumb']?>" width="100%">
										<div class="family-single-list-bt">
											<?=$item['title']?>
										</div>
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