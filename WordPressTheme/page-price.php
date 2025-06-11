<?php
/*
Template Name:料金一覧
*/
get_header(); ?>

  <section id="page-price-hero" class="page-price-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">Price</h1>
      </div>
    </div>
  </section>


  <?php get_template_part('parts/breadcrumb'); ?>

  <section id="page-price-main" class="page-price-main l-page-price-main">
    <div class="page-price-main__inner inner">
      <div class="page-price-main__container">
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
        <div class="page-price-main__items page-price-box">
          <?php foreach ($price_sections as $section) :
            $items = SCF::get($section['field']);
            if (!empty($items)) : ?>
            <table class="page-price-box__item page-price-table" id="<?php echo esc_attr($section['id']); ?>">
              <thead class="page-price-table__head">
                <tr class="page-price-table__head-row">
                  <th class="page-price-table__head-text" colspan="2"><span><?php echo esc_html($section['title']); ?></span></th>
                  <td></td>
                </tr>
              </thead>
              <tbody class="page-price-table__body">
                <?php foreach ($items as $item) :
                  if (!empty($item[$section['course']]) && !empty($item[$section['price']])) : ?>
                <tr class="page-price-table__body-row">
                  <td class="page-price-table__course"><?php echo wp_kses_post($item[$section['course']]); ?></td>
                  <td class="page-price-table__price">
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
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>