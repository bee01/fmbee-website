$(function(){
  $( "#tentai" ).attr("width", "1920");
  $( "#tentai" ).attr("height", "1920");

  var canvas_height = parseInt($("#header").css("height"));
  var canvas_width = parseInt($("#header").css("width"));
//  $( ".header-tentai" ).css("height", $("#header").css("height"));
//  $( ".header-tentai" ).css("width", $("#header").css("width"));
  var position_top = -(1920 - canvas_height) / 2;
  var position_left = -(1920 - canvas_width) / 2;
  $( "#tentai" ).css("top", position_top);
  $( "#tentai" ).css("left", position_left);
});


window.addEventListener("load", init);

function init() {
  var root_path = "192.168.24.170:432/fmbee-website";

  // Stageオブジェクトを作成します
  var stage = new createjs.Stage("tentai");

  // cangasのサイズを取得
  var canvas_height = parseInt($("#header").css("height"));
  var canvas_width = parseInt($("#header").css("width"));
  var position_top = (1920 - canvas_height) / 2;
  var position_left = (1920 - canvas_width) / 2;
  stage.width = 1920;
  stage.height = 1920;

  // 必要な画像を予め読み込んでおきます。
  var loader = new createjs.LoadQueue();
  var manifest = [
    {src:"http://" + root_path + "/wp-content/themes/fmbee/images/stars1.png", id:"star1"},
    {src:"http://" + root_path + "/wp-content/themes/fmbee/images/stars2.png", id:"star2"},
    {src:"http://" + root_path + "/wp-content/themes/fmbee/images/stars3.png", id:"star3"},
    {src:"http://" + root_path + "/wp-content/themes/fmbee/images/stars1/star2.png", id:"zodiac1"},
  ];

  loader.loadManifest(manifest, true);

  // 画像の読み込み中
  loader.addEventListener('progress', function(event){
    var progress = event.loaded;
    var per = Math.round(progress * 100);
    $("#loading span").text(per);
  });

  // 画像の読み込みが完了したら
  loader.addEventListener('complete', function(event){

    // ロード画面を解く
    $("#header .header-right::after").css("width", "100%;");
    $("#header .header-right::after").css("height", "100%;");
    setTimeout(function(){
      $("#loading").fadeOut("slow");
      $(".flickity-viewport").css("height", $(".flickity-slider p img").height());
      $('body, html').scrollTop(0);
      $("#container").css("overflow", "visible");
      $("#container").css("height", "auto");
    },1000);

    // 画像の大きさを取得
    var star_width = stage.width;
    var star_height = stage.height;

    // 星の画像1
    var star = new createjs.Bitmap(loader.getResult("star1"));
    //画像の基準点(0の位置)を指定
    star.regX = parseInt(star_width) / 2;
    star.regY = parseInt(star_height) / 2;
    // 画像の位置を指定
    star.y = star.regY;
    star.x = star.regX;
    stage.addChild(star); // 表示リストに追加

    // 星の画像2
    var star2 = new createjs.Bitmap(loader.getResult("star2"));
    //画像の基準点(0の位置)を指定
    star2.regX = parseInt(star_width) / 2;
    star2.regY = parseInt(star_height) / 2;
    // 画像の位置を指定
    star2.y = star2.regY;
    star2.x = star2.regX;
    stage.addChild(star2); // 表示リストに追加

    // 星の画像3
    var star3 = new createjs.Bitmap(loader.getResult("star3"));
    //画像の基準点(0の位置)を指定
    star3.regX = parseInt(star_width) / 2;
    star3.regY = parseInt(star_height) / 2;
    // 画像の位置を指定
    star3.y = star3.regY;
    star3.x = star3.regX;
    stage.addChild(star3); // 表示リストに追加

    // 星座の画像
    var zodiac1 = new createjs.Bitmap(loader.getResult("zodiac1"));
    //画像の大きさを取得
    zodiac1_width = 500;
    zodiac1_height = 500;
    //画像の基準点(0の位置)を指定
    zodiac1.regX = parseInt(zodiac1_width) / 2;
    zodiac1.regY = parseInt(zodiac1_height) / 2;
    // 画像の位置を指定
    zodiac1.y = position_top + (canvas_height - canvas_height /10);
    zodiac1.x = position_left + canvas_width / 10;

    if(canvas_width > canvas_height){
      zodiac1.scaleX = (canvas_height / 3) / 500;
      zodiac1.scaleY = zodiac1.scaleX;
    }else{
      zodiac1.scaleY = (canvas_width / 3) / 500;
      zodiac1.scaleX = zodiac1.scaleY;
    }

    stage.addChild(zodiac1); // 表示リストに追加

    createjs.Ticker.addEventListener("tick", handleTick);
    function handleTick() {
      star.rotation += 0.05;
      star2.rotation += 0.1;
      star3.rotation += 0.2;

      //動け星座！
      createjs.Tween.get(zodiac1, {loop: true})
        .to({x: zodiac1.x, y: zodiac1.y, alpha: 0}, 0)
        .to({x: position_left + canvas_width / 4, y: position_top + canvas_height / 2, alpha: 1, rotation: 80}, 10000)
        .to({x: position_left + canvas_width / 2, y: position_top, alpha: 0, rotation: 160}, 10000)
        .wait(3000);

      // Stageの描画を更新します
      stage.update();
    };
  });
}
