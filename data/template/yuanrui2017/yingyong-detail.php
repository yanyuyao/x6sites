<?php $this->load->view($config['site_template'].'/head');?>

<div class="hpage hpage_2 flw">
<?php $this->load->view($config['site_template'].'/header');?>
<main id="main" class="page_content">	
<!--swiper start-->
	<div class="main_sl flw">
		<img src="<?=$config['site_templateurl'];?>/img/index-topborder.png" class="index-topborder">
	</div>	
<!--swiper end-->

<div class="flw">
	<div class="container margin-bottom50">
		<div class="family-link-bt">
			<a href="/index.php">元瑞首页 >></a><a href="/index.php?/category/product"> 元瑞家族 >></a><a href="<?=$detail['categoryurl']?>"> <?=$category['name']?> >></a> <?=$detail['title']?>
		</div>
		<div class="family-banner">
			<img src="<?=$detail['thumb']?>" class="family-single-info-banner">
		</div>
		<div class="family-list-bt family-single-info-bt">
			<?=$detail['title']?>
		</div>
		<div class="family-single-info-text">
			<?=$detail['content']?>
		</div>
	</div>
<!--banner end-->
</main>
<?php $this->load->view($config['site_template'].'/footer');?>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>