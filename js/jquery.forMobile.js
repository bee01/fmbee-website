$(function(){
  var file_type = page_type();
  var sources = return_sources(file_type);
  var window_width = get_window_width();
  if(is_mobile(window_width)){
    var description = $("#" + sources[0]).html();
    $("#" + sources[0]).css("display", "none");
    var link_target = sources[1];
    var link = "";
    if(link_target != null){ link = '<p>' + $("#" + link_target).html() + '</p>'; }
    $("#" + sources[1]).css("display", "none");
    $("#" + sources[2]).after("<" + sources[3] + " style='margin-top:1rem;'><p>" + description + "</p>" + link + "</" + sources[3] + ">")
  }
});

function get_window_width(){
  return $(window).width();
}

function is_mobile(width){
  return width <= 500 ? true : false ;
}

function page_type(){
  var original_type = $(location).attr('pathname');
  if(original_type.slice(-1) == "/"){ original_type = original_type.slice( 0, -1) };
  var splitted = original_type.split("/");
  return splitted[splitted.length - 1];
}

function return_sources(page_name){
  var sources = [];
  switch(page_name){
    case 'fmbee-website':
/*
      return sources = ["new .new-in ul dd h4 + p", null, "new .new-in ul dl", "div"];
      break;
*/
    case 'news':
/*
      return sources = ["press .column_list_in .column_list_message", null, "press .column_list_in", "div"];
      break;
*/
    case 'products':
/*
      return sources = ["beeindex .app_summary > div ", null, "beeindex .product_summary dt + dd", "dd"];
      break;
*/
    default:
      return '';
      break;
  }
}