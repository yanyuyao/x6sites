<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?=$config['seo_title']?> - <?=$config['site_name']?> </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$config['seo_keywords']?>" />
	<meta name="description" content="<?=$config['seo_description']?>" />
	<meta name="author" content="<?=lang('system_author');?>" />
	<!--
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/public.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/css/style.css" />
	-->
	<link rel="shortcut icon" href="<?=x6cms_path('images/favicon.ico');?>" />

	<link rel="stylesheet" href="<?=$config['site_templateurl'];?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$config['site_templateurl'];?>/assets/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?=$config['site_templateurl'];?>/assets/owl-carousel/assets/owl.carousel.css">
	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/assets/revolution/css/settings.css">
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/assets/revolution/css/navigation.css">
	
	<!-- Theme Styles -->
	<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/assets/css/style.css?v=1.6">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?=$config['site_templateurl'];?>/assets/js/html5shiv.min.js"></script>
      <script src="<?=$config['site_templateurl'];?>/assets/js/respond.min.js"></script>
    <![endif]-->

	
<script type="text/javascript">
var lang = {};
lang.validform = {
		'onlyform':'<?=lang('valid_onlyform')?>',
		'required':{
			'text':'* <?=lang('valid_required_text')?>',
			'checkmultiple':'* <?=lang('valid_required_checkmultiple')?>',
			'select':'* <?=lang('valid_required_select')?>',
			'checkbox':'*  <?=lang('valid_required_checkbox')?>'
		},
		'min':{
			'text':'* <?=lang('valid_min_text')?>',
			'text1':'<?=lang('valid_min_text1')?> '
		},
		'max':{
			'text':'* <?=lang('valid_max_text')?>',
			'text1':'<?=lang('valid_max_text1')?>'
		},
		'email':{
			'text':'* <?=lang('valid_email_text')?>'
		},
		'equals':{
			'text':'* <?=lang('valid_equals_text')?>'
		}
};
</script>
</head>
<body>