<?php
/*
Template Name:お問い合わせ
*/
get_header(); ?>

<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section id="page-contact-hero" class="page-contact-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Contact</h1>
      </div>
    </div>
  </section>

  <?php get_template_part('breadcrumb'); ?>

  <section id="page-contact-main" class="page-contact-main l-page-contact-main">
    <div class="page-contact-main__inner inner">
      <div class="page-contact-main__container">
        <?php echo do_shortcode('[contact-form-7 id="18014ad" title="お問い合わせ" html_class="page-contact-main__form form" html_format="false"]'); ?>
      </div>
    </div>
  </section>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>




<!-- <form action="hogehoge.jp/hoge.php" method="post" class="page-contact-main__form form">
  <table class="form__table">
    <tr class="form__wrapper form-wrapper">
      <th class="form-wrapper__item"><span>お名前</span></th>
      <td class="form-wrapper__body">
        <input type="text" name="名前" class="form-wrapper__text" placeholder="沖縄&emsp;太郎" />
      </td>
    </tr>
    <tr class="form__wrapper form-wrapper">
      <th class="form-wrapper__item"><span>メールアドレス</span></th>
      <td class="form-wrapper__body">
        <input type="email" name="メール" class="form-wrapper__text" placeholder="aaa000@ggmail.com" />
      </td>
    </tr>
    <tr class="form__wrapper form-wrapper">
      <th class="form-wrapper__item"><span>電話番号</span></th>
      <td class="form-wrapper__body">
        <input type="tel" name="電話" class="form-wrapper__text" placeholder="000-0000-0000" />
      </td>
    </tr>
    <tr class="form__wrapper form-wrapper">
      <th class="form-wrapper__item"><span>お問い合わせ項目</span></th>
      <td class="form-wrapper__body  form-wrapper__body-4th">
        <label class="form-wrapper__inquiry">
          <input type="checkbox" name="diving-course" value="diving-license" />
          <span class="form-wrapper__inquiry-text">ダイビング講習について</span>
        </label>
        <label class="form-wrapper__inquiry">
          <input type="checkbox" name="diving-course" value="fun-diving" />
          <span class="form-wrapper__inquiry-text">ファンダイビングについて</span>
        </label>
        <label class="form-wrapper__inquiry">
          <input type="checkbox" name="diving-course" value="try-diving" />
          <span class="form-wrapper__inquiry-text">体験ダイビングについて</span>
        </label>
      </td>
    </tr>
    <tr class="form__wrapper form-wrapper">
      <th class="form-wrapper__item">キャンペーン</th>
      <td class="form-wrapper__body form-wrapper__body-5th">
        <select name="キャンペーン" class="form-wrapper__select">
          <option>キャンペーン内容を選択</option>
          <option>ここに入ります</option>
          <option>ここに入ります</option>
          <option>ここに入ります</option>
        </select>
      </td>
    </tr>
    <tr class="form__wrapper form-wrapper">
      <th class="form-wrapper__item"><span>お問い合わせ内容</span></th>
      <td class="form-wrapper__body form-wrapper__body-6th">
        <textarea name="問い合わせ内容" class="form-wrapper__textarea"></textarea>
      </td>
    </tr>
  </table>
  <div class="form__private">
    <input type="checkbox" name="diving-course" id="private" />
    <label for="private" class="form__private-text">個人情報の取り扱いについて同意のうえ<br class="u-mobile">送信します。</label>
  </div>
  <div class="form__button">
    <a href="./page-contact-error.html" class="button button-send"><span>Send</span></a>
  </div>
</form> -->