<!-- JS files -->
<script src="<?=$config['site_templateurl'];?>/js/jquery.js"></script>
<!-- smooth scroll -->
<script src="<?=$config['site_templateurl'];?>/js/jquery.nicescroll.min.js"></script>
<!-- menu -->
<script src="<?=$config['site_templateurl'];?>/js/menu.responsive.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/scroll.menu.js"></script>
<!-- parallax -->
<script src="<?=$config['site_templateurl'];?>/js/parallax.materialize.js"></script>
<!-- video lightning -->
<script src="<?=$config['site_templateurl'];?>/js/video.lightning.js"></script>
<!-- isotope -->
<script src="<?=$config['site_templateurl'];?>/js/isotope-docs.min.js"></script>
<!-- bx slider -->
<script src="<?=$config['site_templateurl'];?>/js/jquery.bxslider.min.js"></script>
<!-- gallery classes page -->
<script src="<?=$config['site_templateurl'];?>/js/jquery.flexslider-min.js"></script>
<!-- couter up -->
<script src="<?=$config['site_templateurl'];?>/js/waypoints.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/counter.plugin.js"></script>
<!-- slick carousel -->
<script src="<?=$config['site_templateurl'];?>/js/slick.min.js"></script>
<!-- accordion -->
<script src="<?=$config['site_templateurl'];?>/js/smk-accordion.js"></script>
<!-- lightbox image -->
<script src="<?=$config['site_templateurl'];?>/js/imagelightbox.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/light_box_img.js"></script>
<!-- menu sticky -->
<script src="<?=$config['site_templateurl'];?>/js/uikit.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/sticky.menu.js"></script>
<!-- wow js -->
<!-- <script src="<?=$config['site_templateurl'];?>/js/wow.min.js"></script> -->
<!-- custom -->
<script src="<?=$config['site_templateurl'];?>/js/custom.js"></script>
<!-- custom slider -->
<script src="<?=$config['site_templateurl'];?>/js/slider/jquery.themepunch.tools.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/jquery.themepunch.revolution.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.actions.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.carousel.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.kenburn.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.layeranimation.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.migration.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.navigation.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.parallax.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.slideanims.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/revolution.extension.video.min.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/slider/custom_slider.js"></script>
<script src="<?=$config['site_templateurl'];?>/js/swiper.min.js"></script>

	<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
		autoplay:5000,
		speed:1000
    });
    </script>
	<script>
		$(".index-kitchen-footicon-single").css("height",$(".index-kitchen-footicon-single").width());  //index-kitchen-footicon  height
		$(".index-family-single").css({"height":$(".index-family-single").width()*2,"max-height":"750px"});    //index-family-single   height
		$(".index-family-listk").css("height",$(".index-family-single").height());
		$(window).resize(function() {
			$(".index-kitchen-footicon-single").css("height",$(".index-kitchen-footicon-single").width());   //index-kitchen-footicon  height
			$(".index-family-single").css({"height":$(".index-family-single").width()*2,"max-height":"750px"});      //index-family-single   height
			$(".index-family-listk").css("height",$(".index-family-single").height());
		})
		//元瑞家族
		$(".index-family-single").mouseenter(function(){
			$(".index-family-single").stop();
			$(this).siblings(".index-family-single").animate({"width":"15%"},400);
			$(this).animate({"width":"40%"},400);
		})
		$(".index-family-single").mouseleave(function(){
			$(".index-family-single").css("width","22%");
			$(".index-family-single3").css("width","12%");
		})
		
		//元瑞事业
		var careervideo = ["<?=$config['site_templateurl'];?>/img/index-career.png","<?=$config['site_templateurl'];?>/img/index-kitchen.png","<?=$config['site_templateurl'];?>/img/index-career.png","<?=$config['site_templateurl'];?>/img/index-kitchen.png","<?=$config['site_templateurl'];?>/img/index-career.png"];
		$(".index-kitchen-footicon-single").mouseover(function(){
			var i = $(this).index();
			$(".index-career-img").attr({"src":careervideo[i-1]});
		})
		
	</script>
</body>
</html>