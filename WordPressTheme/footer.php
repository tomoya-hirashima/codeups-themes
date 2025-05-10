<div class="pagetop-button js-pagetop">
  <a href="#mv">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pagetop-button.png" alt="ページトップボタン" /></a>
</div>


<?php if (!is_page('contact') &&  !is_404()) : ?>
<div id="contact" class="contact l-contact">
  <div class="contact__inner inner">
    <div class="contact__wrapper">
      <div class="contact__container1">
        <div class="contact__logo">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.svg" alt="CodeUps" />
        </div>
        <div class="contact__contents">
          <ul class="contact__info">
            <li>沖縄県那覇市1-1</li>
            <li class="tel">
              <a href="tel:0120-000-0000">TEL:0120-000-0000</a>
            </li>
            <li>営業時間:8:30-19:00</li>
            <li>定休日:毎週火曜日</li>
          </ul>
          <div class="contact__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5407.640736201455!2d127.69327721190673!3d26.218749963611163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f8!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1728902076588!5m2!1sja!2sjp"
              width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__container2">
        <div class="contact__heading section-heading">
          <p class="section-heading__main section-heading__main--big">
            contact
          </p>
          <h4 class="section-heading__sub">お問い合わせ</h4>
        </div>
        <p class="contact__induction">ご予約・お問い合わせはコチラ</p>
        <div class="contact__button">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>contact&nbsp;us</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<footer class="footer l-footer<?php if (is_404()) echo ' l-footer--mt0'; ?>">
  <div class="footer__inner inner">
    <div class="footer__heading">
      <h2 class="footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.svg" alt="CodeUps" />
        </a>
      </h2>
      <ul class="footer__icon">
        <li class="footer__icon-facebook">
          <a href="#" target="_blank" rel="noopener noreferrer"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-logo.svg" alt="facebook" /></a>
        </li>
        <li class="footer__icon-instagram">
          <a href="#" target="_blank" rel="noopener noreferrer"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-logo.svg" alt="instagram" /></a>
        </li>
      </ul>
    </div>
    <div class="footer__wrapper nav-group">
      <div class="nav-group__container nav-group__container--1">
        <!-- キャンペーンコンテナ -->
        <ul class="nav-group__items">
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
          </li>
          <li class="nav-group__item">
            <a href="<?php echo home_url(); ?>/campaign#license">
              ライセンス取得
            </a>
          </li>
          <li class="nav-group__item">
            <a href="./page-campaign.html#private-booking">貸切体験ダイビング</a>
          </li>
          <li class="nav-group__item">
            <a href="./page-campaign.html#night-diving">ナイトダイビング</a>
          </li>
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
          </li>
        </ul>
      </div>
      <div class=" nav-group__container nav-group__container--2">
        <!-- ダイビング情報コンテナ -->
        <ul class="nav-group__items">
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/info/')); ?>">ダイビング情報</a>
          </li>
          <li class="nav-group__item">
            <a href="./page-info.html#info-tab-content1">ライセンス講習</a>
          </li>
          <li class="nav-group__item">
            <a href="./page-info.html#info-tab-content3">体験ダイビング</a>
          </li>
          <li class="nav-group__item">
            <a href="./page-info.html#info-tab-content2">ファンダイビング</a>
          </li>
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
          </li>
        </ul>
      </div>
      <div class="nav-group__container nav-group__container--3">
        <!-- お客様の声コンテナ -->
        <ul class="nav-group__items">
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
          </li>
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
          </li>
          <li class="nav-group__item">
            <a href="./page-price.html#license">ライセンス講習</a>
          </li>
          <li class="nav-group__item">
            <a href="./page-price.html#trial-diving">体験ダイビング</a>
          </li>
          <li class="nav-group__item">
            <a href="./page-price.html#fun-diving">ファンダイビング</a>
          </li>
        </ul>
      </div>
      <div class="nav-group__container nav-group__container--4">
        <!-- よくある質問コンテナ -->
        <ul class="nav-group__items">
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
          </li>
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシー<br class="footer-md-none" />
              <span class="nav-group__container4--indent">ポリシー</span>
            </a>
          </li>
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/terms/')); ?>">利用規約</a>
          </li>
          <li class="nav-group__item nav-group__item--main">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
    <small
      class="footer__copyright">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>