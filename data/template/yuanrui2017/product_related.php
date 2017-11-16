<div class="row similar-projects related-product" style="margin-top:30px;">
	<div class="nivo-activator"></div>
	<?php 
	$tmpData = x6cms_related($detail,4);
	if($tmpData && count($tmpData)){
	?>
	<h3 class="col-xs-12"><?=lang('related')?></h3>
	<?php foreach ($tmpData as $item): ?>
	
		<div class="col-sm-3">
			<div class="project-showcase">
				<a href="<?=$item['url']?>">
					<div class="overlay">
						<h4><?=$item['title']?></h4>
						<h5><?=$item['categoryname']?></h5>
						<a href="<?=$item['url']?>" class="nivo-trigger" data-lightbox-gallery="gallery1">
						<div class="icon"><i class="icofont icofont-arrow-right"></i></div></a>
					</div>
					<img src="<?=$item['thumb']?>" alt="" class="img-responsive">
				</a>
			</div>
		</div>
		
	<?php endforeach; ?>
	<?php } ?>
	<div class="col-xs-12 clearfix simple-links">
		<?php if(isset($detail['pre']['id'])):?><a href="<?=$detail['pre']['url']?>" class="simple-link left"><i class="icofont icofont-curved-double-left"></i><?=$detail['pre']['title']?></a><?php endif;?>
		<?php if(isset($detail['next']['id'])):?><a href="<?=$detail['next']['url']?>" class="simple-link right"><?=$detail['next']['title']?><i class="icofont icofont-curved-double-right"></i></a><?php endif;?>
	</div>
</div>