<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="contents-title">
  <h2>HOME > Support(製品サポート)</h2>
</div>
<div class="contents-in cf">
  <div class="contents-left">
    <ul>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="#beeindex">よくある御質問</a></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="#products">製品に関するサポート</a></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="#sdk">SDKに関するサポート</a></li>
    </ul>
  </div>
  <div class="contents-right">
    <div id="beeindex" class="contents-list">
      <h3>よくある御質問</h3>
      <div class="contents-list-in">
        <ul>
          <li>
            <h5>製品概要</h5>

            <dl class="qa_drawer">
              <dt class="">beeCam かんたん! 3D</dt>
              <dd style="display: none;">
                <dl>
                  <dt><span>Q.</span>2台のWebカメラを認識しないのですが？</dt>
                  <dd>
                    <span>A.</span>beeCam かんたん!３Ｄを一旦終了させ、
                    別のUSBポートにWebカメラを接続しなおしてから再度beeCam かんたん！３Ｄを起動してみてください。 
                    USBハブをご使用の場合は、ハブを介さずWebカメラを直接接続してください。
                    なるべく他のUSB機器を接続しない状態で試してください。 
                    それでも認識しない場合は、Webカメラを接続しているUSBポートを変えてみてください。<br>
                    [例]<br>
                    １台目のWebカメラはフロントのUSBポート<br>
                    ２台目のWebカメラはリアのUSBポート
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>2台のWebカメラでの撮影方法のコツはありますか？</dt>
                  <dd>
                    <span>A.</span>
                    Webカメラを被写体から1.5～2メートル離れた位置に設置してください。<br>
                    2台のWebカメラの間隔を4～5センチ程度で設置してください。<br>
                    2台のWebカメラをなるべく平行に設置してください。beeCam かんたん！３Ｄをアナグリフモードで表示させたとき、 ２台のカメラの映像にズレが少ないほうが立体視しやすくなります。カメラの設置後、beeCam かんたん！３Ｄ上の 矢印ボタンでカメラのズレの微調整を行ってください。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>平行法で立体視の方法は？</dt>
                  <dd>
                    <span>A.</span>
                    beeCam かんたん！３Ｄのウインドウを小さめにしてください。
                    <br>モニタに近づいて正面から映像を見てください。
                    <br>見えにくい場合は、モニタと目の間に板や紙などを入れて、右目は右の映像、左目は左の映像だけを見るようにしてください。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>交差法での立体視の方法は？</dt>
                  <dd>
                    <span>A.</span>
                    モニタに表示される２つに分かれた映像の中心に指を置いて（目から間接２個分ぐらいの間隔）指先を見てください。 （ここで寄り目になるので、左目は右の映像、右目は左の映像が見えます）
                    <br>すると３個の映像が見えてくるので、その中心にあるが映像が３Ｄに見えます。
                  </dd>
                </dl>

                <p>※その他、ご不明な点につきましては、<a href="contact.html?product=3D">こちらからお問い合わせ</a>ください。 </p>
              </dd>

              <dt class="">beeCam かんたん! キャプチャV</dt>
              <dd style="display: none;">現在準備中
                <p>※ご不明な点につきましては、<a href="contact.html?product=CaptureV">こちらからお問い合わせ</a>ください。 </p>
              </dd>

              <dt class="">beeCam LightMeter</dt>
              <dd style="display: none;">
                <dl>
                  <dt><span>Q.</span>露出が測定できないのですが？</dt>
                  <dd>
                    <span>A.</span>照度計が利用できない端末では露出が測定できません。
                    <br>その場合は手動で照度またはEVを入力することで、絞り・シャッター速度を計算することができます。
                  </dd>
                </dl>
                <p>※その他、ご不明な点につきましては、<a href="contact.html?product=LightMeter">こちらからお問い合わせ</a>ください。</p>
              </dd>

              <dt class="">beeCam EasyShot</dt>
              <dd style="display: none;">
                <dl>
                  <dt><span>Q.</span>アプリケーションの表示が縦表示にならないのですが？</dt>
                  <dd>
                    <span>A.</span>本アプリケーションは横向き表示専用になります。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>撮影した写真の表示方法は？</dt>
                  <dd>
                    <span>A.</span>端末のメニューキー→「ギャラリー」を実行してください。
                    <br>または、Android標準のギャラリーアプリを使用してください。
                  </dd>
                </dl>
                <p>※その他、ご不明な点につきましては、<a href="contact.html?product=LightMeter">こちらからお問い合わせ</a>ください。</p>
              </dd>

              <dt class="">beeCam Easy連写（Android版）</dt>
              <dd style="display: none;">

                <dl>
                  <dt><span>Q.</span>撮影した画像はどこに保存されていますか？</dt>
                  <dd>
                    <span>A.</span>以下の場所に保存されています。撮影毎にフォルダに分かれて画像が保存されます。
                    <br>/sdcard/jp.co.fmbee/intervalshot/
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>不要な画像を削除するには？</dt>
                  <dd>
                    <span>A.</span>本アプリの「ギャラリー」で削除したい画像のフォルダを長押ししてください。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>撮影画面の左端のテキストを消すには？</dt>
                  <dd>
                    <span>A.</span>画面左端をタッチすると消すことが出来ます。もう一度タッチすると再表示されます。
                  </dd>
                </dl>
                <p>※その他、ご不明な点につきましては、<a href="contact.html?product=LightMeter">こちらからお問い合わせ</a>ください。</p>
              </dd>

              <dt class="">beeCam Easy連写（iPhone版）</dt>
              <dd style="display: none;">

                <dl>
                  <dt><span>Q.</span>撮影した画像はどこに保存されていますか？</dt>
                  <dd>
                    <span>A.</span>アプリ内の保存エリア。
                    <br>※撮影後、カメラロールへコピーすることができます
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>不要な画像を削除するには？</dt>
                  <dd>
                    <span>A.</span>アプリ内の保存エリア。
                    <br>メニューから[アルバム]の削除機能を使用して下さい。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>撮影画面の左端のテキストを消すには？</dt>
                  <dd>
                    <span>A.</span>アプリ内の保存エリア。
                    <br>設定メニューの「詳細情報」で「表示なし」にして下さい。
                  </dd>
                </dl>
                <p>※その他、ご不明な点につきましては、<a href="contact.html?product=LightMeter">こちらからお問い合わせ</a>ください。</p>
              </dd>

              <dt class="">beeIndex MHP3</dt>
              <dd style="display: none;">
                ※このiPhoneアプリは弊社所属のえふえむびーもんはん部が趣味の部活で製作したものでしたが
                <br>株式会社カプコン様よりご指摘があり、アプリの公開を中止致しました。
                <br>ご使用頂きました皆様には大変ご迷惑をお掛けいたしますが、今後のサポートも合わせて
                <br>中止させて頂きます。あしからず、ご了承頂きますようお願い申し上げます。
              </dd>

              <dt class="">beeIndex ぷち</dt>
              <dd style="display: none;">

                <dl>
                  <dt><span>Q.</span>詳細で色やフォントを変更できますか？</dt>
                  <dd>
                    <span>A.</span>色やフォント変更などはできません。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>Bookのバックアップをとる方法はありますか？</dt>
                  <dd>
                    <span>A.</span>ありません。アプリを削除すると中のBookも全て削除されます。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>ソート機能はありませんか？</dt>
                  <dd>
                    <span>A.</span>ありません。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>整理するにはどうすればいいですか？</dt>
                  <dd>
                    <span>A.</span>右上のeditボタンで編集モードへ移り、右の≡マークをドラッグ&amp;ドロップすることで移動できます。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>サンプルは削除しても大丈夫ですか？</dt>
                  <dd>
                    <span>A.</span>大丈夫です。
                  </dd>
                </dl>
                <p>※その他、ご不明な点につきましては、<a href="contact.html?product=LightMeter">こちらからお問い合わせ</a>ください。</p>
              </dd>

              <dt class="">アヒルの脱走</dt>
              <dd style="display: none;">現在準備中
                <p>※ご不明な点につきましては、<a href="contact.html?product=CaptureV">こちらからお問い合わせ</a>ください。 </p>
              </dd>

              <dt class="">beeApp 図書委員(Android版)</dt>
              <dd style="display: none;">

                <dl>
                  <dt><span>Q.</span>エクスポート・インポートで使用される文字コードはなんですか？</dt>
                  <dd>
                    <span>A.</span>UTF-8です。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>データのバックアップをとる方法はありますか？</dt>
                  <dd>
                    <span>A.</span>エクスポート、インポートが可能なのでバックアップ代わりに使用できます。
                    バックアップ時は初期画面で[メニュー]-[設定]-[エクスポート]を選択後、出力フォーマットを選択して下さい。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>デ情報検索時に「見当たらない」と表示されます</dt>
                  <dd>
                    <span>A.</span>情報検索に楽天ブックスAPIを使用している為、情報が取得出来ない場合が有ります。
                    その場合は、登録画面で各項目を手入力してください。
                    <br>また、タイトル＋著者名（タイトルのみでも可）で部分一致検索が出来ます。
                    検索結果は一覧で表示（Max50件）されるので、該当するものを選択して下さい。
                    <br>選択したデータにISBNまたはJANコードが設定されている場合、そのコードで通常のコード検索が自動で行われます。
                    <br>選択データにコードが設定されていない場合でも、タイトル検索で取得できた項目はセットしますので、
                    残りの項目を手入力の上、[登録]ボタンを2回クリック（管理番号の採番と登録）で登録できます。 
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>「画像はありません」という画像が表示されています</dt>
                  <dd>
                    <span>A.</span>情報検索に楽天ブックスAPIを使用しているため、楽天側で画像が用意されていない場合、このイメージを返しているようです。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>「画像はありません」画像を自分で用意した画像と入れ替える事は出来ますか？</dt>
                  <dd>
                    <span>A.</span>登録画面で画像の長押しでコンテキストメニューが表示されます。
                    そこで「撮影」を選択すると、カメラが起動されますので必要な画像を撮影してください。
                    <br>「戻る」ボタンでカメラを終了すると、今撮影した画像が表示されています。
                    <br>画像が横向きなどになっていた場合は、同様にコンテキストメニューから「回転」を選択することで修正できます。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>検索で取得した画像が壊れてしまったようですが、設定しなおす事は可能ですか？</dt>
                  <dd>
                    <span>A.</span>Ver.1.6.2で発生した登録を繰り返すと画像が荒くなってくると言う不具合や、
                    間違ってカメラ画像で入れ替えてしまった、などの場合には、画像の再取得が出来ます。
                    <br>登録画面で画像（または通常画像が表示される[登録]ボタンの左側あたり）の長押しでコンテキストメニューが表示されます。
                    そこで「再取得」を選択すると、データに登録されている画像URLから画像を再取得します。
                    <br>取得した画像が表示されたら、「登録」ボタンで登録を行ってください
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>私の持っている書籍にはISBNコードはありません。</dt>
                  <dd>
                    <span>A.</span>この場合でも、以下の手順で登録できます。
                    <br>①タイトル（と必要に応じて著者名）を手入力（一部でもかまいませんが、なるべく特定しやすい内容にして下さい）し「検索」ボタンをクリック。
                    <br>②部分一致検索で該当する情報が一覧表示されるので、該当するものを選択します。
                    <br>選択したデータにISBN（またはJAN）コードが存在する場合、そのコードで通常のコード検索が自動実行されます。
                    <br>③コード検索で見つかった場合は通常の検索実行時と同様に、そのまま「登録」出来ます。
                    <br>見つからなかった場合でも、タイトル検索で取得できた情報は画面にセットされていますので、他の項目をセットし「登録」して下さい。
                    <br>④コードが存在しなかった場合（またはタイトル検索で該当無しの場合）、ISBN（またはJAN）コード以外の項目を手入力します。（必要な項目のみでかまいません。）
                    <br>⑤コードは空のまま「登録」ボタンをクリックします。
                    <br>⑥自動採番するか確認されますので「OK」をクリックします。
                    <br>⑦コード欄に採番された管理番号が表示されますので、もう一度「登録」ボタンをクリックします。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>私の持っている本のISBNコードは10桁しかありません。</dt>
                  <dd>
                    <span>A.</span>er.1.5以降では10桁ISBNコードに対応しましたので、
                    そのまま10桁をISBNコード欄に入力して「検索」ボタンをクリックすると、自動的に13桁コードに変換されて検索が実行されます。
                  </dd>
                </dl>
                <p>※その他、ご不明な点につきましては、<a href="contact.html?product=LightMeter">こちらからお問い合わせ</a>ください。</p>
              </dd>

              <dt class="">beeApp 図書委員(iPhone版)</dt>
              <dd style="display: none;">現在準備中
                <p>※ご不明な点につきましては、<a href="contact.html?product=CaptureV">こちらからお問い合わせ</a>ください。 </p>
              </dd>

              <dt class="">beeApp ImageCollect</dt>
              <dd style="display: none;">

                <dl>
                  <dt><span>Q.</span>画像がダウンロードできません。</dt>
                  <dd>
                    <span>A.</span>大きなサイズの画像（縦横1024px以上）はダウンロードできない可能性があります。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>小さい画像ですがダウンロードできません。</dt>
                  <dd>
                    <span>A.</span>画像の保存形式が対応していない可能性があります。pngかjpgでお願いします。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>ダウンロードした画像が保存されていません。</dt>
                  <dd>
                    <span>A.</span>ダウンロードした時点ではまだ画像は保存されません。右下のsaveボタンを押してください。
                  </dd>
                </dl>
                <p>※ご不明な点につきましては、<a href="contact.html?product=CaptureV">こちらからお問い合わせ</a>ください。 </p>
              </dd>

              <dt class="">beeApp WA.RI.KAN(iPhone版)</dt>
              <dd style="display: none;">

                <dl>
                  <dt><span>Q.</span>確認ボタンを見つけられません</dt>
                  <dd>
                    <span>A.</span>確認ボタンはカメラ機能のついている機種でのみ使用していただけます。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>負担額とは何ですか？</dt>
                  <dd>
                    <span>A.</span>グループ内の数人だけ金額を固定したい場合などに使用します。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>確認画面で撮影した画像を一つずつ消したい</dt>
                  <dd>
                    <span>A.</span>消したい画像にタッチするとタッチされた画像は消えます。
                  </dd>
                </dl>
                <p>※ご不明な点につきましては、<a href="contact.html?product=CaptureV">こちらからお問い合わせ</a>ください。 </p>
              </dd>

              <dt class="">beeApp WA.RI.KAN(Android版)</dt>
              <dd style="display: none;">

                <dl>
                  <dt><span>Q.</span>負担額とは何ですか？</dt>
                  <dd>
                    <span>A.</span>グループ内の数人だけ金額を固定したい場合などに使用します。
                  </dd>
                </dl>

                <dl>
                  <dt><span>Q.</span>確認ボタン・Clearボタンが見当たりません</dt>
                  <dd>
                    <span>A.</span>端末の戻るボタンを押し、ソフトウェアキーボードを消して下さい。
                  </dd>
                </dl>
                <p>※ご不明な点につきましては、<a href="contact.html?product=CaptureV">こちらからお問い合わせ</a>ください。 </p>
              </dd>

              <dt class="">The Werewolf(人狼ゲーム)</dt>
              <dd style="display: none;">現在準備中
                <p>※ご不明な点につきましては、<a href="contact.html?product=CaptureV">こちらからお問い合わせ</a>ください。 </p>
              </dd>
            </dl>

          </li>
        </ul>
      </div>
    </div>

    <div id="products" class="contents-list">
      <h3>製品に関するサポート</h3>
      <div class="contents-list-in">現在準備中です。</div>
    </div>

    <div id="sdk" class="contents-list">
      <h3>SDKに関するサポート</h3>
      <div class="contents-list-in">現在準備中です。</div>
    </div>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(function(){
  $(".qa_drawer > dt").click(function(){
    var whether_open = $(this).next("dd").css("display");
    if(whether_open == "block"){
      $(this).next("dd").slideUp(500);
    }else{
      $(".qa_drawer > dd").slideUp(0);
      $(this).next("dd").slideDown(500);
    }
  });
});
</script>

<?php get_footer(); ?>
