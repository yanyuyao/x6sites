
	<?php $this->load->view($config['site_template'].'/footer');?>
	<?php //$this->load->view($config['site_template'].'/kefu');?>
	<?=$config['site_code']?>
	<!-- Scripts -->
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/jquery-2.min.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/public.js?t=<?=time()?>"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/bootstrap.min.js"></script>
	<!-- RS5.0 Core JS Files -->
	<!-- Plugins -->
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/countUp.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/nivo-lightbox.min.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/instafeed.min.js"></script>
	<!-- Theme JS -->
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/js.js?t=<?=time()?>"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/assets/js/mc.validate.js?t=<?=time()?>"></script>
	<script>

	//$("#guestbook").validform();
	$(document).ready(function(){ 
	　　$(".info-block .btn-more").each(function(){ 
	　　　　$(this).parent().css('height', $(this).parent().parent().css('height'));
	　　}); 
	}); 
	</script>
</body>
</html>