<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />

  <!-- ogp -->
  <meta property="og:title" content="CodeUps" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://kenpi555.xsrv.jp/codeups-diving/wp-test/" />
  <meta property="og:image"
    content="https://kenpi555.xsrv.jp/codeups-diving/wp-test/themes/src/images/common/ogp-image.png" />
  <meta property="og:site_name" content="CodeUps" />
  <meta property="og:description" content="CodeUpsでは沖縄のダイビング会社です。様々なダイビングプランを用意しております。" />
  <meta name="twitter:card" content="summary" />

  <?php wp_head(); ?>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MF7J5CR3PX"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-MF7J5CR3PX');
</script>


<body>
  <header class="header js-header" id="#js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo-img.svg" alt="CodeUps" />
        </a>
      </h1>
      <nav class="header__nav nav-bar">
        <ul class="nav-bar__items">
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>">
              <p class="nav-bar__item-main">Campaign</p>
              <p class="nav-bar__item-sub">キャンペーン</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/about/')); ?>">
              <p class="nav-bar__item-main">About&nbsp;us</p>
              <p class="nav-bar__item-sub">私たちについて</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/info/')); ?>">
              <p class="nav-bar__item-main">Information</p>
              <p class="nav-bar__item-sub">ダイビング情報</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>">
              <p class="nav-bar__item-main">Blog</p>
              <p class="nav-bar__item-sub">ブログ</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>">
              <p class="nav-bar__item-main">Voice</p>
              <p class="nav-bar__item-sub">お客様の声</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/price/')); ?>">
              <p class="nav-bar__item-main">Price</p>
              <p class="nav-bar__item-sub">料金一覧</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/faq/')); ?>">
              <p class="nav-bar__item-main nav-bar__item-main--big">faq</p>
              <p class="nav-bar__item-sub">よくある質問</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
              <p class="nav-bar__item-main">Contact</p>
              <p class="nav-bar__item-sub">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </nav>
      <div class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="header__drawer drawer js-drawer">
      <div class="drawer__inner inner">
        <div class="drawer__wrapper nav-group">
          <div class="nav-group__container nav-group__container--1">
            <!-- キャンペーンコンテナ -->
            <ul class="nav-group__items">
              <li class="nav-group__item nav-group__item--main">
                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo (home_url('/campaign-category/')); ?>license">ライセンス取得</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo (home_url('/campaign-category/')); ?>fun-diving">貸切体験ダイビング</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo (home_url('/campaign-category/')); ?>trial-diving">体験ダイビング</a>
              </li>
              <li class="nav-group__item nav-group__item--main">
                <a href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
              </li>
            </ul>
          </div>
          <div class="nav-group__container nav-group__container--2">
            <!-- ダイビング情報コンテナ -->
            <ul class="nav-group__items">
              <li class="nav-group__item nav-group__item--main">
                <a href="<?php echo esc_url(home_url('/info/')); ?>">ダイビング情報</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo esc_url(home_url('/info/')); ?>#info-tab-content1">ライセンス講習</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo esc_url(home_url('/info/')); ?>#info-tab-content3">体験ダイビング</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo esc_url(home_url('/info/')); ?>#info-tab-content2">ファンダイビング</a>
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
                <a href="<?php echo esc_url(home_url('/price/')); ?>#license">ライセンス講習</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo esc_url(home_url('/price/')); ?>#trial-diving">体験ダイビング</a>
              </li>
              <li class="nav-group__item">
                <a href="<?php echo esc_url(home_url('/price/')); ?>#fun-diving">ファンダイビング</a>
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
                  <p class="nav-group__container4--indent">ポリシー</p>
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
      </div>
    </div>
  </header>

  <main>