$(function(){
  $(".header-menu-humberger").on("click", function(){
    var active_flg = $(this).hasClass("active");
    hbg_change($(this), active_flg);
  })

  var icon_height = 30;
  var icon_width = icon_height * 1.2;
  $(".header-menu-humberger").css({
    "height": icon_height + "px",
    "width": icon_width + "px",
  });

/*
  var line_bold = 4;
  $(".header-menu-humberger span").css("height", line_bold + "px");
  var span2_top = (icon_height - line_bold) / 2;
  $(".header-menu-humberger span:nth-of-type(2)").css("top", span2_top + "px");

  $(".header-menu-humberger.active span:nth-of-type(1)").css("top", "-6.5px");
  $(".header-menu-humberger.active span:nth-of-type(3)").css("bottom", "-6.5px");
*/
})

function hbg_change(class_name, state){
  if(state){
    $(class_name).removeClass("active");
    $(".header-image-right").css("opacity", 0);
    setTimeout(function(){
      $(".header-image-right").css("display", "none");
    },400);
  }else{
    $(".header-image-right").css("display", "block");
    setTimeout(function(){
      $(class_name).addClass("active");
      $(".header-image-right").css("opacity", 1);
    },50);
  }
}
