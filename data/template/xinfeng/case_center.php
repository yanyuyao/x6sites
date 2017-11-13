	<style>
		#casecenter div.owl-prev,#casecenter div.owl-next { padding-top:8px;}
	</style>
	<div class="testimonials-wrapper" id="casecenter">
			<div class="container">
				<div class="section-title">
					<h2><span>工程</span> 案例</h2>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div id="fam-testimonials">
							<?php $tmpData = x6cms_modellist('article',26,'asc',17,0); //var_dump($tmpData);?>
							<?php foreach($tmpData as $item):
							?>
							<div class="item testimonial">
								<img src="<?=$item['thumb']?>" alt="" class="img-responsive" style="width:187px;height:201px;">
								<div class="info-block">
									<h1><?=$item['title']?></h1>
									<p><?=$item['description']?></p>
									<a href="<?=$item['url']?>"><h5>查看</h5></a>
								</div>
							</div>
							<?php endforeach;?>
							<?php unset($tempData,$item);?>
						</div>
						<div class="qoute-icon">
							<i class="icofont icofont-quote-left"></i>
						</div>
					</div>
				</div>
			</div>
		</div>