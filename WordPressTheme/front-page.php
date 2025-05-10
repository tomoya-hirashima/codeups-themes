<?php get_header(); ?>

<main>
  <section id="mv" class="mv">
    <div class="mv__inner">
      <?php
      $sliders = SCF::get('slider-img');
      if (!empty($sliders)) : ?>
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
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1-sp.jpg"
                    alt="色鮮やかなたくさんの種類の魚" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ライセンス講習</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;56,000</del>
                        <div class="campaign-card__discount">
                          &yen;46,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2-sp.jpg"
                    alt="浅瀬に停まる数台の船と遠くに見える島" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;24,000</del>
                        <div class="campaign-card__discount">
                          &yen;18,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3-sp.jpg"
                    alt="水中で光るたくさんの小さなクラゲ" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;10,000</del>
                        <div class="campaign-card__discount">
                          &yen;8,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4-sp.jpg"
                    alt="水面に浮かんだ4人のダイバーと奥に見える雄大な山" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ファンダイビング</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">
                      貸切ファンダイビング
                    </h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;20,000</del>
                        <div class="campaign-card__discount">
                          &yen;16,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1-sp.jpg"
                    alt="色鮮やかなたくさんの種類の魚" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ライセンス講習</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;56,000</del>
                        <div class="campaign-card__discount">
                          &yen;46,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2-sp.jpg"
                    alt="浅瀬に停まる数台の船と遠くに見える島" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;24,000</del>
                        <div class="campaign-card__discount">
                          &yen;18,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3-sp.jpg"
                    alt="水中で光るたくさんの小さなクラゲ" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;10,000</del>
                        <div class="campaign-card__discount">
                          &yen;8,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__slide swiper-slide">
              <a href="#" class="campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4-sp.jpg"
                    alt="水面に浮かんだ4人のダイバーと奥に見える雄大な山" />
                </figure>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ファンダイビング</p>
                  <div class="campaign-card__wrapper">
                    <h3 class="campaign-card__title">
                      貸切ファンダイビング
                    </h3>
                    <div class="campaign-card__info">
                      <p class="campaign-card__content">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price">
                        <del class="campaign-card__normal-price">&yen;20,000</del>
                        <div class="campaign-card__discount">
                          &yen;16,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="campaign__button">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>contact&nbsp;us</span></a>
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
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>contact&nbsp;us</span></a>
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
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>contact&nbsp;us</span></a>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="">
                <?php endif; ?>
              </figure>
              <div class="blog-card__body">
                <time datetime="<?php the_time('Y-n-j'); ?>" class="blog-card__date">
                  <?php the_time('Y.m/d'); ?>
                </time>
                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <p class="blog-card__text">
                  <?php
                      $content = get_the_content();
                      $content = strip_tags($content, '<br>');
                      $content = preg_replace('/^[\s\x{3000}]+|[\s\x{3000}]+$/u', '', $content);
                      $excerpt = mb_substr($content, 0, 89);
                      echo nl2br($excerpt);
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
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>contact&nbsp;us</span></a>
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
          <li class="voice-cards__item voice-card">
            <div class="voice-card__wrapper">
              <div class="voice-card__header">
                <div class="voice-card__info">
                  <div class="voice-card__details">
                    <p class="voice-card__character">20代(女性)</p>
                    <p class="voice-card__category">ライセンス講習</p>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <figure class="voice-card__img img-animation">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice1-img.jpg"
                    alt="麦わら帽子を被り微笑む女性" />
                </figure>
              </div>
              <p class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="voice-cards__item voice-card">
            <div class="voice-card__wrapper">
              <div class="voice-card__header">
                <div class="voice-card__info">
                  <div class="voice-card__details">
                    <p class="voice-card__character">30代(男性)</p>
                    <p class="voice-card__category">ファンダイビング</p>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <figure class="voice-card__img img-animation">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2-img.jpg"
                    alt="親指を立ててはにかむ男性" />
                </figure>
              </div>
              <p class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
        </ul>
        <div class="voice__button">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>contact&nbsp;us</span></a>
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
                  <?php foreach ($items as $item) : ?>
                  <tr>
                    <td>
                      <?php echo wp_kses_post($item[$section['course']]); ?>
                    </td>
                    <td>
                      <?php echo wp_kses_post($item[$section['price']]); ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <?php endif;
                  endforeach; ?>
            </table>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- <table class="price-box__item price-table">
              <colgroup>
                <col class="price-table__col1" />
                <col class="price-table__col2" />
              </colgroup>

              <thead>
                <tr>
                  <th colspan="2">体験ダイビング</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ビーチ体験ダイビング(半日)</td>
                  <td>&yen;7,000</td>
                </tr>
                <tr>
                  <td>ビーチ体験ダイビング(1日)</td>
                  <td>&yen;14,000</td>
                </tr>
                <tr>
                  <td>ボート体験ダイビング(半日)</td>
                  <td>&yen;10,000</td>
                </tr>
                <tr>
                  <td>ボート体験ダイビング(1日)</td>
                  <td>&yen;18,000</td>
                </tr>
              </tbody>
            </table>

            <table class="price-box__item price-table">
              <colgroup>
                <col class="price-table__col1" />
                <col class="price-table__col2" />
              </colgroup>
              <thead>
                <tr>
                  <th colspan="2">ファンダイビング</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ビーチダイビング(2ダイブ)</td>
                  <td>&yen;14,000</td>
                </tr>
                <tr>
                  <td>ボートダイビング(2ダイブ)</td>
                  <td>&yen;18,000</td>
                </tr>
                <tr>
                  <td>スペシャルダイビング(2ダイブ)</td>
                  <td>&yen;24,000</td>
                </tr>
                <tr>
                  <td>ナイトダイビング(1ダイブ)</td>
                  <td>&yen;10,000</td>
                </tr>
              </tbody>
            </table>

            <table class="price-box__item price-table">
              <colgroup>
                <col class="price-table__col1" />
                <col class="price-table__col2" />
              </colgroup>
              <thead>
                <tr>
                  <th colspan="2">スペシャルダイビング</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>貸切ダイビング(2ダイブ)</td>
                  <td>&yen;24,000</td>
                </tr>
                <tr>
                  <td>1日ダイビング(3ダイブ)</td>
                  <td>&yen;32,000</td>
                </tr>
              </tbody>
            </table> -->
          </div>
        </div>
        <div class="price__button">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>contact&nbsp;us</span></a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>