<?php get_header(); ?>

<section id="page-blog-hero" class="page-blog-hero hero">
  <div class="hero__inner">
    <div class="hero__content">
      <h1 class="hero__title">Blog</h1>
    </div>
  </div>
</section>

<?php get_template_part('parts/breadcrumb'); ?>

  <div id="page-blog-main" class="page-blog-main l-page-blog-main">
    <div class="page-blog-main__inner inner">
      <div class="page-blog-main__container">
        <div class="page-blog-main__contents">
          <ul class="page-blog-main__items blog-cards blog-cards--col2">
            <!-- 記事のループ処理開始 -->
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
                <li class="blog-cards__item blog-card">
                  <a href="<?php the_permalink(); ?>">
                    <figure class="blog-card__img">
                      <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                    </figure>
                    <div class="blog-card__body">
                      <p class="blog-card__date">
                        <time datetime="<?php echo get_the_date('c'); ?>">
                          <?php echo get_the_date('Y.m/d'); ?>
                        </time>
                      </p>
                      <h2 class="blog-card__title"><?php the_title(); ?></h2>
                      <div class="blog-card__text">
                        <?php
                          $content = get_the_content();
                          $content = strip_tags($content, '<br>');
                          $content = preg_replace('/^[\s\x{3000}]+|[\s\x{3000}]+$/u', '', $content);
                          $excerpt = mb_substr($content, 0, 89);
                          echo nl2br($excerpt);
                        ?>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php else: ?>
              <p>まだ記事がありません</p>
            <?php endif; ?>
            <!-- 記事のループ処理終了 -->
          </ul>
          <!-- ページネーション -->
          <div class="l-pagenavi">
            <?php if (function_exists('wp_pagenavi')): ?>
              <?php wp_pagenavi(); ?>
            <?php endif; ?>
          </div>
        </div>
        <!-- サイドバー -->
        <?php get_template_part('parts/sidebar'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>