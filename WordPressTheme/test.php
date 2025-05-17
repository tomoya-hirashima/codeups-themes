<ul class="blog__items blog-cards">
  <?php
  $args = array(
    'post_type' => 'page',
    'pagename'  => 'price',
  );
  $price_query = new WP_Query($args);
  ?>
  <?php if ($blog_query->have_posts()): ?>
  <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
  <table class="price-box__item price-table">
    <colgroup>
      <col class="price-table__col1" />
      <col class="price-table__col2" />
    </colgroup>
    <thead>
      <tr>
        <th colspan="2">ライセンス講習</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</ul>




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






<?php
$args = array(
  'post_type' => 'campaign',
  'posts_per_page' => 4,
);
$top_campaign_query = new WP_Query($args);
?>
<?php if ($top_campaign_query->have_posts()): ?>
<?php while ($top_campaign_query->have_posts()) : $top_campaign_query->the_post(); ?>
<?php
    $normal_price = get_field('normal_price');
    $discount = get_field('discount');
    $period = get_field('period');
    ?>

<div class="campaign__slide swiper-slide">
  <a href="<?php echo get_post_type_archive_link('campaign') . '#campaign-' . get_the_ID(); ?>"
    class="campaign__item campaign-card">
    <figure class="campaign-card__img">
      <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('full'); ?>
      <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="">
      <?php endif; ?>
    </figure>
    <div class="campaign-card__body">
      <p class="campaign-card__category">ライセンス講習</p>
      <div class="campaign-card__wrapper">
        <h3 class="campaign-card__title"><?php the_title(); ?></h3>
        <div class="campaign-card__info">
          <p class="campaign-card__content">
            全部コミコミ(お一人様)
          </p>
          <?php if ($normal_price && $discount): ?>
          <div class="sidebar-campaign-card__price">
            <del class="sidebar-campaign-card__normal-price">&yen;<?php echo esc_html($normal_price); ?></del>
            <div class="sidebar-campaign-card__discount">&yen;<?php echo esc_html($discount); ?></div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </a>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>



<div class="campaign__slide swiper-slide">
  <a href="#" class="campaign__item campaign-card">
    <figure class="campaign-card__img">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2-sp.jpg" alt="浅瀬に停まる数台の船と遠くに見える島" />
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
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3-sp.jpg" alt="水中で光るたくさんの小さなクラゲ" />
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
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1-sp.jpg" alt="色鮮やかなたくさんの種類の魚" />
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
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2-sp.jpg" alt="浅瀬に停まる数台の船と遠くに見える島" />
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
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3-sp.jpg" alt="水中で光るたくさんの小さなクラゲ" />
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