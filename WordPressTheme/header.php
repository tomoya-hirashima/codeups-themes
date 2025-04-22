<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header js-header" id="#js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="index.html">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo-img.svg" alt="CodeUps" />
        </a>
      </h1>
      <nav class="header__nav nav-bar">
        <ul class="nav-bar__items">
          <li class="nav-bar__item">
            <a href="./page-campaign.html">
              <p class="nav-bar__item-main">Campaign</p>
              <p class="nav-bar__item-sub">キャンペーン</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="./page-about.html">
              <p class="nav-bar__item-main">About&nbsp;us</p>
              <p class="nav-bar__item-sub">私たちについて</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="./page-info.html">
              <p class="nav-bar__item-main">Information</p>
              <p class="nav-bar__item-sub">ダイビング情報</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="./page-blog.html">
              <p class="nav-bar__item-main">Blog</p>
              <p class="nav-bar__item-sub">ブログ</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="./page-voice.html">
              <p class="nav-bar__item-main">Voice</p>
              <p class="nav-bar__item-sub">お客様の声</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="./page-price.html">
              <p class="nav-bar__item-main">Price</p>
              <p class="nav-bar__item-sub">料金一覧</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="./page-faq.html">
              <p class="nav-bar__item-main nav-bar__item-main--big">faq</p>
              <p class="nav-bar__item-sub">よくある質問</p>
            </a>
          </li>
          <li class="nav-bar__item">
            <a href="./page-contact.html">
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
                <a href="./page-campaign.html">キャンペーン</a>
              </li>
              <li class="nav-group__item">
                <a href="./page-campaign.html#license">ライセンス取得</a>
              </li>
              <li class="nav-group__item">
                <a href="./page-campaign.html#private-booking">貸切体験ダイビング</a>
              </li>
              <li class="nav-group__item">
                <a href="./page-campaign.html#night-diving">ナイトダイビング</a>
              </li>
              <li class="nav-group__item nav-group__item--main">
                <a href="./page-about.html">私たちについて</a>
              </li>
            </ul>
          </div>
          <div class="nav-group__container nav-group__container--2">
            <!-- ダイビング情報コンテナ -->
            <ul class="nav-group__items">
              <li class="nav-group__item nav-group__item--main">
                <a href="./page-info.html">ダイビング情報</a>
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
                <a href="./page-blog.html">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="nav-group__container nav-group__container--3">
            <!-- お客様の声コンテナ -->
            <ul class="nav-group__items">
              <li class="nav-group__item nav-group__item--main">
                <a href="./page-voice.html">お客様の声</a>
              </li>
              <li class="nav-group__item nav-group__item--main">
                <a href="./page-price.html">料金一覧</a>
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
                <a href="./page-faq.html">よくある質問</a>
              </li>
              <li class="nav-group__item nav-group__item--main">
                <a href="./page-privacy.html">プライバシー<br class="footer-md-none" />
                  <p class="nav-group__container4--indent">ポリシー</p>
                </a>
              </li>
              <li class="nav-group__item nav-group__item--main">
                <a href="./page-terms.html">利用規約</a>
              </li>
              <li class="nav-group__item nav-group__item--main">
                <a href="./page-contact.html">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>