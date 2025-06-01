<?php get_header(); ?>

  <section id="page-campaign-hero" class="page-campaign-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Campaign</h1>
      </div>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumb'); ?>

  <section id="page-campaign-main" class="page-campaign-main l-page-campaign-main">
    <div class="page-campaign-main__inner inner">
      <div class="page-campaign-main__container">
        <?php
        $taxonomy_slug = 'campaign_category';
        $terms = get_terms([
            'taxonomy' => $taxonomy_slug,
            'hide_empty' => false
        ]);
        if (!empty($terms) && !is_wp_error($terms)) :
        ?>
        <div class="page-campaign-main__tab-group tabs">

          <!-- ALLタブ -->
          <a class="tabs__item tab <?php if (is_post_type_archive('campaign')) echo 'is-active'; ?>"
            href="<?php echo get_post_type_archive_link('campaign'); ?>">
            ALL
          </a>

          <!-- カテゴリタブ -->
          <?php foreach ($terms as $term) : ?>
          <?php
              // 現在表示中のカテゴリIDと一致したら is-active クラスを付与
              $is_active = (is_tax('campaign_category') && $term->term_id === get_queried_object_id());
              ?>
          <a class="tabs__item tab <?php if ($is_active) echo 'is-active'; ?>"
            href="<?php echo esc_url(get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="page-campaign-main__tab-contents tab-contents">
          <div class="tab-contents__item tab-content is-active" id="all">
            <div class="tab-content__container page-campaign-cards">
              <?php if (have_posts()) : ?>
              <?php while (have_posts()): the_post(); ?>
              <?php $show = get_field('show');
                  if ($show): ?>
              <div class="page-campaign-cards__item campaign-card campaign-card--detailed">
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
                          <a href="<?php echo get_post_type_archive_link('contact'); ?>"
                            class="button"><span>contact&nbsp;us</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <?php endwhile; ?>
              <?php else : ?>
              <p>このカテゴリには投稿がありません。</p>
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

      </div>
    </div>
  </section>


<?php get_footer(); ?>