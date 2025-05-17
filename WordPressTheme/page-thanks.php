<?php
/*
Template Name:thanks
*/
get_header(); ?>

<main>
  <section id="page-contact-hero" class="page-contact-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Contact</h1>
      </div>
    </div>
  </section>

  <nav class="breadcrumbs l-breadcrumbs">
    <div class="breadcrumbs__inner inner">
      <ul class="breadcrumbs__items">
        <li class="breadcrumbs__item">
          <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
        </li>
        <li class="breadcrumbs__item">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
        </li>
        <li class="breadcrumbs__item">送信完了</li>
      </ul>
    </div>
  </nav>

  <section id="page-contact-main" class="page-contact-main l-page-contact-main">
    <div class="page-contact-main__inner inner">
      <h2 class="page-contact-main__announce">お問い合わせ内容を送信完了しました。</h2>
      <h3 class="page-contact-main__message">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</h3>
    </div>
  </section>
</main>

<?php get_footer(); ?>