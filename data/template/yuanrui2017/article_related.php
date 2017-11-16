<!-- 关联文章 -->		
<div class="row similar-projects related-article" style="margin-top:30px;">
	<div class="nivo-activator"></div>
	<div class="col-xs-12 clearfix simple-links">
		<?php if(isset($detail['pre']['id'])):?><a href="<?=$detail['pre']['url']?>" class="simple-link left"><i class="icofont icofont-curved-double-left"></i><?=$detail['pre']['title']?></a><?php endif;?>
		<?php if(isset($detail['next']['id'])):?><a href="<?=$detail['next']['url']?>" class="simple-link right"><?=$detail['next']['title']?><i class="icofont icofont-curved-double-right"></i></a><?php endif;?>
	</div>
	<div class="nivo-activator"></div>
	
	<?php 
		$tmpData = x6cms_related($detail);
		if($tmpData && count($tmpData)){
	?>
		<div class="context">
			<h3><?=lang('related')?>:</h3>
			<ul>
			<?php foreach ($tmpData as $item): ?>
			<li><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php 
		}
	?>
	
</div>
<!-- end -->
								