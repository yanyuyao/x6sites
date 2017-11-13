<?php $this->load->view($config['site_template'].'/head');?>
<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3><?=$category['top']['name']?></h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
				<?php $tmpData = x6cms_thiscategory($category);?>
				<?php foreach ($tmpData as $item): ?>
				<li class="level<?=$item['level']?><?php if($item['id']==$category['id']):?> active<?php endif;?>"><a href="<?=$item['url']?>"><?=$item['name']?></a></li>
				<?php endforeach; ?>
			</ul>
			<div class="contact">
			<?=x6cms_fragment('contact')?>
			</div>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop"><?=x6cms_location($category,' > ');?></div>
		<div class="rightmiddle">
			<div class="aboutcontent">
				<h1><?=$detail['title']?></h1>
				<div class="news_ctn"><?=$detail['content']?></div>
				<div class="context">
					<ul>
					<?php if(isset($detail['pre']['id'])):?><li><?=lang('pre')?>:<a href="<?=$detail['pre']['url']?>"><?=$detail['pre']['title']?></a></li><?php endif;?>
					<?php if(isset($detail['next']['id'])):?><li><?=lang('next')?>:<a href="<?=$detail['next']['url']?>"><?=$detail['next']['title']?></a></li><?php endif;?>
					</ul>
				</div>
				<div class="context">
					<?=lang('related')?>:
					<?php $tmpData = x6cms_related($detail);?>
					<?php foreach ($tmpData as $item): ?>
					<li><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
					<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>