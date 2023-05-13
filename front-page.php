<?php get_header(); ?>
<!-- First - Top Slider-->
<div class="top-slider">

    <?php
    $args = array(
        'post_type' => 'mainslider',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    ?>
            <div class="top-slider__item">
                <section class="top-slider__item-body">
                    <div class="container">
                        <div class="top-slider-block">
                            <div class="top-slider__item-left">
                                <h1 class="top-slider__item-title">
                                    <?php the_title(); ?>
                                </h1>
                                <p class="top-slider__item-desc">
                                    <?php the_field('text_under_title'); ?>
                                </p>
                            </div>
                            <div class="top-slider__item-right">
                                <a href="<?php the_field('button_link'); ?>" class="top-slider__item-btn"><?php the_field('button_text'); ?></a>
                                <p class="top-slider__item-notice">
                                    <?php the_field('text_under_button'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="top-slider__item-bg">
                    <img src="<?php the_field('background_picture'); ?>" alt="background picture">
                </div>
            </div>
    <?php
        }
        wp_reset_postdata();
    } else {
        echo 'No slides';
    }
    ?>
</div>

<!-- Second - About Us -->
<section>
    <div class="container">
        <h2><?php the_field('title_about_us') ?></h2>
        <div class="about">
            <div class="about__text">
                <h3><?php the_field('subtitle_about_us') ?></h3>
                <?php the_field('text_about_us') ?>
            </div>
            <div class="about__pic">
                <img src="<?php the_field('picture_about_us') ?>" alt="about">
            </div>
        </div>
    </div>
</section>


<!-- Second - Our products -->
<section>
    <div class="container">
        <h2>
            <?php the_field('title_our_products'); ?>
        </h2>
        <div class="products">

            <?php
            for ($i = 1; $i <= 4; $i++) {
                $args = array(
                    'post_type' => 'product',
                    'p' => get_field("product_$i"),
                );
                $query = new WP_Query($args);
                if ($query->have_posts() && get_field("product_$i")) {
                    $query->the_post();
            ?>
                    <div class="products__item">
                        <div class="products__item-title">
                            <h3><?php the_title() ?> </h3>

                        </div>
                        <div class="products__item-body">
                            <div class="products__item-text">
                                <?php the_field('description'); ?>
                            </div>
                            <div class="products__item-pic">
                                <img src=" <?php the_field('main_picture'); ?>" alt="product <?= $i ?>">
                            </div>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_field("product_$i"))) ?>" class="products__item-btn">
                            See all
                        </a>
                        <?php  ?>
                    </div>
            <?php
                    wp_reset_postdata();
                } else {
                    echo '';
                }
            }
            ?>
        </div>

        <div class="products products_full">
            <?php
            for ($i = 5; $i <= 6; $i++) {
                $args = array(
                    'post_type' => 'product',
                    'p' => get_field("product_$i"),
                );
                $query = new WP_Query($args);
                if ($query->have_posts() && get_field("product_$i")) {
                    $query->the_post();
            ?>
                    <div class="products__item">
                        <div class="products__item-title">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="products__item-body">
                            <div class="products__item-text">
                                <?php the_field('description'); ?>
                            </div>
                            <div class="products__item-pic">
                                <img src=" <?php the_field('main_picture'); ?>" alt="product <?= $i ?>">
                            </div>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_field("product_$i"))) ?>" class="products__item-btn">
                            See all
                        </a>
                        <?php  ?>
                    </div>
            <?php
                    wp_reset_postdata();
                } else {
                    echo '';
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Third - Why choose Mercury Glass&Mirror? -->
<section>
    <div class="container">
        <h2>
            <?php the_field('title_choose'); ?>
        </h2>
        <div class="choose">
            <?php the_field('text_choose'); ?>
        </div>
    </div>
</section>

<!-- Fourth - PRICE CALCULATOR -->
<section>
    <div class="container">
        <div class="price-calc">
            <h2><a href="<?php the_field('link_calculator'); ?>"><?php the_field('text_calculator'); ?></a></h2>
        </div>
    </div>
</section>

<!-- Fifth - Reviews -->
<section>
    <div class="container">
        <p class="reviews-desc"><?php the_field('text_under_title_reviews'); ?></p>
        <h2><?php the_field('title_reviews'); ?></h2>
        <div class="reviews">
            <?php
            $args = array(
                'post_type' => 'review',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="reviews__item">
                        <div class="reviews__item-inner">
                            <div class="reviews__text">
                                <?php the_field('text_review');
                                ?>
                            </div>
                            <div class="reviews__autor">
                                <div class="reviews__autor-pic">
                                    <img src="<?php the_field('autor_picture');
                                                ?>" alt="ava">
                                </div>
                                <div class="reviews__autor-name">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } else {
                echo 'No reviews';
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>