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
			<a href="/index.php">元瑞首页 >></a><a href="/index.php?/category/product"> 元瑞家族 >></a> 按应用用途划分
		</div>
		<div class="family-banner">
			<img src="img/family-banner1.png">
		</div>
	</div>
<!--banner end-->

<!--list start-->
	<div class="classes_enroll flw">
		<div class="container">
			<div class="item_ flw">
						<?php $tmpData = x6cms_thiscategory($category);//var_dump($tmpData);		?>
						<?php foreach ($tmpData as $item): ?>
							
								<div class="col-md-6 col-lg-6">
									<div class="family-list-bt">
										<?=$item['name']?>
									</div>
									<div class="classes_it">
										<div class="box_img">
											<a href="<?=$item['url']?>"><img src="<?=$item['thumb']?>" alt="family-list"></a>
										</div>
									</div>
									<div class="family-list-button">
										<a href="<?=$item['url']?>"><input type="button" value="查看更多......"></a>
									</div>
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