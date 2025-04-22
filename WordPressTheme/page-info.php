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
            <h3 class="section-heading__sub">お問い合わせ</h3>
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