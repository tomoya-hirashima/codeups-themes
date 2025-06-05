<?php get_header(); ?>

<section id="page-voice-hero" class="page-voice-hero hero">
  <div class="hero__inner">
    <div class="hero__content">
      <h1 class="hero__title">Voice</h1>
    </div>
  </div>
</section>

<?php get_template_part('parts/breadcrumb'); ?>

<section id="page-voice-main" class="page-voice-main l-page-voice-main">
  <div class="page-voice-main__inner inner">
    <div class="page-voice-main__container">
      <?php
        $taxonomy_slug = 'voice_category';
        $terms = get_terms([
          'taxonomy' => $taxonomy_slug,
          'hide_empty' => false
        ]);
        // タブリスト
        if (!empty($terms) && !is_wp_error($terms)) :
        ?>
      <div class="page-voice-main__tab-group tabs">
        <!-- 「ALL」リンク -->
        <a class="tabs__item tab is-active" href="<?php echo get_post_type_archive_link('voice'); ?>">ALL</a>
        </a>
        <!-- 各カテゴリのリンク -->
        <?php foreach ($terms as $term) : ?>
        <a class="tabs__item tab" href="<?php echo esc_url(get_term_link($term)); ?>">
          <?php echo esc_html($term->name); ?>
        </a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- コンテンツ -->
      <div class="page-voice-main__tab-contents tab-contents">
        <div class="tab-contents__item tab-content js-tab-content is-active" id="all">
          <ul class="tab-content__container voice-cards">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>
            <?php $show = get_field('show');
                  if ($show): ?>
            <li class="voice-cards__item voice-card">
              <div class="voice-card__wrapper">
                <div class="voice-card__header">
                  <div class="voice-card__info">
                    <div class="voice-card__details">
                      <?php
                          $voice_character = get_field('voice_character');
                        ?>
                      <p class="voice-card__character"><?php echo $voice_character; ?></p>
                      <?php
                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                        if (!empty($terms) && !is_wp_error($terms)) :
                          $term_name = esc_html($terms[0]->name);
                        ?>
                      <p class="voice-card__category"><?php echo $term_name; ?></p>
                      <?php endif; ?>
                    </div>
                    <h2 class="voice-card__title">
                      <?php the_title(); ?>
                    </h2>
                  </div>
                  <figure class="voice-card__img img-animation">
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('full'); ?>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="">
                    <?php endif; ?>
                  </figure>
                </div>
                <p class="voice-card__text">
                  <?php echo nl2br(get_the_content()); ?>
                </p>
              </div>
            </li>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>

        <!-- ページネーション -->
        <div class="page-campaign-main__pagination pagination">
          <?php global $wp_query; ?>
          <?php if (function_exists('wp_pagenavi')) : ?>
          <?php wp_pagenavi(); ?>
          <?php endif; ?>
        </div>

      </div>
    </div>
</section>

<?php get_footer(); ?>