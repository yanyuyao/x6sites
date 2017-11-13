<div class="portfolio-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>产品</span> 中心</h2>
				</div>
				<!-- Trigger nivolight on load -->
				<div class="nivo-activator"></div>
				<div class="portfolio">
					<ul id="fam-filter">
						<li class="selected" data-filter="*"> <span>All</span></li>
						<?php 
						$product_category = $this->Cache_model->loadCategoryByDir('product');
						//var_dump($product_category);
						$tmpData = x6cms_thiscategory($product_category);
						
						?>
						<?php foreach ($tmpData as $item): ?>
						<li  data-filter=".<?=$item['name']?>"><?=$item['name']?></li>
						<?php endforeach; ?>
					</ul>
					<div class="fam-filterable row">
						<?php $tmpData = x6cms_modellist('product',0,'default',10,0);?>
						<?php foreach($tmpData as $item):
						//var_dump($item);
						?>
						
							
						<div class="item col-md-3 col-sm-4 <?=$item['categoryname']?>">
							<div class="project-showcase">
								<div class="overlay">
									<h4><?=$item['title']?></h4>
									<h5><?=$item['categoryname']?></h5>
									<a href="<?=$item['thumb']?>" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<div class="icon"><i class="icofont icofont-plus"></i></div></a>
								</div>
								<img src="<?=$item['thumb']?>" alt="" class="img-responsive">
							</div>
						</div>
						<?php endforeach;?>
						<?php unset($tempData,$item);?>
				
					</div>
				</div>
				<div class="btn-wrapper">
					<a href="<?=site_url('category/product')?>" class="btn btn-solid"><span>所有产品</span></a>
				</div>
			</div>
		</div>