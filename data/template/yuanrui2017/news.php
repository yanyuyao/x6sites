<?php $this->load->view($config['site_template'].'/head');?>

<div class="hpage hpage_2 flw">
<?php $this->load->view($config['site_template'].'/header');?>
<main id="main" class="page_content">	
<!--swiper start-->
	<div class="main_sl flw">
		<img src="<?=$config['site_templateurl'];?>/img/index-topborder.png" class="index-topborder">
	</div>	
<!--swiper end-->

<!--banner start-->
<div class="flw">
	<div class="news-banner">
		<img src="<?=$category['thumb']?>">
	</div>
</div>
<!--banner end-->


<!--list start-->
	<div class="classes_enroll flw">
		<div class="container">
			<div class="item_ flw" id="news-list">
				<div class="news-listbt">
					<div class="news-listbt-search news-listbt-search1">
                        <img src="<?=$config['site_templateurl'];?>/img/news-search.png"> 搜索
					</div>
                    <div class="news-listbt-search news-listbt-search2">
                    	<input type="button" value="搜索" class="news-listbt-search-inputbutton">
                        <input type="text" placeholder="输入搜索内容" class="news-listbt-search-inputtext">
					</div>
					元瑞动态
				</div>
				
				<div class="row">
						<?php foreach ($list as $k=>$item): ?>
								<?php if($k == 0){ echo "<div class='row'>";}?>
								<?php if($k<2){?>
								<div class="col-md-6 col-lg-6 news-list-single">
									<a href="<?=$item['url']?>">
									<div class="news-list">
										<div class="news-list-top">
											<img src="<?=$item['thumb']?>"><br>
										</div>
										<div class="news-list-bottom">
											<div class="news-list-date"><?=$item['keyword']?></div>
											<div class="news-list-bottom-bt">
												<?=$item['title']?>
											</div>
											<?=$item['description']?>
										</div>
									</div>
									</a>
								</div>
								<?php if($k == 1){ echo "</div>";}?>
								<?php }else{ ?>
								<div class="col-md-3 col-lg-3 news-list-single">
									<a href="<?=$item['url']?>">
									<div class="news-list">
										<div class="news-list-top">
											<img src="<?=$item['thumb']?>"><br>
										</div>
										<div class="news-list-bottom">
											<div class="news-list-date"><?=$item['keyword']?></div>
											<div class="news-list-bottom-bt">
												<?=$item['title']?>
											</div>
											<?=$item['description']?>
										</div>
									</div>
									</a>
								</div>
								
								<?php } ?>
						<?php endforeach; ?>
					
					
					
				</div>
				
			</div>
		</div>
	</div>
	<div class="news-more">
		<input type="button" value="加载更多">
	</div>
<!--list end-->


</main>
<?php $this->load->view($config['site_template'].'/footer');?>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>