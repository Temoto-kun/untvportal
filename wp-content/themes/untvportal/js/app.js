// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs

(function($) {
  "use strict";
  //Foundation
  (function($){
    $(document).foundation();
  })(jQuery);


  $(document).ready(function(){
    $('.bx_news').bxSlider({
      controls: true, 
      adaptiveHeight: true,
      useCSS : false
    });
  });


  $(document).ready(function(){
    $('ul.wGallery').bxSlider({
      controls: false, 
      adaptiveHeight: true,
      auto: true,
      pager: true,
      useCSS : false
    });
  });

  //BX Slider
  $(document).ready(function(){
    $('.bxSlider').bxSlider({
      pager: false,
      useCSS : false
    });
  });

  //Custom Scrll Bar
  (function($){
      $(window).load(function(){
          $(".scroller").mCustomScrollbar();
      });
  })(jQuery);

  (function($){
      $(window).load(function(){
          $(".scroller2").mCustomScrollbar();
      });
  })(jQuery);


  (function($){
      $(window).load(function(){
          $(".musicTabs .content .scrolly").mCustomScrollbar();
      });
  })(jQuery);

  (function($){
      $(window).load(function(){
          $(".musicTabs .content .scrolly2").mCustomScrollbar();
      });
  })(jQuery);

  (function($){
      $(window).load(function(){
          $(".musicTabs .content .discography").mCustomScrollbar();
      });
  })(jQuery);

  (function($){
    $(document).ready(function(){
      $('.singleSlider ul').bxSlider({
        pager: false,
        useCSS : false
      });
    });
  })(jQuery);

  (function($){
    $(document).ready(function(){
      $('.latestGallery').bxSlider({
        pager: false,
        useCSS : false
      });
    });  
  })(jQuery);




(function($){
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
});

})(jQuery);


  (function($){
    $(document).ready(function() {
      $(window).load(function() {
        boxes = $('.equal');
        maxHeight = Math.max.apply(
        Math, boxes.map(function() {
          return $(this).height();
        }).get());
        boxes.height(maxHeight);
      });
    });
 })(jQuery);


  (function($){
    $(document).ready(function() {
      $(window).load(function() {
        boxes = $('.equal2');
        maxHeight = Math.max.apply(
        Math, boxes.map(function() {
          return $(this).height();
        }).get());
        boxes.height(maxHeight);
      });
    });
 })(jQuery);

  (function($){
   $(document).ready(function() {
    $("#lightGallery").lightGallery({
        mode:"fade"
    }); 
  });
 })(jQuery);   