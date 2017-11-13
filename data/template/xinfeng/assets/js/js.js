 $(window).on("scroll", function () {
  "use strict";

  // menu scroll
  if ($(this).scrollTop() > 10) {
    $("#main-header").addClass("nav-scroll");
    $(".header-transparent").removeClass("header-transparent").addClass("header-transparent-scroll");
  }
  else {
    $("#main-header").removeClass("nav-scroll");
    $(".header-transparent-scroll").removeClass("header-transparent-scroll").addClass("header-transparent");  
  };
});

$(document).ready(function(){
	"use strict"

	// Navigation Submenu
	$("li.menu-item").on("mouseenter", function(){
		$(this).find("ul.sub-menu").addClass("open");
	});
	$("li.menu-item").on("mouseleave", function(){
		$(this).find("ul.sub-menu").removeClass("open");
	});

	// Header Search
	$("#search-button").on("click", function() {
		$(this).toggleClass("selected");
	    $("#search-header-bar").slideToggle(200);
	    $(this).find("i").toggleClass('icofont-close');
	  if($("div.header-primary-menu").hasClass('toggled')) {
	   $("div.header-primary-menu").slideUp(200).removeClass('toggled');
	  }
	});

  // Responsive Navigation Toggle
  $("#menu-toggle").on("click", function(){
      $(this).find("i").toggleClass('icofont-navigation-menu icofont-close');
      $("#site-navigation").toggleClass("open");
  });


	// Main Slider
	if ($("#main-slider").length>0) {
		jQuery("#main-slider").revolution({
    	sliderType:"standard",
    	sliderLayout:"auto",
    	delay: 6000,
    	gridwidth:1230,
    	gridheight:800,
    	navigation: {
    	  keyboard_direction: "horizontal",
    	  mouseScrollNavigation: "off",
    	  onHoverStop: "on",
    	  arrows: {
    	  		style: "",
    	   	enable: true,
    	   	hide_under: 768,
    	   	hide_onleave: false,
    	   	left: {
    	   	  h_align: "right",
    	   	  v_align: "bottom",
    	   	  h_offset: 145,
    	   	  v_offset: 80
    	   	},
    	   	right: {
    	   	  h_align: "right",
    	   	  v_align: "bottom",
    	   	  h_offset: 90,
    	   	  v_offset: 80
    	   	}
    	  },
    	},
    });
	};

	// Nivo LightBox
	var nivoActivator = $('div.nivo-activator');
	if (nivoActivator.css("display") == "block"){
   	$('.nivo-trigger').nivoLightbox({
   		theme: 'default'
   	});
	};

	// Filterable Portfolio
  var $filterableContainer = $('.fam-filterable');
	// initialize isotope
  if (($filterableContainer).length> 0) {
   	$filterableContainer.isotope({
 		  itemSelector: '.item',
 		  masonry: {}
  	});
  	$(window).resize( function(){ 
    	setTimeout(function() { 
     		$filterableContainer.isotope('layout'); 
    	}, 1000);  
  	});
   	$(window).load(function(){ 
    	$filterableContainer.isotope('layout'); 
  	});
 	};

  // Portfolio Filter
 	$("#fam-filter").on("click", "li", function() {
 	 	$("li.selected").removeClass("selected");
 	  $(this).addClass("selected");
 	  var selector = $(this).attr("data-filter");
 	  $filterableContainer.isotope({
 	    filter: selector,
 	  });
 	});

  // Counters
  if ($('div.counterContainer').length>0) {
    var options = {
    useEasing : true,
    useGrouping : true,
    separator : '',
    decimal : '.',
    prefix : '',
    suffix : ''
  };
  $('div.counterContainer').waypoint(function(){
    var numAnim = new CountUp("counting-1", 0, 89, 0, 6.5, options);
      numAnim.start();
    var numAnim = new CountUp("counting-2", 0, 9832, 0, 6.5, options);
      numAnim.start();
    var numAnim = new CountUp("counting-3", 0, 33, 0, 6.5, options);
      numAnim.start();
    var numAnim = new CountUp("counting-4", 0, 32343, 0, 6.5, options);
      numAnim.start();
    }, { offset: '100%' });
  };

  // Testimonials Carousels
  if ($("#fam-testimonials").length>0) {
    $('#fam-testimonials').owlCarousel({
      responsiveRefreshRate:100,
      items: 1,
      responsiveRefreshRate:100,
      nav: true,
      navText:['<i class="icofont icofont-rounded-left"></i>','<i class="icofont icofont-rounded-right"></i>'],
      dots: false
    });
  };

  if ($("#posts-carousel").length>0) {
    $('#posts-carousel').owlCarousel({
      responsiveRefreshRate:100,
            responsive : {
          // breakpoint from 0 up
          0 : {
              items: 1,
          },
          // breakpoint from 480 up
          680 : {
              items: 2,
             
          },
          // breakpoint from 768 up
          980: {
              items: 3,
          }
      },
      nav: false,
      dots: true,
      stagePadding: 0,
      margin: 30,
    });
  };

  // Google Map
  //if ($("#gmap").length>0) {
  //  var myCenter=new google.maps.LatLng(51.507351, -0.127758);
  //  function initialize(){
  //  var mapProp = {
  //    center:myCenter,
  //    zoom:15,
  //    scrollwheel: false,
  //    streetViewControl: false,
  //    mapTpeIdy:google.maps.MapTypeId.TERRAIN,
  //    styles:[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#f8f8f8"},{"lightness":0}]},
  //    {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#e8e8e8"},{"lightness":0}]},
  //    {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#bebebe"},{"lightness":0}]},
  //    {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#bebebe"},{"lightness":0},{"weight":0.2}]},
  //    {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bebebe"},{"lightness":0}]},
  //    {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#bebebe"},{"lightness":0}]},
  //    {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},
  //    {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},
  //    {"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":""},{"lightness":2}]},
  //    {"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":2}]},
  //    {"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},
  //    {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},
  //    {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
  //  };
  //  var map=new google.maps.Map(document.getElementById("gmap"),mapProp);
  //  var marker=new google.maps.Marker({
  //      position:myCenter,
  //      animation:google.maps.Animation.BOUNCE,
  //      icon:'assets/img/map-marker.png'
  //  });
  //  marker.setMap(map);
  //  }
  //  google.maps.event.addDomListener(window, 'load', initialize); 
  //}

  // Instagram footer
  if ($("#fam-insta").length>0) {
    var feedFooter = new Instafeed({
      get: 'user',
      userId: '3013976721', // put your user id here
      accessToken: '3013976721.14e148f.c89002a243444fb1b7a1839aa0125047', //put your acces token here
      sortBy: 'most-liked',
      template: '<li><a href="{{link}}" target="_blank"><img class="img-responsive" src="{{image}}" /><div class="overlay"><i class="icofont icofont-plus"></i></div></a></li>',
      target: 'fam-insta',
      limit: 8,
      resolution: 'low_resolution',
    });
    feedFooter.run();
  }

  // Instagram Sidebar
  if ($("#fam-insta-sidebar").length>0) {
    var feedFooter = new Instafeed({
      get: 'user',
      userId: '3013976721', // put your user id here
      accessToken: '3013976721.14e148f.c89002a243444fb1b7a1839aa0125047', //put your acces token here
      sortBy: 'most-liked',
      template: '<li><a class="sidebar-img-overlay" href="{{link}}" target="_blank"><img class="img-responsive" src="{{image}}" /><div class="overlay"><i class="icofont icofont-plus"></i></div></a></li>',
      target: 'fam-insta-sidebar',
      limit: 8,
      resolution: 'low_resolution',
    });
   feedFooter.run();
  }

  // Form Validation   
  // Single Post Form
  $('#comment-form').validate({
    rules: {
      email: {
        required: true,
        email: true
      }
    }, //end rules
    messages: {
      email: {
        required: "Please type a e-mail address.",
        email: "This is not a valid email address."
      }
    }
  }); 
 
  // Contact Homepage Form
  $('#guestbook').validate({
    rules: {
		author: {
			required: true
		},
		email: {
			required: true,
			email: true
		},
		phone: {
			required: true,
			mobile: true
		}
	  
    }, 
    messages: {
		author: {
			required: "请输入姓名",
		},
		email: {
			required: "请输入邮箱",
			email: "请输入正确的邮箱"
		},
		phone: {
			required: "请输入联系方式",
			mobile: "请输入正确的联系方式"
		}
	  
    }
  });
});