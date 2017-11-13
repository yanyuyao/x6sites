 <!--===== HEADER AREA =====-->
            <header class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="logo">
                               <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
								<!--== logo ==-->
                                <a href="<?=base_url($langurl);?>" style="font-size:16px;color:#81b441;">
									<?php if($config['site_logo']){?>
										<img src="<?=$config['site_logo']?>" style="max-width:180px;">
									<?php }else{?>
										<h3><?=$config['site_logo_text']?></h3>
									<?php }?>
								</a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                           <nav class="main-menu">
                            <div class="navbar-collapse collapse">
							
                                <ul class="nav navbar-nav"> <!--== manin menu ==-->
								<?php 
									$tmpData = x6cms_category_tree();
									//var_dump($tmpData);
								?>
								<?php foreach($tmpData as $item):?>
										<li class="<?php if($category['dir'] == $item['dir']){?>active<?php } ?> smooth-scroll">
											<!--<a href="<?=$item['url']?>"><?=$item['name']?></a>-->
											<a href="#<?=$item['dir']?>"><?=$item['name']?></a>
										</li>
								<?php endforeach;?>
								<?php unset($tmpData,$item);?>
                                </ul>
                            </div>
                            </nav>
                        </div>
                    </div>
                   
                </div>
            </header>
        <!--===== END HEADER AREA ======-->

		<!--
		<div id="search-header-bar">
			<div class="container">
				<form action="javascript:;" name="search-header">
					<input type="search" name="search" placeholder="请输入搜索内容">
					<button><i class="icofont icofont-search"></i></button>
				</form>
			</div>
		</div>
	-->