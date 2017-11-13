<?php $this->load->view($config['site_template'].'/head');?>
<body>
	<?php $this->load->view($config['site_template'].'/header');?>
	<div class="site-content">
		<!-- Page Heading -->
		<div class="page-head bg-three">
			<div class="parallax-mask"></div>
			<div class="container">
				<h1><?=$category['name']?></h1>
			</div>
		</div>
		
		<!-- Portfolio -->
		<div class="portfolio-wrapper portfolio-page product-list">
			<div class="container">
				<!-- Trigger nivolight on load -->
				<div class="nivo-activator"></div>
				<div class="portfolio">
				<?php if($category['parent'] == 0){ //顶级分类 ?>
					<ul id="fam-filter">
						<li data-filter="*"> <span>All</span></li>
						<?php
						$tmpData = x6cms_thiscategory($category);//var_dump($tmpData);		?>
						<?php foreach ($tmpData as $item): ?>
							<li data-filter=".project-<?=$item['id']?>" class="<?php if($item['id']==$category['id']){ echo 'selected';}?>"><?=$item['name']?></li>
						<?php endforeach; ?>
					</ul>
				<?php } ?>	
					<div class="fam-filterable row">
						<?php foreach ($list as $item): ?>
							
								<div class="item col-md-3 col-sm-4 project-<?=$item['category']?>">
									<div class="project-showcase">
									<a href="<?=$item['url']?>">
										<div class="overlay">
											<h4><?=$item['title']?></h4>
											<h5><?=mb_substr($item['description'],0,100,'utf-8');?>...</h5>
											<a href="<?=$item['url']?>" class="nivo-trigger" data-lightbox-gallery="gallery1">
											<div class="icon"><i class="icofont icofont-arrow-right"></i></div></a>
										</div>
										<img src="<?=$item['thumb']?>" alt="" class="img-responsive">
									</a>	
									</div>
								</div>
						<?php endforeach; ?>
						
						
					</div>
				</div>
				<div class="page"><?=isset($pagestr)?$pagestr:''?></div>
				<!--
				<div class="pagination-wrapper">
					<ul class="pagination">
						<li><a href="#"><i class="icofont icofont-rounded-left"></i></a></li>
						<li><a href="#" >1</a></li>
						<li><a href="#" class="active">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#"><i class="icofont icofont-rounded-right"></i></a></li>
					</ul>
				</div>
				-->
			</div>
		</div>

	</div>
<?php $this->load->view($config['site_template'].'/foot');?>