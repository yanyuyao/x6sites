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
						<!--
						<div class="sidebar-widget">
							<div class="search-bar">
								<form action="#" >
									<div class="field">
										<input type="text" name="search" placeholder="Type and Hit Enter">
										<button><i class="icofont icofont-search-alt-1"></i></button>
									</div>
								</form>
							</div>
						</div>
						-->
						
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
						<!-- tags -->
						<!--
						<div class="sidebar-widget">
							<h3 class="widget-title"><i class="icofont icofont-curved-double-right"></i>Tags</h3>
							<div class="widget-contet">
								<ul class="tags">
									<li><a href="#"><span class="recent-post">Website</span></a></li>
									<li><a href="#"><span class="recent-post">Facebook</span></a></li>
									<li><a href="#"><span class="recent-post">Google</span></a></li>
									<li><a href="#"><span class="recent-post">Photography</span></a></li>
									<li><a href="#"><span class="recent-post">Social Media</span></a></li>
									<li><a href="#"><span class="recent-post">Laravel</span></a></li>
									<li><a href="#"><span class="recent-post">Nodejs</span></a></li>
									<li><a href="#"><span class="recent-post">Wordpress</span></a></li>
								</ul>
							</div>
						</div>
						-->
						<div class="sidebar-widget text-box">
							<h3 class="widget-title"><i class="icofont icofont-curved-double-right"></i>关于我们</h3>
							<div class="widget-content">
								<p><?=x6cms_fragment('right_box_slogan')?></p>
							</div>
						</div>
						<!--
						<div class="sidebar-widget text-box">
							<h3 class="widget-title"><i class="icofont icofont-curved-double-right"></i>联系我们</h3>
							<div class="widget-content">
								<p><?=x6cms_fragment('contact')?></p>
							</div>
						</div>
						-->
						<!-- 右侧联系方式box -->
						
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
													<h1><?=$detail['title']?></h1>
													<div class="news_ctn" style="margin:15px auto;">
														<table class="zhaopin" border="0" width="100%">
															<tr>
																<td width="100"><?=lang('hr_city')?></td>
																<td width="200"><?=$detail['city']?></td>
																<td width="100"><?=lang('hr_num')?></td>
																<td width="200"><?=$detail['num']?></td>
															</tr>
															<tr>
																<td width="100"><?=lang('hr_year')?></td>
																<td width="200" colspan="3"><?=$detail['year']?></td>
															</tr>
															<tr><td width="100" valign="top"><?=lang('hr_content')?></td>
															<td colspan="3"><?=$detail['content']?></td></tr>
														</table>
													</div>
													<div class="context" style="border-top:1px solid #ddd;padding-top:10px;">
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
			</div>
		</div>
	
</div>
<?php $this->load->view($config['site_template'].'/foot');?>