$(function(){
  var contents_offset = $(".contents-right").offset().top;
  $("#sidebar-iphone").css({
    position: "absolute",
    top: 0
  });

  $(window).scroll(function() {
    $("#sidebar-iphone").each(function(){
      var menuTopMargin = 14;
      // 親要素のトップ座標
      var parentY = $(".contents-in").offset().top;
      // 親要素の高さ
      var parentH = $(".contents-in").height() - 14;
      // 実際のfixed開始座標
      var targetScrollValue = parentY - menuTopMargin;
      // スクロール量
      var wScrollvalue = $(window).scrollTop();
      var obj = {};
      if(wScrollvalue > targetScrollValue){
        if(wScrollvalue > (parentY + parentH) - (menuTopMargin +$(this).height()) ){
          obj = {
            position: "absolute",
            top: parentH - $(this).height()
          };
        }else{
          obj = {
            position: "fixed",
            top: menuTopMargin
          };
        }
      }else{
        obj = {
          position: "absolute",
          top: "0"
        };
      }
      $(this).css(obj); //cssを適用。
    });
  });

  $(".sidebar-iphone-display-backtotop").click(function(){
    $('html,body').animate({ scrollTop: 0 }, 'normal');
    return false;
  });

});