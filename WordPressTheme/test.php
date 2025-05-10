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