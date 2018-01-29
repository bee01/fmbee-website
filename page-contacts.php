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
  <?php echo show_breadcrumb("HOME", "Contacts(お問い合わせ)"); ?>
</div>
<div class="contents-in cf">
  <div class="contents-left">
    <ul>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="#contact">お問い合わせ</a></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kirakira-green.png" alt /><a href="#privacy">プライバシーポリシー</a></li>
    </ul>
  </div>
  <div class="contents-right">
    <div id="contact" class="contents-list">
      <h3>お問い合わせ</h3>
      <div class="contents-list-in">
        <ul>
          <li>
            <div class="product_summary">
              <table class="product_table">
                <tbody>
                  <tr align="left" valign="top">
                    <th>製品名</th>
                    <td>
                      <select name="product">
                        <option value="beeCam かんたん！3D " selected="">beeCam かんたん！3D</option>
                        <option value="beeCam かんたん！キャプチャV ">beeCam かんたん！キャプチャV</option>
                        <option value="beeCam LightMeter ">beeCam LightMeter</option>
                        <option value="beeCam EasyShot ">beeCam EasyShot</option>
                        <option value="beeCam Easy連写(IntervalShot) ">beeCam Easy連写(IntervalShot/Android版)</option>
                        <option value="beeCam Easy連写(iOS/iPhon版) ">beeCam Easy連写(iPhone版)</option>
                        <option value="beeCam3D_SDK ">beeCam3D_SDK</option>
                        <option value="beeCamVirtul_SDK ">beeCamVirtul_SDK</option>
                        <option value="beeCamHDR_SDK ">beeCamHDR_SDK</option>
                        <option value="beeIndex MHP3 ">beeIndex MHP3</option>
                        <option value="beeIndex ぷち ">beeIndex ぷち</option>
                        <option value="アヒルの脱走(Break Duck) ">アヒルの脱走(Break Duck)</option>
                        <option value="beeApp 図書委員 ">beeApp 図書委員</option>
                        <option value="beeApp ImageCollect ">beeApp ImageCollect</option>
                        <option value="beeApp WA.RI.KAN ">beeApp WA.RI.KAN</option>
                        <option value="Rubyを使った開発について ">Rubyを使った開発について</option>
                        <option value="The Werewolf (人狼ゲーム）">The Werewolf (人狼ゲーム）</option>
                        <option value="その他のお問合わせ ">その他のお問合わせ</option>
                      </select>
                    </td>
                  </tr>
                  <tr align="left" valign="top">
                    <th class="textareath">お問い合わせ内容</th>
                    <td>
                      <textarea></textarea>
                    </td>
                  </tr>
                  <tr>
                    <th>お名前（漢字） </th>
                    <td><input type="text" /></td>
                  </tr>
                  <tr>
                    <th>E-mail</th>
                    <td><input type="text" /></td>
                  </tr>
                  <tr align="left" valign="top">
                    <th>添付ファイル</th>
                    <td><input type="file"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div id="privacy" class="contents-list">
      <h3>プライバシーポリシー</h3>
      <div class="contents-list-in">
        <ul>
          <li>
            <h5>個人情報の収集と目的について</h5>
            <div class="product_summary">
              <p class="product_summary_in cf">
                弊社のウェブサイトではお客様の個人情報を入力して頂く場合がございます。<br />
                この場合、情報の目的、利用内容を明示します。<br />
                弊社では、ウェブサイト上で業務上知り得た個人情報について本プライバシーポリシーに従って管理されます。
              </p>
            </div>
            <h5>個人情報の管理について</h5>
            <div class="product_summary">
              <p class="product_summary_in cf">
                弊社では、お客様の個人情報を収集した際には、プライバシーを尊重し、個人情報を保護するために厳重に管理いたします。<br />
                また、お客様の個人情報の紛失、破壊、改ざんおよび漏洩に関し、予防措置を講ずるとともに、
                万一の発生時には速やかに是正措置を実施いたします。 
              </p>
            </div>
            <h5>取得した個人情報の取扱いについて</h5>
            <div class="product_summary">
              <p class="product_summary_in cf">
                弊社では、お客様の個人情報を内外部に一切開示致しません。<br />
                但し、お客様サービス向上の為、弊社内部での参考資料の目的に限り、お客様の個人情報を使用させて頂く場合がございます。<br />
                また、公的な第三者機関からの適法・適式な手順による情報の開示要請があった場合には、止むを得ず開示する場合がございます。<br />
                なお、本項に変更が発生した場合は、弊社のウェブサイト上で告知を行い、利用者へお知らいたします。 
              </p>
            </div>
            <h5>収集したメールアドレスへのメール送付について</h5>
            <div class="product_summary">
              <p class="product_summary_in cf">
                個人情報としてご提供いただいたメールアドレスに対して、お客様に有益と思われる情報を、
                弊社からメールを送信させていただく場合がございます。<br />
                なお、弊社からのメールが必要でない場合はメール送信を中止することが可能です。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
