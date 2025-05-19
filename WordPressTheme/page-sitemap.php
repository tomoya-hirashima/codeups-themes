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
              <a href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
            </li>
            <li class="nav-group__item"><a href="<?php echo (home_url('/campaign-category/')); ?>license">
                ライセンス取得
              </a></li>
            <li class="nav-group__item">
              <a href="<?php echo (home_url('/campaign-category/')); ?>fun-diving">ファンダイビング</a>
            </li>
            <li class="nav-group__item">
              <a href="<?php echo (home_url('/campaign-category/')); ?>trial-diving">体験ダイビング</a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
            </li>
          </ul>
        </div>
        <div class="nav-group__container nav-group__container--2">
          <!-- ダイビング情報コンテナ -->
          <ul class="nav-group__items">
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/info/')); ?>">ダイビング情報</a>
            </li>
            <li class="nav-group__item"><a
                href="<?php echo esc_url(home_url('/info/')); ?>#info-tab-content1">ライセンス講習</a></li>
            <li class="nav-group__item"><a
                href="<?php echo esc_url(home_url('/info/')); ?>#info-tab-content3">体験ダイビング</a></li>
            <li class="nav-group__item"> <a
                href="<?php echo esc_url(home_url('/info/')); ?>#info-tab-content2">ファンダイビング</a></li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="nav-group__container nav-group__container--3">
          <!-- お客様の声コンテナ -->
          <ul class="nav-group__items">
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
            </li>
            <li class="nav-group__item"><a href="<?php echo esc_url(home_url('/price/')); ?>#license">ライセンス講習</a></li>
            <li class="nav-group__item"><a href="<?php echo esc_url(home_url('/price/')); ?>#trial-diving">体験ダイビング</a>
            </li>
            <li class="nav-group__item"> <a href="<?php echo esc_url(home_url('/price/')); ?>#fun-diving">ファンダイビング</a>
            </li>
          </ul>
        </div>
        <div class="nav-group__container nav-group__container--4">
          <!-- よくある質問コンテナ -->
          <ul class="nav-group__items">
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシー<br class="footer-md-none" />
                <span class="nav-group__container4--indent">ポリシー</span>
              </a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/terms/')); ?>">利用規約</a>
            </li>
            <li class="nav-group__item nav-group__item--main nav-group-item--black">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>