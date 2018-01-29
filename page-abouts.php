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
  <?php echo show_breadcrumb("HOME", "Abouts(弊社について)"); ?>
</div>
<div class="contents-in cf">
  <div class="contents-left">
    <ul>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="index.html">会社情報</a></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="index.html#affiliation">加入団体・主要取引先</a></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="index.html#accessmap">アクセスマップ</a></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="index.html#recruit">採用情報</a></li>
    </ul>
  </div>
  <div class="contents-right">
    <div id="aboutcompany" class="contents-list">
      <h3>会社情報</h3>
      <div class="contents-list-in">
        <ul>
          <li>
            <h4>会社概要</h4>
            <div class="product_summary">
              <table class="product_table">
                <tbody>
                  <tr align="left" valign="top">
                    <th>会社名</th>
                    <td>株式会社FM.Bee (エフエム・ビー)</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>代表者</th>
                    <td>高畑　道子</td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td>
                      〒530-0047<br>
                      大阪府大阪市北区西天満１丁目２番５号<br>
                      大阪ＪＡビル５Ｆ
                    </td>
                  </tr>
                  <tr>
                    <th>設立日</th>
                    <td>2003年　3月　3日</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>資本金</th>
                    <td>1600万円</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>取引銀行</th>
                    <td>三井住友銀行　新大阪支店<br>
                    北おおさか信用金庫　淡路支店<br></td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>業務内容</th>
                    <td>受託開発ソフトウェア業、パッケージソフトウェア開発及び販売<br>
                    技術部<br>
                    ○システム開発室<br>
                    業務系システム設計・開発、保守・運用業務<br>
                    ○組込ソフトウェア開発室<br>
                    組込ソフトウェア開発、ユーティリティ開発、<br>
                    iPhone,iPad/Android用アプリケーションの開発<br>
                    各種SDKの開発</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>役員構成</th>
                    <td>
                      代表取締役社長 高畑 道子<br>
                      取締役 高祖 隆行<br>
                      監査役 勝山 満弘
                    </td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>その他</th>
                    <td>
                      <a href="http://www.h2.dion.ne.jp/~katsuyam/index.htm">顧問会計士 勝山 満弘</a> <br>
                      <a href="http://www.st-law.gr.jp/">顧問弁護士 田中 健治 下元 高文</a>
                    </td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>従業員</th>
                    <td>社員　18人 (他、常駐外部スタッフ1人)</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>許認可</th>
                    <td>
                      特定労働者派遣事業　特27-305494<br>
                      古物商　第621020120529号
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div id="affiliation" class="contents-list">
      <h3>加入団体・主要取引先</h3>
      <div class="contents-list-in">
        <ul>
          <li>
            <ul class="product_normallist">
              <li>
                <a href="http://www.hisco.jp/index.html" target="_blank">ハイテクノロジー・ソフトウェア開発協同組合 (HISCO)　理事</a>
              </li><li>
                <a href="http://www.ruby-b.com/" target="_blank">Rubyビジネス推進協議会　理事</a>
              </li><li>
                <a href="http://wao.jp.net/" target="_blank">一般社団法人女性と地域活性推進機構(WAO)　理事</a>
              </li><li>
                <a href="http://www.b-mall.ne.jp/CompanyDetail-IYbqCQdrJWiv.aspx" target="_blank">大阪商工会議所　会員</a>
              </li><li>
                <a href="http://www.osaka.cci.or.jp/jyoseikai/index.html" target="_blank">大阪商工会議所女性会　会員</a>
              </li><li>
                <a href="http://www.teamtsukamoto.sakura.ne.jp/" target="_blank">特定非営利活動法人　ウェアラブルコンピュータ研究開発機構（通称：チームつかもと）会員</a>
              </li><li>
                <a href="http://www.telecon.or.jp/index.html/" target="_blank">近畿情報通信協議会(KICC)　会員</a>
              </li><li>
                <a href="http://www.mssf.jp/" target="_blank">モバイルソーシャライズシステムフォーラム（MSSF)　会員</a>
              </li>
            </ul>
            <ul class="product_normallist">
              <li>
                <a href="http://www.z-bs.co.jp/" target="_blank">株式会社全農ビジネスサポート</a>
              </li><li>
                <a href="http://www.tsyscom.co.jp/" target="_blank">株式会社豊通シスコム株式会社</a>
              </li><li>
                <a href="http://www.elecom.co.jp/" target="_blank">エレコム株式会社</a>
              </li><li>
                <a href="http://www.logitec.co.jp/" target="_blank">ロジテック株式会社</a>
              </li><li>
                <a href="http://www.canon-its.co.jp/" target="_blank">キヤノンＩＴソリューションズ株式会社</a>
              </li><li>
                <a href="http://www.stefany.co.jp/" target="_blank">銀座ステファニー化粧品株式会社</a>
              </li><li>
                <a href="http://www.carinasystem.co.jp/" target="_blank">カリーナシステム株式会社</a>
              </li><li>
                デジタ・ドリシス
              </li><li>
                以上、順不同
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div id="accessmap" class="contents-list">
      <h3>アクセスマップ</h3>
      <div class="contents-list-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3280.481398897094!2d135.50628974138925!3d34.693036023711954!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ddaef689b9%3A0x49348d44147680a8!2z5pel5pysLCDjgJI1MzAtMDA0NyDlpKfpmKrlupzlpKfpmKrluILljJfljLropb_lpKnmuoDvvJHkuIHnm67vvJLiiJLvvJU!5e0!3m2!1sja!2sus!4v1499923907689" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <div id="recruit" class="contents-list">
      <h3>採用情報</h3>
      <div class="contents-list-in">
        <ul>
          <li>
            <h4>募集要項</h4>
            <div class="product_summary">
              <table>
                <tbody>
                  <tr align="left" valign="top">
                    <th>職種</th>
                    <td>ＳＥ・プログラマー</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>業務内容</th>
                    <td>○システム開発室<br>
                    業務系システム設計・開発、保守・運用業務<br>
                    ○組込ソフトウェア開発室<br>
                    組込ソフトウェア開発、ユーティリティ開発、<br>
                    iPhone,iPad/Android用アプリケーションの開発<br>
                    各種SDKの開発</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>雇用形態</th>
                    <td>契約社員・正社員（トライアル雇用を含む）</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>応募条件</th>
                    <td>高卒以上、職歴不問、年齢40歳まで</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>給与</th>
                    <td>当社の定める規定に順ずる・スキルに見合った給与を要相談</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>勤務時間・休日休暇</th>
                    <td>
                    <p>10：00～18：00　土日祝日、夏季休暇、年末年始</p>
                    </td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>勤務地</th>
                    <td>大阪</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>待遇</th>
                    <td>交通費支給、雇用保険、社会保険、昇給年１回</td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>応募方法・連絡先</th>
                    <td>メール（<a href="mailto:saiyou@fmbee.com?Subject=%5B%8D%CC%97%70%5D%89%9E%95%E5&amp;body=PDF%82%DC%82%BD%82%CDWORD%81%41EXCEL%82%C5%8D%EC%90%AC%82%B3%82%EA%82%BD%97%9A%97%F0%8F%91%82%F0%93%59%95%74%82%B5%82%C4%82%AD%82%BE%82%B3%82%A2%81%42">saiyou@fmbee.com</a>） または郵便で履歴書を送付</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>
</div>
<div id="footer">
<div class="footer-in">
  <div class="footer-trademark">
    <p>iPhoneまたはiPadは、Apple Inc.の商標です。</p>
    <p>Androidは、Google Inc.の商標または登録商標です。</p>
  </div>
  <nav>
    <a href="index.html">Home</a>
    <a href="news/index.html">News</a>
    <a href="service/index.html">Service</a>
    <a href="about/index.html">About</a>
    <a href="products/index.html">Products</a>
    <a href="support/index.html">Support</a>
    <a href="contact/index.html">Contact</a>
    <a href="javascript:void(0);"></a>
  </nav>
  <address>(c)2017 FM.Bee inc.</address>
</div>

<?php get_footer(); ?>
