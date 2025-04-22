<?php get_header(); ?>

<main>
  <section id="page-blog-hero" class="page-blog-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Blog</h1>
      </div>
    </div>
  </section>

  <?php get_template_part('breadcrumb'); ?>



  <section id="page-blog-main" class="page-blog-main l-page-blog-main">
    <div class="page-blog-main__inner inner">
      <div class="page-blog-main__container">
        <div class="page-blog-main__contents">
          <ul class="page-blog-main__items blog-cards blog-cards--col2">
            <!-- 記事のループ処理開始 -->
            <?php
            if (wp_is_mobile()) {
              $num = 10; // スマホの表示数(全件は-1)
            } else {
              $num = 10; // PCの表示数(全件は-1)
            }
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = [
              'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
              'paged' => $paged, // ページネーションがある場合に必要
              'posts_per_page' => $num, // 表示件数
            ];
            $custom_query = new WP_Query($args);
            if (have_posts()): while (have_posts()): the_post();
            ?>

            <li class="blog-cards__item blog-card">
              <!-- 記事へのリンク -->
              <a href="<?php the_permalink(); ?>" class="">
                <!-- アイキャッチ -->
                <figure class="blog-card__img">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </figure>
                <div class="blog-card__body">
                  <!-- 投稿日 -->
                  <p class="blog-card__date">
                    <time datetime="<?php the_time('Y.n.j'); ?>">
                      <?php the_time('Y.m/d'); ?>
                    </time>
                  </p>
                  <!-- タイトル -->
                  <h2 class="blog-card__title">
                    <?php the_title(); ?>
                  </h2>
                  <!-- 本文の抜粋 -->
                  <div class="blog-card__text">
                    <?php
                        $content = get_the_content();
                        $content = strip_tags($content, '<br>');

                        // ↓↓↓ 改行コードも含めて先頭・末尾の改行・空白を削除
                        $content = preg_replace('/^[\s\x{3000}]+|[\s\x{3000}]+$/u', '', $content);

                        $excerpt = mb_substr($content, 0, 89); // 文字数制限（例：100文字）
                        echo nl2br($excerpt);
                        ?>
                  </div>

                </div>
              </a>
            </li>
            <?php endwhile;
            else: ?>
            <p>まだ記事がありません</p>
            <?php endif ?>
            <?php wp_reset_postdata(); ?>
            <!-- 記事のループ処理終了 -->
          </ul>

          <!-- ページネーション -->
          <div class="l-pagenavi">
            <div class="wp-pagenavi">
              <a class="previouspostslink" href="/"> </a>
              <a class="page" href="/">1</a>
              <span class="current">2</span>
              <a class="page" href="/3/">3</a>
              <a class="page" href="/4/">4</a>
              <a class="page" href="/5/">5</a>
              <a class="page" href="/6/">6</a>
              <a class="nextpostslink" href="/3/"> </a>
            </div>
          </div>


        </div>
        <aside>
          <div class="page-blog-main__sidebar sidebar">
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
                    <li class="sidebar-blog-cards__item sidebar-blog-card">
                      <a href="#">
                        <div class="sidebar-blog-card__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.jpg" alt="黄色い魚" />
                        </div>
                        <div class="sidebar-blog-card__body">
                          <time datetime="2023-11-17" class="sidebar-blog-card__date">2023.11/17</time>
                          <p class="sidebar-blog-card__title">
                            ライセンス取得
                          </p>
                        </div>
                      </a>
                    </li>
                    <li class="sidebar-blog-cards__item sidebar-blog-card">
                      <a href="#">
                        <div class="sidebar-blog-card__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-turtle-img.jpg"
                            alt="両手を広げて海の中を泳ぐウミガメ" />
                        </div>
                        <div class="sidebar-blog-card__body">
                          <time datetime="2023-11-17" class="sidebar-blog-card__date">2023.11/17</time>
                          <p class="sidebar-blog-card__title">
                            ウミガメと泳ぐ
                          </p>
                        </div>
                      </a>
                    </li>
                    <li class="sidebar-blog-cards__item sidebar-blog-card">
                      <a href="#">
                        <div class="sidebar-blog-card__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-orangefish-img.jpg"
                            alt="イソギンチャクの中のカクレクマノミ" />
                        </div>
                        <div class="sidebar-blog-card__body">
                          <time datetime="2023-11-17" class="sidebar-blog-card__date">2023.11/17</time>
                          <p class="sidebar-blog-card__title">
                            カクレクマノミ
                          </p>
                        </div>
                      </a>
                    </li>
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
                  <div class="sidebar-category__item sidebar-voice-card">
                    <a href="#">
                      <div class="sidebar-voice-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-couple.jpg"
                          alt="30代のカップル" />
                      </div>
                      <div class="sidebar-voice-card__body">
                        <p class="sidebar-voice-card__character">
                          30代(カップル)
                        </p>
                        <p class="sidebar-voice-card__title">
                          ここにタイトルが入ります。ここにタイトル
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="sidebar-category__button">
                    <a href="#" class="button"><span>View&nbsp;more</span></a>
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
                    <li class="sidebar-campaign-cards__item sidebar-campaign-card">
                      <a href="#">
                        <figure class="sidebar-campaign-card__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1-sp.jpg"
                            alt="色鮮やかなたくさんの種類の魚" />
                        </figure>
                        <div class="sidebar-campaign-card__body">
                          <div class="sidebar-campaign-card__wrapper">
                            <p class="sidebar-campaign-card__title">
                              ライセンス取得
                            </p>
                            <div class="sidebar-campaign-card__info">
                              <p class="sidebar-campaign-card__content">
                                全部コミコミ(お一人様)
                              </p>
                              <div class="sidebar-campaign-card__price">
                                <del class="sidebar-campaign-card__normal-price">&yen;56,000</del>
                                <div class="sidebar-campaign-card__discount">
                                  &yen;46,000
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="sidebar-campaign-cards__item sidebar-campaign-card">
                      <a href="#">
                        <figure class="sidebar-campaign-card__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2-sp.jpg"
                            alt="浅瀬に停まる数台の船と遠くに見える島" />
                        </figure>
                        <div class="sidebar-campaign-card__body">
                          <div class="sidebar-campaign-card__wrapper">
                            <p class="sidebar-campaign-card__title">
                              貸切体験ダイビング
                            </p>
                            <div class="sidebar-campaign-card__info">
                              <p class="sidebar-campaign-card__content">
                                全部コミコミ(お一人様)
                              </p>
                              <div class="sidebar-campaign-card__price">
                                <del class="sidebar-campaign-card__normal-price">&yen;24,000</del>
                                <div class="sidebar-campaign-card__discount">
                                  &yen;18,000
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <div class="sidebar-category__button">
                    <a href="#" class="button"><span>View&nbsp;more</span></a>
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
                  <ul class="sidebar-category__archive archive">
                    <li class="archive__year">
                      <span class="archive__year-label js-archive-year is-open">2023</span>
                      <ul class="archive__month-list js-archive-month is-open">
                        <li class="archive__month">
                          <a href="#" class="archive__link"><span>3月</span></a>
                        </li>
                        <li class="archive__month">
                          <a href="#" class="archive__link"><span>2月</span></a>
                        </li>
                        <li class="archive__month">
                          <a href="#" class="archive__link"><span>1月</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="archive__year">
                      <span class="archive__year-label js-archive-year">2022</span>
                      <ul class="archive__month-list js-archive-month">
                        <li class="archive__month">
                          <a href="#" class="archive__link"><span>12月</span></a>
                        </li>
                        <li class="archive__month">
                          <a href="#" class="archive__link"><span>11月</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>