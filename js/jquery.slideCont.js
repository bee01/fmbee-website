$(function(){

  $(".fade_about_content").css("opacity", "0");
  //
  $(".fade_about_content").bind('inview', function (event, visible, topOrBottomOrBoth) {
    if (visible == true) {
      // element is now visible in the viewport
      $(this).animate({opacity: "1"}, 1500, "easeOutSine");
    }else{
      $(this).animate({opacity: "0"}, 0, "easeOutSine");
    }
  });

});