(function() {
	/* ------------------------------------------------
		FULL SCREEN MENU OVERLAY SCRIPTS
	-------------------------------------------------- */
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( 'button.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };
		s = Snap( overlay.querySelector( 'svg' ) ), 
		path = s.select( 'path' ),
		steps = overlay.getAttribute( 'data-steps' ).split(';'),
		stepsTotal = steps.length;

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			var pos = stepsTotal-1;
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			
			var onEndTransitionFn = function( ev ) {
					classie.remove( overlay, 'close' );
				},
				nextStep = function( pos ) {
					pos--;
					if( pos < 0 ) return;
					path.animate( { 'path' : steps[pos] }, 60, mina.linear, function() { 
						if( pos === 0 ) {
							onEndTransitionFn();
						}
						nextStep(pos);
					} );
				};

			nextStep(pos);
		}
		else if( !classie.has( overlay, 'close' ) ) {
			var pos = 0;
			classie.add( overlay, 'open' );
			
			var nextStep = function( pos ) {
				pos++;
				if( pos > stepsTotal - 1 ) return;
				path.animate( { 'path' : steps[pos] }, 60, mina.linear, function() { nextStep(pos); } );
			};

			nextStep(pos);
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
	
})();


$(document).ready(function ($) {
	"use strict";

	/* ------------------------------------------------
		BODY PRELOADER
	-------------------------------------------------- */
	var preloader = $('.preloader');
	$(window).on("load", function(){
		preloader.remove();
	});
	

	/* ------------------------------------------------
		ISOTOPE FOR PORTFOLIO ITEMS
	-------------------------------------------------- */

	if ( $( ".grid-layout" ).length ) {
      var $container = $('.grid-layout').imagesLoaded( function() {
         var isotope = function () {
            $container.isotope({
                    resizable: false,
                    itemSelector: '.works-item' 
            });
         };
         isotope();
      });
      

      $('.grid-filter a').on("click", function(){
              var selector = $(this).attr('data-filter');
              $container.isotope({
                  filter: selector,
                  animationOptions: {
                     duration: 750,
                     easing: 'linear',
                     queue: false
                  },
                  
                  
                  // slow transitions
                  transitionDuration: '0.8s',
                  hiddenStyle: {
                     opacity: 0
                   },
                   visibleStyle: {
                     opacity: 1
                   }
              });
        return false;
      });
   
      var $optionSets = $('.grid-filter'),
             $optionLinks = $optionSets.find('a');
             $optionLinks.on("click", function(){
                var $this = $(this);
                // don't proceed if already selected
                if ( $this.hasClass('selected') ) {
                    return false;
                }
         var $optionSet = $this.parents('.grid-filter');
         $optionSet.find('.selected').removeClass('selected');
         $this.addClass('selected'); 
      });
             
	}


	/* ------------------------------------------------
		WORKS MASONRY
	-------------------------------------------------- */
	
	$(document).on("ready", function ($) {
		
		$('#grid-list').masonry({
			columnWidth: '.works-item',
			itemSelector: '.works-item'
		});
		
	});
	
	
	/* ------------------------------------------------
		CUSTOM SCRIPTS
	-------------------------------------------------- */
	
	//Your custom Scripts will go here...

});






