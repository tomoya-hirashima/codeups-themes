<?php get_header(); ?>

<?php
 $sliders = SCF::get('slider-img');
 if (!empty($sliders)) : ?>
<section id="mv" class="mv">
  <div class="mv__inner">
    <div class="mv__slider swiper js-swiper-mv">
      <div class="mv__swiper-wrapper swiper-wrapper">
        <?php foreach ($sliders as $slide) :
              $slider_pc = wp_get_attachment_image_src($slide['slider_pc'], 'full');
              $slider_sp = wp_get_attachment_image_src($slide['slider_sp'], 'full');
            ?>
        <div class="mv__swiper-slide swiper-slide">
          <picture>
            <?php if ($slider_sp) : ?>
            <source srcset="<?php echo esc_url($slider_sp[0]); ?>" media="(max-width:767px)" />
            <?php endif; ?>
            <?php if ($slider_pc) : ?>
            <img src="<?php echo esc_url($slider_pc[0]); ?>" alt="<?php echo esc_attr($text); ?>" />
            <?php endif; ?>
          </picture>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
    <div class="mv__content">
      <h2 class="mv__title">diving</h2>
      <p class="mv__text">into&nbsp;the&nbsp;ocean</p>
    </div>
  </div>
</section>

<section id="campaign" class="campaign l-campaign">
  <div class="campaign__inner inner">
    <div class="campaign__heading section-heading">
      <p class="section-heading__main">campaign</p>
      <h2 class="section-heading__sub">キャンペーン</h2>
      <!-- ナビゲーションボタン -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>
    <div class="campaign__swiper-box">
      <div class="campaign__slider swiper js-swiper-campaign">
        <div class="campaign__swiper-wrapper swiper-wrapper">
          <?php
            $args = array(
              'post_type' => 'campaign',
              'posts_per_page' => 6,
            );
            $top_campaign_query = new WP_Query($args);
            ?>
          <?php if ($top_campaign_query->have_posts()): ?>
          <?php while ($top_campaign_query->have_posts()) : $top_campaign_query->the_post(); ?>
          <?php
            $show = get_field('show');
            $normal_price = get_field('normal_price');
            $discount = get_field('discount');

            if ($show && !empty($normal_price) && !empty($discount)):
          ?>

          <div class="campaign__slide swiper-slide">
            <a href="<?php echo get_post_type_archive_link('campaign') . '#campaign-' . get_the_ID(); ?>"
              class="campaign__item campaign-card">
              <figure class="campaign-card__img">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="">
                <?php endif; ?>
              </figure>
              <div class="campaign-card__body">
                <?php
                  $terms = get_the_terms(get_the_ID(), 'campaign_category');
                  if (!empty($terms) && !is_wp_error($terms)) :
                    $term_name = esc_html($terms[0]->name);
                ?>
                <p class="campaign-card__category"><?php echo $term_name; ?></p>
                <?php endif; ?>
                <div class="campaign-card__wrapper">
                  <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                  <div class="campaign-card__info">
                    <p class="campaign-card__content">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="sidebar-campaign-card__price">
                      <div class="sidebar-campaign-card__normal-price">&yen;<?php echo esc_html($normal_price); ?></div>
                      <div class="sidebar-campaign-card__discount">&yen;<?php echo esc_html($discount); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endif; ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
    <div class="campaign__button">
      <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="button"><span>contact&nbsp;us</span></a>
    </div>
  </div>
</section>

<section id="about" class="about l-about">
  <div class="about__inner inner">
    <div class="about__wrapper">
      <div class="about__heading section-heading">
        <p class="section-heading__main">about&nbsp;us</p>
        <h2 class="section-heading__sub">私たちについて</h2>
      </div>
      <div class="about__contents">
        <div class="about__img-container">
          <div class="about__img1">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-fish-pc.jpg"
              alt="青い海の中を泳ぐ2匹の鮮やかな黄色い魚" />
          </div>
          <div class="about__img2">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-roof-pc.jpg"
              alt="青空と屋根上のシーサー" />
          </div>
        </div>
        <div class="about__text-container">
          <h3 class="about__message-title">
            Dive&nbsp;into<br />the&nbsp;Ocean
          </h3>
          <div class="about__message-box">
            <p class="about__message-text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about__button">
              <a href="<?php echo esc_url(home_url('/about/')); ?>" class="button"><span>contact&nbsp;us</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="info" class="info l-info">
  <div class="info__inner inner">
    <div class="info__heading section-heading">
      <p class="section-heading__main">information</p>
      <h2 class="section-heading__sub">ダイビング情報</h2>
    </div>
    <div class="info__wrapper">
      <div class="info__img img-animation">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-img-pc.jpg"
          alt="海底で珊瑚礁のそばを泳ぐ黄色の魚や青い魚" />
      </div>
      <div class="info__details">
        <div class="info__description">
          <h3 class="info__title">ライセンス講習</h3>
          <div class="info__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </div>
        </div>
        <div class="info__button">
          <a href="<?php echo esc_url(home_url('/info/')); ?>" class="button"><span>contact&nbsp;us</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog" class="blog l-blog">
  <div class="blog__inner inner">
    <div class="blog__wrapper">
      <div class="blog__heading section-heading">
        <p class="section-heading__main section-heading__main--color">
          blog
        </p>
        <h2 class="section-heading__sub section-heading__sub--white">
          ブログ
        </h2>
      </div>
      <ul class="blog__items blog-cards">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          );
          $blog_query = new WP_Query($args);
          ?>
        <?php if ($blog_query->have_posts()): ?>
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
        <li class="blog-cards__item blog-card">
          <a href="<?php the_permalink(); ?>">
            <figure class="blog-card__img">
              <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="">
              <?php endif; ?>
            </figure>
            <div class="blog-card__body">
              <time datetime="<?php echo get_the_date('c'); ?>" class="blog-card__date">
                <?php echo get_the_date('Y.m/d'); ?>
              </time>
              <h3 class="blog-card__title"><?php the_title(); ?></h3>
              <p class="blog-card__text">
                <?php 
                  $excerpt = get_the_excerpt();
                  if (!empty($excerpt)) {
                    echo mb_substr($excerpt, 0, 89) . '...';
                  } else {
                    echo '記事の内容がありません。';
                  }
                ?>
              </p>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>
      <div class="blog__button">
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="button"><span>contact&nbsp;us</span></a>
      </div>
    </div>
  </div>
</section>

<section id="voice" class="voice l-voice">
  <div class="voice__inner inner">
    <div class="voice__wrapper">
      <div class="voice__heading section-heading">
        <p class="section-heading__main">voice</p>
        <h2 class="section-heading__sub">お客様の声</h2>
      </div>
      <ul class="voice__items voice-cards">
        <?php
          $args = array(
            'post_type' => 'voice',
            'posts_per_page' => 2,
          );
          $top_voice_query = new WP_Query($args);
          ?>
        <?php if ($top_voice_query->have_posts()): ?>
        <?php while ($top_voice_query->have_posts()) : $top_voice_query->the_post(); ?>
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
              <?php the_content(); ?>
            </p>
          </div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="button"><span>contact&nbsp;us</span></a>
      </div>
    </div>
  </div>
</section>

<section id="price" class="price l-price">
  <div class="price__inner inner">
    <div class="price__wrapper">
      <div class="price__heading section-heading">
        <p class="section-heading__main">price</p>
        <h2 class="section-heading__sub">料金一覧</h2>
      </div>
      <div class="price__contents">
        <div class="price__imgbox img-animation">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img-sp.jpg"
              media="(max-width: 767px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img-pc.jpg" alt="珊瑚礁と多数の赤色の魚" />
          </picture>
        </div>

        <div class="price__items price-box">
          <?php
            $args = array(
              'post_type' => 'page',
              'pagename'  => 'price',
            );
            $price_query = new WP_Query($args);
            ?>

          <?php if ($price_query->have_posts()) : ?>
          <?php while ($price_query->have_posts()) : $price_query->the_post(); ?>

          <?php
                $price_sections = array(
                  array(
                    'field'  => 'license_courses',
                    'title'  => 'ライセンス講習',
                    'id'     => 'license',
                    'course' => 'license_course',
                    'price'  => 'license_price',
                  ),
                  array(
                    'field'  => 'trial_diving',
                    'title'  => '体験ダイビング',
                    'id'     => 'trial-diving',
                    'course' => 'trial_course',
                    'price'  => 'trial_price',
                  ),
                  array(
                    'field'  => 'fun_diving',
                    'title'  => 'ファンダイビング',
                    'id'     => 'fun-diving',
                    'course' => 'fun_course',
                    'price'  => 'fun_price',
                  ),
                  array(
                    'field'  => 'special_diving',
                    'title'  => 'スペシャルダイビング',
                    'id'     => 'special-diving',
                    'course' => 'special_course',
                    'price'  => 'special_price',
                  ),
                );
                ?>

          <table class="price__items price-box">
            <?php foreach ($price_sections as $section) :
              $items = SCF::get($section['field']);
              if (!empty($items)) : ?>
                <table class="price-box__item price-table" id="<?php echo esc_attr($section['id']); ?>">
                  <colgroup>
                    <col class="price-table__col1" />
                    <col class="price-table__col2" />
                  </colgroup>
                  <thead>
                    <tr>
                      <th colspan="2"><?php echo esc_html($section['title']); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($items as $item) :
                      if (!empty($item[$section['course']]) && !empty($item[$section['price']])) : ?>
                    <tr>
                      <td><?php echo wp_kses_post($item[$section['course']]); ?></td>
                      <td>
                        <?php
                          $price = (int) $item[$section['price']];
                          echo esc_html('¥' . number_format($price));
                        ?>
                      </td>
                    </tr>
                    <?php endif;
                    endforeach; ?>
                  </tbody>
                </table>
              <?php endif;
              endforeach; ?>
          </table>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo esc_url(home_url('/price/')); ?>" class="button"><span>contact&nbsp;us</span></a>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>