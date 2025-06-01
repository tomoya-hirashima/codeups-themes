<?php
/*
Template Name:私たちについて
*/
get_header(); ?>


  <section id="page-about-hero" class="page-about-hero hero">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero__title">About&nbsp;us</h1>
      </div>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumb'); ?>

  <section id="page-about-main" class="page-about-main l-page-about-main">
    <div class="page-about-main__inner inner">
      <div class="page-about-main__contents page-about-contents">
        <div class="page-about-contents__img-container">
          <div class="page-about-contents__img1">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-fish-pc.jpg"
              alt="青い海の中を泳ぐ2匹の鮮やかな黄色い魚" />
          </div>
          <div class="page-about-contents__img2">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-roof-pc.jpg"
              alt="青空と屋根上のシーサー" />
          </div>
          <h2 class="page-about-contents__message-title">
            Dive&nbsp;into<br />the&nbsp;Ocean
          </h2>
        </div>
        <p class="page-about-contents__message-text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>

      <div class="page-about-main__gallery">
        <div class="page-about-main__heading section-heading">
          <p class="section-heading__main">Gallery</p>
          <h3 class="section-heading__sub">フォト</h3>
        </div>
        <div class="page-about-main__gallery-container gallery-container">
          <?php
            $gallery_images = SCF::get('gallery_images');
            if (! empty($gallery_images)) :
                foreach ($gallery_images as $item) :
                    if (! empty($item['gallery_image'])) :
                        $img_id = $item['gallery_image'];
                        $img_url = wp_get_attachment_image_src($item['gallery_image'], 'large');
                        $alt = get_post_meta( $img_id, '_wp_attachment_image_alt', true ); // 画像IDからalt取得
          ?>
          <div class="gallery-container__item">
            <img class="gallery-container__img js-modal-open" src="<?php echo esc_url($img_url[0]); ?>"
              alt="<?php echo esc_attr( $alt ); ?>">
          </div>
          <?php
              endif;
            endforeach;
          endif;
        ?>
        </div>


        <!-- モーダル -->
        <div class="modal js-modal">
          <div class="modal__content">
            <img src="" alt="" class="modal__img">
          </div>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>