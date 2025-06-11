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
              <?php
                $show = get_field('show');
                $normal_price = get_field('normal_price');
                $discount = get_field('discount');
                $period = get_field('period');

                 // 有効期間のチェック
                 $is_valid_period = true;
                 if ($period && !empty($period['end_date'])) {
                   $end = new DateTime($period['end_date']);
                   $today = new DateTime();
                   $is_valid_period = $end >= $today;
                 }

                 // 表示条件のチェック
                 if ($show && !empty($normal_price) && !empty($discount) && $is_valid_period):
              ?>
              <div class="page-campaign-cards__item campaign-card campaign-card--detailed">
                <figure class="campaign-card__img">
                  <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="NoImage">
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
                      $period = get_field('period');
                      // 価格の表示形式を整形
                      // カンマを削除し、数値に変換してからnumber_formatを適用
                      $formatted_normal_price = '¥' . number_format((float)str_replace(',', '', $normal_price));
                      $formatted_discount = '¥' . number_format((float)str_replace(',', '', $discount));
                    ?>
                    <p class="campaign-card__content">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="campaign-card__price campaign-card__price--wide">
                      <div class="campaign-card__normal-price"><?php echo $formatted_normal_price; ?></div>
                      <div class="campaign-card__discount"><?php echo $formatted_discount; ?></div>
                    </div>
                      <div class="campaign-card__extra">
                        <p class="campaign-card__description">
                          <?php the_content(); ?>
                        </p>

                        <?php
                        $period = get_field('period');

                        if ($period):
                          $start_raw = $period['start_date'];
                          $end_raw   = $period['end_date'];

                          if ($start_raw && $end_raw):
                            // 日付オブジェクトに変換
                            $start = new DateTime($start_raw);
                            $end   = new DateTime($end_raw);

                            // 年・月・日を取得
                            $start_year = $start->format('Y');
                            $start_md   = $start->format('n/j');
                            $end_year   = $end->format('Y');
                            $end_md     = $end->format('n/j');

                            // 出力ロジック
                            echo '<p class="campaign-card__period">';
                            if ($start_year === $end_year) {
                              echo $start_year . '/' . $start_md . ' 〜 ' . $end_md;
                            } else {
                              echo $start_year . '/' . $start_md . ' 〜 ' . $end_year . '/' . $end_md;
                            }
                            echo '</p>';

                          elseif ($start_raw):
                            $start = new DateTime($start_raw);
                            echo '<p class="campaign-card__period">' . $start->format('Y/n/j') . ' 〜 </p>';

                          elseif ($end_raw):
                            $end = new DateTime($end_raw);
                            echo '<p class="campaign-card__period">〜 ' . $end->format('Y/n/j') . '</p>';
                          endif;

                        endif;
                        ?>

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