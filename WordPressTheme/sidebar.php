  <div class="sidebar">
    <div class="sidebar__inner">
      <!-- 人気記事 -->
      <div class="sidebar__category sidebar-category">
        <div class="sidebar-category__heading sidebar-heading">
          <div class="sidebar-heading__wrapper">
            <div class="sidebar-heading__icon"></div>
            <h2 class="sidebar-heading__title">人気記事</h2>
          </div>
        </div>
        <div class="sidebar-category__container">
          <ul class="sidebar-category__items sidebar-blog-cards">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'meta_key' => 'views',
              'orderby' => 'meta_value_num',
              'order' => 'DESC',
            );
            $popular_query = new WP_Query($args);
            ?>
            <?php if ($popular_query->have_posts()): ?>
            <?php while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
            <li class="sidebar-blog-cards__item sidebar-blog-card">
              <a href="<?php the_permalink(); ?>">
                <div class="sidebar-blog-card__img">
                  <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="sidebar-blog-card__body">
                  <time class="sidebar-blog-card__date" datetime="<?php the_time('Y-n-j'); ?>">
                    <?php the_time('Y.m/d'); ?>
                  </time>
                  <p class="sidebar-blog-card__title">
                    <?php the_title(); ?>
                  </p>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>

      <!-- 口コミ -->
      <div class="sidebar__category sidebar-category">
        <div class="sidebar__heading sidebar-heading">
          <div class="sidebar-heading__wrapper">
            <div class="sidebar-heading__icon"></div>
            <h2 class="sidebar-heading__title">口コミ</h2>
          </div>
        </div>
        <div class="sidebar-category__container">
          <?php
          $args = array(
            'post_type' => 'voice',
            'posts_per_page' => 1,
          );
          $voice_query = new WP_Query($args);
          ?>
          <?php if ($voice_query->have_posts()): ?>
          <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
          <div class="sidebar-category__item sidebar-voice-card">
            <div class="sidebar-voice-card__img">
              <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="">
              <?php endif; ?>
            </div>
            <div class="sidebar-voice-card__body">
              <?php
                  $voice_character = get_field('voice_character');
                  ?>
              <p class="sidebar-voice-card__character"><?php echo $voice_character; ?></p>
              <p class="sidebar-voice-card__title">
                <?php the_title(); ?>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          <!--  口コミ・ボタン-->
          <div class="sidebar-category__button">
            <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button"><span>View&nbsp;more</span></a>
          </div>
        </div>
      </div>

      <!-- キャンペーン -->
      <div class="sidebar__category sidebar-category">
        <div class="sidebar-category__heading sidebar-heading">
          <div class="sidebar-heading__wrapper">
            <div class="sidebar-heading__icon"></div>
            <h2 class="sidebar-heading__title">キャンペーン</h2>
          </div>
        </div>
        <div class="sidebar-category__container">
          <ul class="sidebar-category__items sidebar-campaign-cards">
            <?php
            $args = array(
              'post_type' => 'campaign',
              'posts_per_page' => 2,
            );
            $campaign_query = new WP_Query($args);
            ?>
            <?php if ($campaign_query->have_posts()): ?>
            <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
            <?php
                $normal_price = get_field('normal_price');
                $discount = get_field('discount');
                $period = get_field('period');
                ?>

            <li class="sidebar-campaign-cards__item sidebar-campaign-card">
              <a href="<?php echo get_post_type_archive_link('campaign') . '#campaign-' . get_the_ID(); ?>">
                <figure class="sidebar-campaign-card__img">
                  <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="">
                  <?php endif; ?>
                </figure>
                <div class="sidebar-campaign-card__body">
                  <div class="sidebar-campaign-card__wrapper">
                    <p class="sidebar-campaign-card__title">
                      <?php the_title(); ?>
                    </p>
                    <div class="sidebar-campaign-card__info">
                      <p class="sidebar-campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <?php if ($normal_price && $discount): ?>
                      <div class="sidebar-campaign-card__price">
                        <del
                          class="sidebar-campaign-card__normal-price">&yen;<?php echo esc_html($normal_price); ?></del>
                        <div class="sidebar-campaign-card__discount">&yen;<?php echo esc_html($discount); ?></div>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
          <!--  キャンペーン・ボタン-->
          <div class="sidebar-category__button">
            <a href="<?php echo get_post_type_archive_link('campaign'); ?>"
              class="button"><span>View&nbsp;more</span></a>
          </div>
        </div>
      </div>

      <!-- アーカイブ -->
      <div class="sidebar__category sidebar-category">
        <div class="sidebar-category__heading sidebar-heading">
          <div class="sidebar-heading__wrapper">
            <div class="sidebar-heading__icon"></div>
            <h2 class="sidebar-heading__title">アーカイブ</h2>
          </div>
        </div>
        <div class="sidebar-category__container">

          <?php
          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1, // 全件取得
            'orderby'        => 'date',
            'order'          => 'DESC',
          );

          $archive_query = new WP_Query($args);

          $archives = array(); // 年月グループをためる配列

          if ($archive_query->have_posts()):
            while ($archive_query->have_posts()): $archive_query->the_post();
              $year = get_the_date('Y'); // 年だけ取得
              $month = get_the_date('n'); // 月だけ取得
              $archives[$year][] = $month; // 年をキーに、月を配列として追加
            endwhile;
          endif;
          wp_reset_postdata();
          ?>


          <?php
          $latest_year = array_key_first($archives); // 配列の最初のキー（最新の年）を取得
          ?>
          <ul class="sidebar-category__past-posts past-posts">
            <?php foreach ($archives as $year => $months): ?>
            <?php
              $is_open = ($year === $latest_year) ? ' is-open' : '';
              ?>
            <li class="past-posts__year">
              <span
                class="past-posts__year-label js-past-posts-year <?php echo $is_open; ?>"><?php echo esc_html($year); ?></span>
              <ul class="past-posts__month-list js-past-posts-month <?php echo $is_open; ?>">
                <?php
                  $months = array_unique($months); // 月の重複を除く
                  rsort($months); // 月を降順に並べ替える
                  foreach ($months as $month):
                  ?>
                <li class="past-posts__month">
                  <a href="<?php echo get_month_link($year, $month); ?>" class="past-posts__link">
                    <span><?php echo esc_html($month); ?>月</span>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </li>
            <?php endforeach; ?>
          </ul>

        </div>
      </div>

    </div>
  </div>