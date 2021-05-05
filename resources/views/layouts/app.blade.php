<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('meta-tags')

    <link rel="stylesheet" href="https://www.bocadolobo.com/css/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://www.bocadolobo.com/css/aos.css">
    <link rel="stylesheet" href="https://www.bocadolobo.com/css/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <style>
        @media (min-width: 715px) {
          .col-sm-2-footer {
            width: 20.0%;
            float: left;
          }
      
          .bb-hidden {
            display: none;
          }
        }
      
        @media (min-width: 715px) {
          .col-sm-2-footer-2 {
            width: 14.27777777%;
            float: left;
          }
        }
      
        @media (max-width: 715px) {
          .bb-hidden-small {
            display: none;
          }
        }
    </style>
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>

<script src="https://www.bocadolobo.com/js/js.cookie.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.bocadolobo.com/js/bootstrap/bootstrap.min.js"></script>                      
<script src="https://www.bocadolobo.com/js/jquery.bcSwipe.min.js"></script>
<script src="https://www.bocadolobo.com/js/aos.js"></script>
<script src="https://www.bocadolobo.com/js/parsley.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script src="https://unpkg.com/swiper@6.4.7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script>
var downloads_footer_swiper = new Swiper('.downloads-footer-js.swiper-container', {
    slidesPerView: 2,
    spaceBetween: 0,
    autoplay: {
      delay: 2000,
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 5,
        autoplay: false,
        loop: false,
      }
      
    }
  });
  
  $('.img-lazy').Lazy({
          // your configuration goes here
          scrollDirection: 'vertical',
          effect: 'fadeIn',
          visibleOnly: true,
          onError: function(element) {
              console.log('error loading ' + element.data('src'));
          }
      });
  
  $( ".open-product" ).click(function() {
           var product_id = $(this).data('id');
           var product_name = $(this).data('name');
           var title = $(this).data('title');
           $("#get_price_allproducts .modal-body #product_id").val( product_id );
           $("#get_price_allproducts .modal-body #product_name").val( product_name );
           $("#get_price_allproducts .lineModalLabel").html('Get Price - ' + product_name);
           $("#get_price_allproducts .modal-body #title").val( title );
      });
      $(".download-modal-trigger").click(function () {
              var title_material = $(this).data('name');
              var download_php = $(this).data('php');
              var type = $(this).data('type');
              var modal_tlt = $(this).data('modal_tlt');
              var tlt = $(this).data('tlt');
              var facebookgeral = $(this).data('facebookgeral');
              var facebook = $(this).data('facebook');
              $("#download_files .modal-body .title_material").val(title_material);
              $("#download_files .modal-body .download_php").val(download_php);
              $("#download_files .modal-body .type").val(type);
              $("#download_files .modal-body .facebookgeral").val(facebookgeral);
              $("#download_files .modal-body .facebook").val(facebook);
              $("#download_files .modal-body .title").val(tlt);
              $("#download_files .lineModalLabel").html(modal_tlt);
          });
  
          $(".get-look-price-modal-trigger").click(function () {
              var rbr_products = $(this).data('rbr_products');
              var rbr = $(this).data('rbr');
              var modal_tlt = $(this).data('modal_tlt');
              $("#get_look_price .modal-body .rbr_products").val(rbr_products);
              $("#get_look_price .modal-body .rbr").val(rbr);
              $("#get_look_price .lineModalLabel").html(modal_tlt);
          });
  
  
  $(document).ready(function() {
  

    $('select[name="country-buy-now"]').change(function(){
        if($(this).val() == 'United Kingdom'){
            $('.city_form_uk').show( "fast", function() {
            $('select[name="city_uk"]' ).attr('required', 'true');
          });
            $('.city_form_uk').val($('select[name="city_uk"] option:first').val());
        }else{
            $('.city_form_uk').hide();
        }
    });
  });
  $(document).ready(function() {
    $('select[name="country-buy-now"]').change(function(){
        if($(this).val() == 'France'){
            $('.city_form_france').show( "fast", function() {
            $('select[name="city_fr"]' ).attr('required', 'true');
          });
            $('.city_form_france').val($('select[name="city_fr"] option:first').val());
        }else{
            $('.city_form_france').hide();
        }
    });
  });
  
  
  $(document).ready(function() {
    $('select[name="country"]').change(function(){
        if($(this).val() == 'France'){
            $('.city_form_france').show( "fast", function() {
            $('select[name="city_fr"]' ).attr('required', 'true');
          });
            $('.city_form_france').val($('select[name="city_fr"] option:first').val());
        }else{
            $('.city_form_france').hide();
        }
    });
  });
  $(document).ready(function() {
    $('select[name="country"]').change(function(){
        if($(this).val() == 'United Kingdom'){
            $('.city_form_uk').show( "fast", function() {
            $('select[name="city_uk"]' ).attr('required', 'true');
          });
            $('.city_form_uk').val($('select[name="city_uk"] option:first').val());
        }else{
            $('.city_form_uk').hide();
        }
    });
  });
  $(document).ready(function() {
    $('select[name="city_fr"]').change(function(){
        if($(this).val() == 'Other - '){
            $('.other_city').show( "fast", function() {
            $('input[name="city_other_fr"]' ).attr('required', 'true');
          });
            $('.other_city').val($('input[name="city_other_fr"] option:first').val());
        }else{
            $('.other_city').hide();
        }
    });
  });
  $(document).ready(function() {
    $('select[name="city_uk"]').change(function(){
        if($(this).val() == 'Other - '){
            $('.other_city_uk').show( "fast", function() {
            $('input[name="city_other_uk"]' ).attr('required', 'true');
          });
            $('.other_city_uk').val($('input[name="city_other_uk"] option:first').val());
        }else{
            $('.other_city_uk').hide();
        }
    });
  });
  
  
  $(document).scroll(function () {
    var y = $(document).scrollTop(),
       header = $("#stickyheader");
    if (y >= 100) {
        header.addClass('sticky');
    } else {
        header.removeClass('sticky');
    }
  });
  
  jQuery(document).ready(function() {
      var offset = 220;
      var duration = 500;
      jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > offset) {
              jQuery('.back-to-top').fadeIn(duration);
          } else {
              jQuery('.back-to-top').fadeOut(duration);
          }
      });
      
      jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
      })
  });
  
  $('#bs-carousel, #carousel_center, #carousel_cabinets, #carousel_chairs, #carousel_lighting, #carousel_safes, #carousel_sideboards, #carousel_consoles, #carousel_mirrors, #carousel_tables, #carousel_bathroom, #carousel_others, #carousel_nightstands, #carousel_lucanos, #carousel, #carousel_leaf, #carousel_filigree, #carousel_azuleijo, #carousel_metal').bcSwipe({ threshold: 50 });
  
  $( ".email" ).click(function() {
    $( ".agree_policy" ).show();
  });
  
  
  </script>
  <script type="text/javascript">
    $('#video').click(function(){
        $('#video-controls').show();
        $('#video').hover(function() {
        $('#video-controls').fadeIn("fast");
      },
      function(){
        $('#video-controls').fadeOut("fast");
    });
    });
        $("#video-controls").hover(function(){
        $(this).css("display", "block");
    }, function(){
        $(this).css("display", "none");
  });
  // $('#bs-carousel').carousel({
  // }).on('slide.bs.carousel', function () {
  //  document.getElementById('video').pause();
  // });
  </script> 
  <script src="https://www.bocadolobo.com/js/megaTracker.js" type="text/javascript"></script>
  <script>var tracker=getUrl();</script>
  <script>
  var lifetime = new Date(new Date().getTime() + 20 * 60 * 1000);
  (function () {
      if(!(document.cookie.indexOf("originUrl=") > -1))
      {
          Cookies.set('originUrl', window.location.href, {
      expires: lifetime
      });
      }
      if (window.location.search.indexOf('utm_source=') > -1 && window.location.search.indexOf('utm_campaign=') > -1)
      {
          Cookies.set('originUrl', window.location.href, {
      expires: lifetime
      });
  } 
  }());
  
  </script>
  <script type="text/javascript">
  $(".origin").val(tracker.url_origin);
  $(".referrer").val(tracker.referrer);
  $(".lead_path").val(tracker.flow);
  
  
  </script>
@yield('foot')

</html>