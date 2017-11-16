<!-- BEGIN | Header -->
<header id="ht_header" class="v2_header flw">
	<!-- top -->
	<div class="top_section flw">
		<div class="container">
			<div class="row">
				<div class="top_box flw">
					<ul class="top_list">
						<!--<li class="spc collect">收藏本公司</li>
						<li>设为主页</li>-->
						<li>山东省元瑞食品有限公司</li>
					</ul>
					<ul class="top_list top_social">
						<!--<li class="spc">注册</li>
						<li>登录</li>-->
						<li>服务电话：0534-8121811</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- end top -->

	<!-- top menu -->
	<div class="box_mn uk-panel uk-panel-box uk-panel-box-primary" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}">
		<div class="top_menu flw">
			<div class="container">
				<div class="row" style="margin:0;">
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2" style="width:100%;">
						<a href="index.html" class="lg lg_none" title="Kinder">
							<img src="img/logo.png" alt="Logo Image">
						</a>
						<!-- menu -->
						<nav class="nav is-fixed">
							<div class="nav-toggle">
								<div class="icon-menu"> <span class="line line-1"></span> <span class="line line-2"></span> <span class="line line-3"></span> </div>
							</div>
							<div class="nav-container">
								<ul class="nav-menu menu">
									<li class="menu-item has-dropdown">
										<a href="<?=base_url($langurl);?>" class="menu-link <?php if($category['dir'] == ''){?>set_active<?php } ?>">首页</a>
									</li>
									<li class="menu-item has-dropdown">
										<a href="/index.php?/category/aboutus" class="menu-link <?php if($category['dir'] == 'aboutus'){?>set_active<?php } ?>">关于元瑞</a>
									</li>
									<li class="menu-item has-dropdown">
										<a href="/index.php?/category/product" class="menu-link <?php if($category['dir'] == 'product'){?>set_active<?php } ?>">元瑞家族</a>
									</li>
									<li class="menu-item li_lg">
										<a href="/index.php" class="lg_block" title="Kinder">
											<img src="<?=$config['site_templateurl'];?>/img/logo.png" alt="Logo Image">
										</a>
									</li>
									<li class="menu-item has-dropdown">
										<a href="/index.php?/category/diyufengwei" class="menu-link <?php if($category['dir'] == 'diyufengwei' || $category['dir'] == 'yingyongfenlei'){?>set_active<?php } ?>">美食厨房</a>
									</li>
									<li class="menu-item has-dropdown">
										<a href="/index.php?/category/news" class="menu-link <?php if($category['dir'] == 'news'){?>set_active<?php } ?>">企业动态</a>
									</li>
									<li class="menu-item">
										<a href="/index.php?/category/support" class="menu-link <?php if($category['dir'] == 'support'){?>set_active<?php } ?>">联系我们</a>
									</li>
								</ul>
							</div>
						</nav>
						<!-- end menu -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end top menu -->
	<div style="clear:both"></div>
</header>
<!-- END | Header -->