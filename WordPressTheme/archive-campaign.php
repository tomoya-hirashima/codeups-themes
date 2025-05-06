<?php get_header(); ?>

<main>
  <section id="page-campaign-hero" class="page-campaign-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Campaign</h1>
      </div>
    </div>
  </section>

  <?php get_template_part('breadcrumb'); ?>

  <section id="page-campaign-main" class="page-campaign-main l-page-campaign-main">
    <div class="page-campaign-main__inner inner">
      <div class="page-campaign-main__container">
        <?php
        $taxonomy_slug = 'campaign_category';
        $terms = get_terms([
          'taxonomy' => $taxonomy_slug,
          'hide_empty' => false
        ]);
        // タブリスト
        if (!empty($terms) && !is_wp_error($terms)) :
        ?>
        <div class="page-campaign-main__tab-group tabs">
          <!-- 「ALL」リンク -->
          <a class="tabs__item tab is-active" href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>
          </a>
          <!-- 各カテゴリのリンク -->
          <?php foreach ($terms as $term) : ?>
          <a class="tabs__item tab" href="#<?php echo esc_url(get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>

          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- コンテンツ -->
        <div class="page-campaign-main__tab-contents tab-contents">
          <div class="tab-contents__item tab-content is-active" id="all">
            <div class="tab-content__container page-campaign-cards">
              <?php if (have_posts()) : ?>
              <?php while (have_posts()): the_post(); ?>
              <?php $show = get_field('show');
                  if ($show): ?>
              <div class="page-campaign-cards__item campaign-card campaign-card--detailed"
                id="campaign-<?php the_ID(); ?>">
                <figure class="campaign-card__img">
                  <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="">
                  <?php endif; ?>
                </figure>
                <div class="campaign-card__body">
                  <?php
                        $terms = get_the_terms(get_the_ID(), 'campaign_category');
                        if (!empty($terms) && !is_wp_error($terms)) :
                          $term_name = esc_html($terms[0]->name);
                        ?>
                  <h2 class="campaign-card__category"><?php echo $term_name; ?></h2>
                  <?php endif; ?>

                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                    <div class="campaign-card__info">
                      <?php
                            $normal_price = get_field('normal_price');
                            $discount = get_field('discount');
                            $period = get_field('period');
                            ?>
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price campaign-card__price--wide">
                        <del class="campaign-card__normal-price">&yen;<?php echo $normal_price; ?></del>
                        <div class="campaign-card__discount">
                          &yen;<?php echo $discount; ?>
                        </div>
                      </div>
                      <div class="campaign-card__extra">
                        <p class="campaign-card__description">
                          <?php the_content(); ?>
                        </p>
                        <?php if ($period): ?>
                        <p class="campaign-card__period"><?php echo $period; ?></p>
                        <?php endif; ?>
                        <p class="campaign-card__reserve">
                          ご予約・お問い合わせはコチラ
                        </p>
                        <div class="campaign-card__button">
                          <a href="./page-contact.html" class="button"><span>contact&nbsp;us</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <?php endwhile; ?>
              <?php endif; ?>

            </div>
          </div>
        </div>

        <!-- ページネーション -->
        <div class="page-campaign-main__pagination pagination">
          <?php global $wp_query; ?>
          <?php if (function_exists('wp_pagenavi')) : ?>
          <?php wp_pagenavi(); ?>
          <?php endif; ?>
        </div>


        <!-- <ul class="page-campaign-main__pagination pagination">
          <li class="pagination__prev"><a href="#"></a></li>
          <li class="pagination__item is-active"><a href="#">1</a></li>
          <li class="pagination__item"><a href="#">2</a></li>
          <li class="pagination__item"><a href="#">3</a></li>
          <li class="pagination__item"><a href="#">4</a></li>
          <li class="pagination__item u-desktop"><a href="#">5</a></li>
          <li class="pagination__item u-desktop"><a href="#">6</a></li>
          <li class="pagination__next"><a href="#"></a></li>
        </ul> -->

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>