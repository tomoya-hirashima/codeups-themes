<?php get_header(); ?>

  <section id="page-blog-hero" class="page-blog-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <p class="hero__title">Blog</p>
      </div>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <?php if ( have_posts() ) : ?>
  <?php while(have_posts()): the_post(); ?>
  <!-- 記事内容 -->
  <section id="page-blog-main" class="page-blog-main l-page-blog-detail-main">
    <div class="page-blog-main__inner inner">
      <div class="page-blog-main__container">
        <div class="page-blog-main__detail blog-detail">
          <!-- 投稿日 -->
          <p class="blog-detail__date">
          <time datetime="<?php echo get_the_date('c'); ?>">
            <?php echo get_the_date('Y.m/d'); ?>
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
        <?php get_template_part('parts/sidebar'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>