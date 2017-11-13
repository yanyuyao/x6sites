<div class="team-wrapper">
			<div class="container">
				<div class="section-title">
					<h2><span>明星</span> 产品</h2>
				</div>
				<style>
					.team-member .social-media a {
						padding:9px;
					}
				</style>
				<div class="row team-members">
						<?php $tmpData = x6cms_modellist('product',0,'default',3,2); //var_dump($tmpData);?>
						<?php foreach($tmpData as $item):
						?>
						
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="overlay">
								<div class="name">
									<div class="content">
										<h5><?=$item['title']?></h5>
										<h4><?=$item['categoryname']?></h4>
									</div>
								</div>
								<div class="social-media">
									<div class="content">
									<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
									</div>
								</div>
							</div>
							<img src="<?=$item['thumb']?>" alt="" class="img-responsive" style="width:360px;height:432px;">
						</div>
					</div>
					<?php endforeach;?>
					<?php unset($tempData,$item);?>
				</div>
			</div>
		</div>