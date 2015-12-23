/**
 * Created by Francisco Moral on 10/10/15.
 */
$(document).ready(function(){


    $(".dropdown-toggle").dropdown();//menu toogle
/*
    $('#slider').nivoSlider({
        effect: 'random',
        slices: 7,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 500,
        pauseTime: 3000,
        startSlide: 0,
        directionNav: false,
        controlNav: false,
        controlNavThumbs: false,
        pauseOnHover: true,
        manualAdvance: false,
        prevText: 'Prev',
        nextText: 'Next',
        randomStart: false,
        beforeChange: function () {
        },
        afterChange: function () {
        },
        slideshowEnd: function () {
        },
        lastSlide: function () {
        },
        afterLoad: function () {
        }
    });
    */

jQuery(function( $ ) {
				$( "#carousel" ).rcarousel({
					auto: {
						enabled: true,
						interval: 3000,
						direction: "prev"
					},
                     width: 200,
                     height: 200,
                     margin:10
				});

				$( "#ui-carousel-next" )
					.add( "#ui-carousel-prev" )
					.hover(
						function() {
							$( this ).css( "opacity", 0.7 );
						},
						function() {
							$( this ).css( "opacity", 1.0 );
						}
					);
			});





   
});