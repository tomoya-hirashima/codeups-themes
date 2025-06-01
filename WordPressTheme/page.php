<?php get_header(); ?>

<section id="page-others-hero" class="page-others-hero hero">
    <div class="hero__inner">
        <div class="hero__content">
            <h1 class="hero__title">
                <?php
                if (is_page('privacypolicy')) {
                    echo 'Privacy Policy';
                } elseif (is_page('terms')) {
                    echo 'Terms of Service';
                } else {
                    the_title();
                }
                ?>
            </h1>
        </div>
    </div>
</section>

<?php get_template_part('parts/breadcrumb'); ?>

<section id="page-others-main" class="page-others-main l-page-others-main">
    <div class="page-others-main__inner inner">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <div class="page-others-main__container">
                <h2 class="page-others-main__title"><?php the_title(); ?></h2>
                <div class="page-others-main__items">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>