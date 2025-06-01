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
          $license_courses = SCF::get('license_courses');
          $trial_diving = SCF::get('trial_diving');
          $fun_diving = SCF::get('fun_diving');
          $special_diving = SCF::get('special_diving');
        ?>
        <div class="page-price-main__items page-price-box">
          <table class="page-price-box__item page-price-table" id="license">
            <?php if (!empty($license_courses)) : ?>
            <thead class="page-price-table__head">
              <tr class="page-price-table__head-row">
                <th class="page-price-table__head-text" colspan="2"><span>ライセンス講習</span></th>
                <td></td>
              </tr>
            </thead>
            <tbody class="page-price-table__body">
              <?php foreach ($license_courses as $item) : ?>
              <tr class="page-price-table__body-row">
                <td class="page-price-table__course"><?php echo wp_kses_post($item['license_course']); ?></td>
                <td class="page-price-table__price"><?php echo wp_kses_post($item['license_price']); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <?php endif; ?>
          </table>

          <table class="page-price-box__item page-price-table" id="trial-diving">
            <?php if (!empty($trial_diving)) : ?>
            <thead class="page-price-table__head">
              <tr class="page-price-table__head-row">
                <th class="page-price-table__head-text" colspan="2"><span>体験ダイビング</span></th>
                <td></td>
              </tr>
            </thead>
            <tbody class="page-price-table__body">
              <?php foreach ($trial_diving as $item) : ?>
              <tr class="page-price-table__body-row">
                <td class="page-price-table__course"><?php echo wp_kses_post($item['trial_course']); ?></td>
                <td class="page-price-table__price"><?php echo wp_kses_post($item['trial_price']); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <?php endif; ?>
          </table>

          <table class="page-price-box__item page-price-table" id="fun-diving">
            <?php if (!empty($fun_diving)) : ?>
            <thead class="page-price-table__head">
              <tr class="page-price-table__head-row">
                <th class="page-price-table__head-text" colspan="2"><span>ファンダイビング</span></th>
                <td></td>
              </tr>
            </thead>
            <tbody class="page-price-table__body">
              <?php foreach ($fun_diving as $item) : ?>
              <tr class="page-price-table__body-row">
                <td class="page-price-table__course"><?php echo wp_kses_post($item['fun_course']); ?></td>
                <td class="page-price-table__price"><?php echo wp_kses_post($item['fun_price']); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <?php endif; ?>
          </table>

          <table class="page-price-box__item page-price-table">
            <?php if (!empty($special_diving)) : ?>
            <thead class="page-price-table__head">
              <tr class="page-price-table__head-row">
                <th class="page-price-table__head-text" colspan="2"><span>スペシャルダイビング</span></th>
                <td></td>
              </tr>
            </thead>
            <tbody class="page-price-table__body">
              <?php foreach ($special_diving as $item) : ?>
              <tr class="page-price-table__body-row">
                <td class="page-price-table__course"><?php echo wp_kses_post($item['special_course']); ?></td>
                <td class="page-price-table__price"><?php echo wp_kses_post($item['special_price']); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <?php endif; ?>
          </table>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>