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
				<!-- -->
		
				<!--<div id="gmap" class="h2"></div>-->
				<div class="contact-details">
					<div class="section-title" style="margin-bottom:30px;">
						<h2><span>联系</span> 我们</h2>
						<h3 style="margin-top:20px;border-top:1px solid #81b441;padding-top:15px;"><span>Get in Touch</span> With Us</h3>
					</div>
					<div class="col-xs-6">
						<div class="contact-detail bordered">
							<div class="icon">
								<i class="icofont icofont-ui-call"></i>
							</div>
							<h4 class="name">Phone</h4>
							<h4 class="info"><?=$config['system_mobile']?></h4>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="contact-detail bordered">
							<div class="icon">
								<i class="icofont icofont-envelope"></i>
							</div>
							<h4 class="name">Email</h4>
							<h4 class="info"><?=$config['system_email']?></h4>
						</div>
					</div>
				</div>
				<div class="row contact-from" style="margin-top:30px;">
					<form class="fam-form clearfix" action="<?=site_url('post/guestbook'.$langurl)?>" method="post" name="contact" id="guestbook">
						<input type="hidden" name="category" id="category" value="<?=$category['id']?>">
						<div class="fields-group left">
							<!--
							<div class="field">
								<input type="text" name="title" id="title" size="40" class="txt validate" validtip="" placeholder="标题" />
							</div>
							-->
							<div class="field">
								<input type="text" name="author" id="author" class="txt validate" validtip="required" placeholder="联系人"  />
							</div>
							<div class="field">
								<input type="text" name="email" id="email" class="txt validate" validtip="required,email" placeholder="邮箱" />
							</div>
							<div class="field">
								<input type="text" name="phone" id="phone" class="txt"  validtip="required,mobile" placeholder="联系电话" />
							</div>
						</div>
						<div class="fields-group right">
							<div class="field">
								<textarea class="txtarea validate" cols="15" rows="5" name="description" id="description" validtip="required" placeholder="咨询内容"></textarea>
							</div>
							<div class="button-container">
								<button type="submit" name="submit" class="btn btn-solid"><span>提交</span></button>
							</div>
						</div>
						<!-- 
						
							<div class="aboutcontent">
													<form class="fam-form clearfix" name="guestbook" id="guestbook" action="" onsubmit="return subGuestBook('<?=site_url('post/guestbook'.$langurl)?>')" method="post">
													<input type="hidden" name="category" id="category" value="<?=$category['id']?>">
													<table class="guestbook">
														<tr><td width="100"><?=lang('title')?><font color="red"> *</font></td><td><input type="text" name="title" id="title" size="40" class="txt validate" validtip="required"></td></tr>
														<tr><td><?=lang('author')?><font color="red"> *</font></td><td><input type="text" name="author" id="author" class="txt validate" validtip="required"></td></tr>
														<tr><td><?=lang('email')?><font color="red"> *</font></td><td><input type="text" name="email" id="email" class="txt validate" validtip="required,email"></td></tr>
														<tr><td><?=lang('phone')?></td><td><input type="text" name="phone" id="phone" class="txt"></td></tr>
														<tr><td><?=lang('content')?><font color="red"> *</font></td><td height="100">
														<textarea class="txtarea validate" cols="40" rows="5" name="content" id="content" validtip="required"></textarea>
														</td></tr>
														<tr><td></td><td height="40"><input type="submit" value="<?=lang('submit')?>" class="btn btn-solid"><input type="reset" value="<?=lang('reset')?>" class="btn"></td></tr>
													</table>
													</form>
							</div>
						-->
					</form>
					
				</div>
		<!-- -->
											
						
					</div>
				</div>
			</div>
		</div>
	
</div>
<?php $this->load->view($config['site_template'].'/foot');?>