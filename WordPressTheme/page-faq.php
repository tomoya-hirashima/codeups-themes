<?php
/*
Template Name:FAQ
*/
get_header(); ?>

<section id="page-faq-hero" class="page-faq-hero hero">
  <div class="hero__inner">
    <div class="hero__content">
      <h1 class="hero__title">FAQ</h1>
    </div>
  </div>
</section>

<?php get_template_part('parts/breadcrumb'); ?>

<section id="page-faq-main" class="page-faq-main l-page-faq-main">
  <div class="page-faq-main__inner inner">
    <div class="page-faq-main__container accordion js-accordion">
      <div class="accordion__container">
        <?php
        $faq = SCF::get('faq');
        if (!empty($faq)) :
          foreach ($faq as $item) :
            if (empty($item['question']) || empty($item['answer'])) :
              continue;
          endif;
        ?>
        <div class="accordion__item accordion-box js-accordion-box">
          <div class="accordion-box__question js-accordion-box__question">
            <h2 class="accordion-box__question-text"><?php echo esc_html($item['question']); ?></h2>
          </div>
          <div class="accordion-box__answer js-accordion-box__answer">
            <p class="accordion-box__answer-text">
              <?php echo nl2br(esc_html($item['answer'])); ?>
            </p>
          </div>
        </div>
        <?php
          endforeach;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>