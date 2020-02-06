(function($) {

	
//xs-popup-main-menu
var windowWidth = $(window).width();
var windowHeight = $(window).height();
$('.hdr-banner-wrap').height(windowHeight - 34);
if( windowHeight < 550 ){
  $('.hdr-banner-wrap').height(825);
}
if (windowWidth <= 991) {
  $('.xs-menu-humberger-btn').on('click', function(){
    $('.xs-popup-main-menu-wrap').fadeIn(500);
    $('.xs-popup-main-menu-wrap').addClass('add-cls-show');
  });
  $('.xs-menu-close-btn-controller').on('click', function(){
    $('.xs-popup-main-menu-wrap').fadeOut(500);
    $('.xs-popup-main-menu-wrap').removeClass('add-cls-show');
  });

}


 
/**
Responsive on 767px
*/
var windowWidth = $(window).width();

if (windowWidth > 768) {
  if($('.matchHeightCol').length){
    $('.matchHeightCol').matchHeight();
  };
}

 /*
Back to top
*/

$('.hdr-banner-lft-btn').click(function(e) {
  e.preventDefault();
  goToByScroll('.een-pakkende-sec', 0);
 });


/*
--------------------
To Top Button Js
--------------------
*/
$(window).scroll(function() {
  var $this = $(this);
  if ( $(window).scrollTop() > 1600 ) {
    $('.to-top-btn').addClass('totopshow');
  }else{
    $('.to-top-btn').removeClass('totopshow');
  } 
});



$('.to-top-btn').click(function() {
    $('body,html').animate({scrollTop:0},800);
}); 


/**
Slick slider
*/

if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({      
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}






/*
  Proshanto
*/

/*
-----------------------
Start Contact Google Map ->> 
-----------------------


/*Google map */



if( $('#ftr-map').length ){
    var latitude = $('#ftr-map').data('lat');
    var longitude = $('#ftr-map').data('long');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          //mapTypeControl:false,
          scrollwheel: false,

          //zoomControl: false,
          //disableDefaultUI: true,
          zoom:15,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : [
              {
                  "featureType": "administrative.country",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative.locality",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative.locality",
                  "elementType": "labels",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "all",
                  "stylers": [
                      {
                          "visibility": "on"
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "labels",
                  "stylers": [
                      {
                          "visibility": "on"
                      }
                  ]
              },
              {
                  "featureType": "poi",
                  "elementType": "all",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              }
          ]
          };

        var map= new google.maps.Map(document.getElementById('ftr-map'),mapProp);

        var marker= new google.maps.Marker({
          position:myCenter,
          });
        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}


//go-top
$('.footer-wrap .go-top-btn').on('click', function(e){
  e.preventDefault();
  $('html, body').animate( {scrollTop:0}, '500' );
});

function goToByScroll(id, offset){
  if(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate(
        {scrollTop: $(id).offset().top - offset},
      500);
  }
}

})(jQuery);









