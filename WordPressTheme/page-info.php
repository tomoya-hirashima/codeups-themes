<?php
/*
Template Name:ダイビング情報
*/
get_header(); ?>


<main>
  <section id="page-info-hero" class="page-info-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Information</h1>
      </div>
    </div>
  </section>

  <?php get_template_part('breadcrumb'); ?>

  <section id="page-info-main" class="page-info-main l-page-info-main">
    <div class="page-info-main__inner inner">
      <div class="page-info-main__tab-group info-tabs">
        <a href="#tab1" class="info-tabs__item info-tab js-info-tab is-active" data-target="license">
          <span>ライセンス<br class="u-mobile">講習</span>
        </a>
        <a href="#tab2" class="info-tabs__item info-tab js-info-tab" data-target="fun-diving">
          <span>ファン<br class="u-mobile">ダイビング</span>
        </a>
        <a href="#tab3" class="info-tabs__item info-tab js-info-tab" data-target="trial-diving">
          <span>体験<br class="u-mobile">ダイビング</span>
        </a>
      </div>

      <div class="page-info-main__tab-contents info-tab-contents">
        <div class="info-tab-contents__item info-tab-content js-info-tab-content is-active" id="info-tab-content1">
          <div class="info-tab-content__container">
            <div class="info-tab-content__text">
              <h2 class="info-tab-content__title">ライセンス講習</h2>
              <p class="info-tab-content__description">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="info-tab-content__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info-img1.jpg" alt="ライセンス講習" />
            </div>
          </div>
        </div>
        <div class="info-tab-contents__item info-tab-content js-info-tab-content" id="info-tab-content2">
          <div class="info-tab-content__container">
            <div class="info-tab-content__text">
              <h2 class="info-tab-content__title">ファンダイビング</h2>
              <p class="info-tab-content__description">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="info-tab-content__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info-img2.jpg" alt="ライセンス講習" />
            </div>
          </div>
        </div>
        <div class="info-tab-contents__item info-tab-content js-info-tab-content" id="info-tab-content3">
          <div class="info-tab-content__container">
            <div class="info-tab-content__text">
              <h2 class="info-tab-content__title">体験ダイビング</h2>
              <p class="info-tab-content__description">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="info-tab-content__img">
              <img src="<?php echo get_theme_file_uri(); ?>//assets/images/common/sub-info-img3.jpg" alt="ライセンス講習" />
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>