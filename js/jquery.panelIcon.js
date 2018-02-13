$(function(){
	$(".qa_drawer > dt > p").prepend("<i></i><i></i>")
	$(".qa_drawer > dt").on("click", function() {
		// activeが存在する場合
		if ($(this).hasClass('icon_active')) {
			// activeを削除
			$(this).removeClass('icon_active');
		}
		else {
      $(".icon_active").removeClass("icon_active");
			// activeを追加
			$(this).addClass('icon_active');
		}
	});
});