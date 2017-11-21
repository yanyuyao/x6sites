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
	<div class="news-banner">
		<img src="<?=$category['thumb']?>">
	</div>
</div>
<!--banner end-->

<div class="flw">
	<div class="container">
		<div class="family-link-bt">
			<a href="/index.php">元瑞首页 &gt;&gt;</a><a href="/index.php?/category/aboutus">加入元瑞 &gt;&gt;</a> <?=$detail['title']?>
		</div>
	</div>
</div>
<!--info start-->
	<div class="container">
		<div class="news-info-contain">
			<div class="news-info-contain-bt">
				<?=$detail['title']?>
			</div>
			<div class="news-info-contain-date">
				<?=date("Y-m-d",strtotime($detail['puttime']))?>
			</div>
			<?=$detail['content']?>
		</div>
	</div>
<!--info end-->

</main>
<?php $this->load->view($config['site_template'].'/footer');?>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>