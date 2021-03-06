﻿<?php $this->load->view($config['site_template'].'/head');?>

<div class="hpage hpage_2 flw">
<?php $this->load->view($config['site_template'].'/header');?>
<main id="main" class="page_content">	
<!--swiper start-->
<div class="main_sl flw">
	<img src="<?=$config['site_templateurl'];?>/img/index-topborder.png" class="index-topborder">
	<div class="swiper-container">
		<div class="swiper-wrapper">
<?php $tmpData = x6cms_slide(5);?>
<?php foreach($tmpData as $item):?>
<div class="swiper-slide"><a href=<?=$item['url']?>><img src="<?=$item['thumb']?>" alt="山东省元瑞食品有限公司" title="山东省元瑞食品有限公司"></a></div>
<?php endforeach;?>
<?php unset($tmpData,$item);?>
			<!--
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/index-banner1.png" alt="山东省元瑞食品有限公司" title="山东省元瑞食品有限公司"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/index-banner2.jpg" alt="山东省元瑞食品有限公司" title="山东省元瑞食品有限公司"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/index-banner3.jpg" alt="山东省元瑞食品有限公司" title="山东省元瑞食品有限公司"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/index-banner4.jpg" alt="山东省元瑞食品有限公司" title="山东省元瑞食品有限公司"></div>
			<div class="swiper-slide"><img src="<?=$config['site_templateurl'];?>/img/index-banner5.jpg" alt="山东省元瑞食品有限公司" title="山东省元瑞食品有限公司"></div>
			->
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
	</div>
</div>	
<!--swiper end-->
	
<!--yuanrui-family start-->
	<div class="index-family">
		<a href="/index.php?/category/product"><img src="<?=$config['site_templateurl'];?>/img/index-family.png" alt="元瑞家族" title="元瑞家族"></a>
	</div>
	<div class="index-family-listk">
		<div class="index-family-single index-family-single1">
			<a href="/index.php?/category/rihanfengwei"><div class="index-family-single-k">
				<div class="index-family-single-bt">
					<span>日</span><span>韩</span><span>风</span><span>味</span>
				</div>
			</div></a>
		</div>
		<div class="index-family-single index-family-single2">
			<a href="/index.php?/category/xishifengwei"><div class="index-family-single-k">
				<div class="index-family-single-bt">
					<span>西</span><span>式</span><span>风</span><span>味</span>
				</div>
			</div></a>
		</div>
		<div class="index-family-single index-family-single3">
			<a href="/index.php?/category/yingyongfenlei"><div class="index-family-single-k">
				<div class="index-family-single-bt">
					<span>按</span><span>应</span><span>用</span><span>查</span><span>询</span>
				</div>
			</div></a>
		</div>
		<div class="index-family-single index-family-single4">
			<a href="/index.php?/category/dongnanya"><div class="index-family-single-k">
				<div class="index-family-single-bt">
					<span>东</span><span>南</span><span>亚</span><span>风</span><span>味</span>
				</div>
			</div></a>
		</div>
		<div class="index-family-single index-family-single5">
			<a href="/index.php?/category/tesefengdiyufengwei"><div class="index-family-single-k">
				<div class="index-family-single-bt">
					<span>特</span><span>色</span><span>风</span><span>味</span>
				</div>
			</div></a>
		</div>
		<div style="clear:both;"></div>
	</div>
<!--yuanrui-family end-->
	


<!--kitchen start-->
	<div class="index-kitchen">
		<img src="<?=$config['site_templateurl'];?>/img/index-kitchen.png" alt="美食厨房" title="美食厨房">
		<a href="/index.php?/category/diyufengwei"><img src="<?=$config['site_templateurl'];?>/img/index-kitchen-bt.png" class="index-kitchen-bt"></a>
	</div>
<!--kitchen end-->

<!--career start-->
	<div class="index-kitchen">
		<img src="<?=$config['site_templateurl'];?>/img/index-career.png" class="index-career-img" alt="元瑞事业" title="元瑞事业">
		<a href="/index.php?/category/aboutus"><img src="<?=$config['site_templateurl'];?>/img/index-career-bt.png" class="index-kitchen-bt"></a>
		<div class="index-kitchen-footicon">
			<!--<h3>研发</h3>-->
			<div class="index-kitchen-footicon-single index-kitchen-footicon-single1"></div>
			<div class="index-kitchen-footicon-single index-kitchen-footicon-single2"></div>
			<div class="index-kitchen-footicon-single index-kitchen-footicon-single3"></div>
			<div class="index-kitchen-footicon-single index-kitchen-footicon-single4"></div>
			<div class="index-kitchen-footicon-single index-kitchen-footicon-single5"></div>
		</div>
	</div>
<!--career end-->

<!--join start-->
	<div class="_section_item flw index-join">
		<div class="container">
			<div class="row index-join-text">
				<a href="/index.php?/category/aboutus"><img src="<?=$config['site_templateurl'];?>/img/index-join-bt.png" class="index-join-bt"></a><br>
				元瑞食品是一家专业的复合调味料、中西式酱料生产商，致力于为餐饮企业及食品企业提供一体化便捷的食品解决方案，为家庭带来美味的食物。并且相信通过我们的不断努力，能够引领行业的进化，为饮食生态的改变带来积极的影响。<br>
				“用心做调味，良心做企业”是我们的核心价值观，我们坚持选用优质的原料创造优质的调味品，进而创造美味的食物。我们相信通过元瑞人的共同努力，不忘初心，秉持团结、乐观、自信、真诚的态度，最终，我们定能实现远大的目标！
				<div class="index-join-more">
					<a href="/index.php?/category/aboutus"><input type="button" value="了解更多 >>"></a>
				</div>
			</div>
		</div>
	</div>
<!--join end-->
</main>
<?php $this->load->view($config['site_template'].'/footer');?>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>

<script>
	if()
</script>