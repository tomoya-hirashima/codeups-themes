<?php get_header(); ?>

<main>
  <section id="page-blog-hero" class="page-blog-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <p class="hero__title">Blog</p>
      </div>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <?php if ( have_posts() ) : ?>
  <?php while(have_posts()): the_post(); ?>
  <!-- 記事内容 -->
  <section id="page-blog-main" class="page-blog-main l-page-blog-detail-main">
    <div class="page-blog-main__inner inner">
      <div class="page-blog-main__container">
        <div class="page-blog-main__detail blog-detail">
          <!-- 投稿日 -->
          <p class="blog-detail__date">
            <time datetime="<?php the_time('Y.n.j'); ?>">
              <?php the_time('Y.m/d'); ?>
            </time>
          </p>
          <!-- タイトル -->
          <h2 class="blog-detail__title">
            <?php the_title(); ?>
          </h2>
          <!-- アイキャッチ -->
          <?php if (has_post_thumbnail()): ?>
          <figure class="blog-detail__eyecatch">
            <!-- /* 投稿にアイキャッチ画像が有る場合の処理 */ -->
            <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </figure>

          <!-- 本文(全文) -->
          <div class="blog-detail__content">
            <div class="blog-detail__body">
              <?php the_content(); ?>
            </div>
          </div>

          <!-- ページネーション -->
          <ul class="blog-detail__pagination pagination">
            <?php if (get_previous_post()): ?>
            <li class="pagination__prev">
              <a href="<?php echo get_permalink(get_previous_post()->ID); ?>">
                <span class="pagination__icon"></span>
              </a>
            </li>
            <?php endif; ?>

            <?php if (get_next_post()): ?>
            <li class="pagination__next pagination__next--detailed">
              <a href="<?php echo get_permalink(get_next_post()->ID); ?>">
                <span class="pagination__icon"></span>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


        <!-- サイドバー -->
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