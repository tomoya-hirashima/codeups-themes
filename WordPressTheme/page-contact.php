<?php
/*
Template Name:お問い合わせ
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section id="page-contact-hero" class="page-contact-hero hero">
  <div class="hero__inner">
    <div class="hero__content">
      <h1 class="hero__title">Contact</h1>
    </div>
  </div>
</section>

<?php get_template_part('parts/breadcrumb'); ?>

<section id="page-contact-main" class="page-contact-main l-page-contact-main">
  <div class="page-contact-main__inner inner">
    <div class="page-contact-main__container">
      <?php echo do_shortcode('[contact-form-7 id="18014ad" title="お問い合わせ" html_class="page-contact-main__form form" html_format="false"]'); ?>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>