<?php
/*
Template Name:sitemap
*/
get_header(); ?>

<main>
  <section id="page-sitemap-hero" class="page-sitemap-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Site MAP</h1>
      </div>
    </div>
  </section>

  <?php get_template_part('breadcrumb'); ?>

  <section id="page-sitemap-main" class="page-sitemap-main l-page-sitemap-main">
    <div class="page-sitemap-main__inner inner">
      <div class="page-sitemap-main__navigation nav-group nav-group--black">
        <div class="nav-group__container nav-group__container--1">
          <!-- キャンペーンコンテナ -->
          <ul class="nav-group__items">
            <li class="nav-group__item  nav-group__item--main nav-group-item--black">
              <a href="./page-campaign.html">キャンペーン</a>
            </li>
            <li class="nav-group__item"><a href="./page-campaign.html#license">ライセンス取得</a></li>
            <li class="nav-group__item">
              <a href="./page-campaign.html#private-booking">貸切体験ダイビング</a>
            </li>
            <li class="nav-group__item"><a href="./page-campaign.html#night-diving">ナイトダイビング</a></li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-about.html">私たちについて</a>
            </li>
          </ul>
        </div>
        <div class="nav-group__container nav-group__container--2">
          <!-- ダイビング情報コンテナ -->
          <ul class="nav-group__items">
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-info.html">ダイビング情報</a>
            </li>
            <li class="nav-group__item"><a href="./page-info.html">ライセンス講習</a></li>
            <li class="nav-group__item"><a href="./page-info.html">体験ダイビング</a></li>
            <li class="nav-group__item"><a href="./page-info.html">ファンダイビング</a></li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-blog.html">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="nav-group__container nav-group__container--3">
          <!-- お客様の声コンテナ -->
          <ul class="nav-group__items">
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-voice.html">お客様の声</a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-price.html">料金一覧</a>
            </li>
            <li class="nav-group__item"><a href="./page-price.html#license">ライセンス講習</a></li>
            <li class="nav-group__item"><a href="./page-price.html#trial-diving">体験ダイビング</a></li>
            <li class="nav-group__item"><a href="./page-price.html#fun-diving">ファンダイビング</a></li>
          </ul>
        </div>
        <div class="nav-group__container nav-group__container--4">
          <!-- よくある質問コンテナ -->
          <ul class="nav-group__items">
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-faq.html">よくある質問</a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-privacy.html">プライバシー<br class="footer-md-none" />
                <p class="nav-group__container4--indent">ポリシー</p>
              </a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-terms.html">利用規約</a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="./page-contact.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

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
            <p class="section-heading__main section-heading__main--big">contact</p>
            <h2 class="section-heading__sub">お問い合わせ</h2>
          </div>
          <p class="contact__induction">ご予約・お問い合わせはコチラ</p>
          <div class="contact__button">
            <a href="./page-contact.html" class="button"><span>contact&nbsp;us</span></a>
          </div>
        </div>
      </div>
    </div>
    </section>
</main>

<?php get_footer(); ?>