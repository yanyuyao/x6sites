					
	

<!-- Header -->
	<header id="main-header">
		<div id="search-header-bar">
			<div class="container">
				<form action="javascript:;" name="search-header">
					<input type="search" name="search" placeholder="请输入搜索内容">
					<button><i class="icofont icofont-search"></i></button>
				</form>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="site-branding col-md-3 col-xs-9">
					<a href="<?=base_url($langurl);?>" style="font-size:16px;">济南<span style="font-size:22px;">索邦</span>环境工程有限公司</a>
				</div>
				<div id="site-navigation" class="col-md-8 header-primary">
					<ul id="main-menu">

			<?php 
		
			$tmpData = x6cms_category_tree();
			//var_dump($tmpData);
		?>
		<?php foreach($tmpData as $item):?>
			<li class="menu-item <?php if($category['dir'] == $item['dir']){?>active<?php } ?>">
				<a href="<?=$item['url']?>"><?=$item['name']?></a>
				<?php if(isset($item['_child']) && count($item['_child'])){ ?>
				<ul class="sub-menu">
					<?php foreach($item['_child'] as $item_child):?>
					<li class="sub-menu-item"><a href="<?=$item_child['url']?>"><?=$item_child['name']?></a></li>
					<?php endforeach;?>
				</ul>
				<?php } ?>
			</li>
		<?php endforeach;?>
		<?php unset($tmpData,$item);?>
		<!--
						<li class="menu-item active">
							<a href="index.html">Home</a>
							<ul class="sub-menu">
								<li class="sub-menu-item"><a href="index.html">Home Page</a></li>
								<li class="sub-menu-item"><a href="index-2.html">Home Alternate</a></li>
							</ul>	
						</li>
						<li class="menu-item"><a href="about.html">About</a></li>
						<li class="menu-item"><a href="services.html">Services</a></li>
						<li class="menu-item">
							<a href="portfolio-masonry.html">Portfolio</a>
							<ul class="sub-menu">
								<li class="sub-menu-item"><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
								<li class="sub-menu-item"><a href="portfolio-grid.html">Portfolio Grid</a></li>
								<li class="sub-menu-item"><a href="portfolio-single.html">Portfolio Single</a></li>
							</ul>			
						</li>
						<li class="menu-item">
							<a href="blog.html">Blog</a>
							<ul class="sub-menu">
								<li class="sub-menu-item"><a href="blog.html">Blog</a></li>
								<li class="sub-menu-item"><a href="blog-list.html">Blog List</a></li>
								<li class="sub-menu-item"><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li>
						<li class="menu-item">
							<a href="contact.html">Contact</a>
						</li>
		-->				
					</ul>
				</div>
				
				<div class="col-md-1 col-xs-3">
					<div class="buttons">
						<button id="menu-toggle"><i class="icofont icofont-navigation-menu"></i></button>
						<!--<button id="search-button"><i class="icofont icofont-search"></i></button>-->
					</div>
				</div>
				
			</div>
		</div>
	</header>