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

</main>

<?php get_footer(); ?>