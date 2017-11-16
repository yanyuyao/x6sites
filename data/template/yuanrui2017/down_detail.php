<?php $this->load->view($config['site_template'].'/head');?>
<body>
	<?php $this->load->view($config['site_template'].'/header');?>
<div class="site-content">
		<!-- Page Heading -->
		<div class="page-head bg-four">
			<div class="parallax-mask"></div>
			<div class="container">
				<h1><?=$category['top']['name']?></h1>
			</div>
		</div>
		
	<div class="blog-page-wrapper">
			<div class="container">
				<div class="row">
					
					<div class="col-md-4 sidebar">
						
						<!-- category -->
						<?php 
								$tmpData = x6cms_thiscategory($category);
								if($tmpData && count($tmpData)){
								
						?>
						<div class="sidebar-widget categories-list">
							<h3 class="widget-title"><i class="icofont icofont-curved-double-right"></i><?=$category['top']['name']?></h3>
							
							<div class="widget-content">
								<ul class="categories">
									<?php foreach ($tmpData as $item): ?>
										<li><a href="<?=$item['url']?>"><?=$item['name']?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<?php } ?>
						<div class="sidebar-widget text-box">
							<h3 class="widget-title"><i class="icofont icofont-curved-double-right"></i>关于我们</h3>
							<div class="widget-content">
								<p><?=x6cms_fragment('right_box_slogan')?></p>
							</div>
						</div>
						
						<div class="sidebar-widget advertise-space">
							<div class="overlay"></div>
							<div class="content">
								<h2><?=$config['site_name']?></h2>
								<i class="icofont icofont-ui-call main"></i>
								<h3><?=$config['system_mobile']?></h3>
								<p><i class="icofont icofont-envelope"></i><?=$config['system_email']?></p>
							</div>
						</div>
						
					</div>					
					<div class="col-md-8 posts-list articles-list">
													<div class="aboutcontent">
													
														<div class="news_ctn"><?=$detail['content']?></div>
														<div class="context feature" style="margin-bottom:50px;">
															<h3 style="margin-bottom:20px;"><?=lang('clicktodown')?></h3>
															<a href="<?=$detail['downurl']?>" target="_blank"><div class="icon"><i class="icofont icofont-download"></i></div></a>
														</div>
														
															
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
					</div>
		<div class="rightbottom"></div>
	</div>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>