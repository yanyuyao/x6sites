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
		<div class="family-banner">
			<img src="<?=$category['thumb']?>">
		</div>
		<div class="kitchen-button">
			<a href="/index.php?/category/diyufengwei"><input type="button" value="按地域风味查看"></a>
			<a href="/index.php?/category/yingyongfenlei"><input type="button" value="按应用分类查看"></a>
		</div>
	</div>
<!--banner end-->

<!--list start-->
	<div class="classes_enroll flw">
		<div class="container">
			<div class="item_ flw">
						<?php
							//var_dump($category);
							$tmpData = x6cms_thiscategory($category);
							?>
						<?php foreach ($tmpData as $item): ?>
							<?php if($item['parent'] != $category['id']){continue;}?>
								
								<div class="row">
									<a href="<?=$item['url']?>"><div class="kitchen-list-bt"><?=$item['name']?></div></a>
								
									<?php $list_data = x6cms_modellist('article',$item['id'],'',4);
									//var_dump($list_data);
									?>
									<?php foreach ($list_data as $kk=>$d): ?>
										<div class="col-md-3 col-lg-3 kitchen-list">
											<a href="<?=$d['url']?>"><img src="<?=$d['thumb']?>" width="100%"></a>
										</div>
									<?php endforeach; ?>
										<div class="kitchen-yy-more">
											<a href="kitchen-singlelist.html"><input type="button" value="载入更多......"></a>
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