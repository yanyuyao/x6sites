<?php $this->load->view($config['site_template'].'/head');?>
<body>
<?php if (count($actionurl)>0): ?>
<script language="javascript" type="text/javascript">
var second = 3;
setInterval("redirect()", 1000);
function redirect(){
	if (second < 0){
		location.href = '<?=$actionurl[0]['url']?>';
	}else{
		$("#totalSecond").text(second--);
	}
}
</script>
<?php endif; ?>
	<?php $this->load->view($config['site_template'].'/header');?>
<div class="site-content">
		<!-- Page Heading -->
		<div class="page-head bg-four">
			<div class="parallax-mask"></div>
			<div class="container">
				<h1>系统提示</h1>
			</div>
		</div>
		
	<div class="blog-page-wrapper">
			<div class="container">
				<div class="row">
					
					<div class="col-md-4 sidebar">
						
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
						<div class="sidebar-widget text-box">
							<h3 class="widget-title"><i class="icofont icofont-curved-double-right"></i>关于我们</h3>
							<div class="widget-content">
								<p><?=x6cms_fragment('right_box_slogan')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-8 posts-list articles-list">
					

								<div class="message">
								<div class="title"><h3 style="color:#81b441;"><?=$message?></h3></div>
								<?php if (count($actionurl)>0): ?>
								<div class="content" style="margin-top:20px;">
								<?=lang('message1')?><span id="totalSecond" style="color:red;">3</span><?=lang('message2')?>
								<ul style="margin-top:30px;">
								<?php foreach ($actionurl as $val): ?>
								<li><a href="<?=$val['url']?>"><?=$val['name']?></a></li>
								<?php endforeach; ?>
								</ul>
								<?php endif; ?>
								</div>
								</div>
			
					</div>
				</div>
			</div>
		</div>
	
</div>
<?php $this->load->view($config['site_template'].'/foot');?>