<?php get_header(); ?>

<main>
  <section id="page-404-main" class="page-404-main l-page-404-main">
    <div class="page-404-main__inner inner">
      <div class="page-404-main__container">

        <?php get_template_part('breadcrumb'); ?>

        <div class="page-404-main__message">
          <h1 class="page-404-main__error">404</h1>
          <h2 class="page-404-main__text">申し訳ありません。<br>
            お探しのページが見つかりません。</h2>
          <div class="page-404-main__button">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
              class="button button-white"><span>page&nbsp;TOP</span></a>
          </div>
        </div>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>