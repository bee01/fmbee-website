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
  <h2>CONTACTS</h2>
  <h3>下記のフォームよりFM.Beeへお問い合わせいただけます。</h3>
</div>
<div class="contents-in cf">
  <div class="contents-left">
    <ul>
      <?php global $page_kind;
      $page_kind = "contacts";
      get_sidebar("iphone"); ?>
    </ul>
  </div>
  <div class="contents-right">
    <div id="contact" class="contents-list">
      <h3>お問い合わせ</h3>
      <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
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
