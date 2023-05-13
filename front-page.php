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
        <h2>About Us</h2>
        <div class="about">
            <div class="about__text">
                <h3>Welcome to the Mercury Glass&Mirror website!</h3>
                <p>
                    Our company is engaged in the manufacturing of custom glasses and mirrors in
                    South Florida. Mercury Glass&Mirror produces glass shower doors, railings,
                    storefronts, partitions and other glass products, as well as various types of mirrors,
                    for example, for kitchen or bedroom. Satisfied customers are already enjoying our
                    products, check their reviews on the website.
                </p>
                <p>
                    In order for the work to be done correctly, the installation and manufacturing of
                    products are carried out only by qualified workers. <b>Mercury Glass&Mirror</b> company
                    provides a full range of services for the manufacturing of glass products and mirrors
                    for interior design. The professionalism of our employees allows you to create luxury
                    products made of glass and mirrors that will decorate your home or office and will
                    last for many years.
                </p>
            </div>
            <div class="about__pic">
                <img src="./assets/img/about.png" alt="about">
            </div>
        </div>
    </div>
</section>


<!-- Second - Our products -->
<section>
    <div class="container">
        <h2>
            Our products
            <br>
            <br>
            Custom glass products
        </h2>
        <div class="products">
            <div class="products__item">
                <div class="products__item-title">
                    <h3>Shower Doors</h3>
                </div>
                <div class="products__item-body">
                    <div class="products__item-text">
                        <p>
                            Glass shower doors will look stylish in the bathroom and emphasize all the elegance
                            of your interior. Our doors are made of durable glass and steel fasteners. The size of
                            the doors can be any, depending on your preferences and the area of the bathroom.
                        </p>
                        <p>
                            Reliable glass shower doors will complement the interior of your home. Contact our
                            specialists and we will make shower doors for the bathroom depending on your
                            wishes.
                        </p>
                    </div>
                    <div class="products__item-pic">
                        <img src="./assets/img/product1.png" alt="product1">
                    </div>
                </div>
                <a href="#" class="products__item-btn">
                    See all
                </a>
            </div>

            <div class="products__item">
                <div class="products__item-title">
                    <h3>Glass railings</h3>
                </div>
                <div class="products__item-body">
                    <div class="products__item-text">
                        <p>
                            Glass railings will be the final addition to the stairs in your home or office.
                            Transparent railings are a popular design solution today, unlike conventional railings
                            in the form of gratings, glass ones will be able to visually increase the space and add
                            aesthetics to the interior.
                        </p>
                        <p>
                            Imagine how impressive your house will look thanks to the
                            glass railing, to fulfill this dream, contact Mercury Glass&Mirror specialists.
                        </p>
                    </div>
                    <div class="products__item-pic">
                        <img src="./assets/img/product2.png" alt="product1">
                    </div>
                </div>
                <a href="#" class="products__item-btn">
                    See all
                </a>
            </div>

            <div class="products__item">
                <div class="products__item-title">
                    <h3>Glass Partitions</h3>
                </div>
                <div class="products__item-body">
                    <div class="products__item-text">
                        <p>
                            You can install glass partitions in the room, which will be an excellent alternative to
                            conventional doors.
                        </p>
                        <p>
                            This design solution is often used in office spaces and
                            apartments as glass partitions help to increase the space and open the view to other
                            rooms. We make both transparent and frosted partitions, depending on your wishes.
                        </p>
                        <p>
                            Custom glass partitions can divide the space or serve as transparent doors. Contact
                            Mercury Glass&Mirror to allow our company to make your interior even more elegant
                            and stylish.
                        </p>
                    </div>
                    <div class="products__item-pic">
                        <img src="./assets/img/product3.png" alt="product1">
                    </div>
                </div>
                <a href="#" class="products__item-btn">
                    See all
                </a>
            </div>

            <div class="products__item">
                <div class="products__item-title">
                    <h3>Smart Glass</h3>
                </div>
                <div class="products__item-body">
                    <div class="products__item-text">
                        <p>
                            is an innovative glass product that can become transparent or opaque when
                            exposed to the current. This is how it works: between two sheets of transparent
                            glass there is a liquid crystal film, to which a low voltage is applied.
                        </p>
                        <p>
                            Without voltage,
                            liquid crystals are arranged randomly, scattering the light, so the glass becomes
                            frosted. When the mode is turned on, the arrangement of liquid crystals is ordered
                            and the glass becomes transparent.
                        </p>
                        <p>
                            Such glass can be an excellent alternative to
                            blinds or curtains, but, unlike them, frosted glass does not darken the room.
                        </p>
                    </div>
                    <div class="products__item-pic">
                        <img src="./assets/img/product4.png" alt="product1">
                    </div>
                </div>
                <a href="#" class="products__item-btn">
                    See all
                </a>
            </div>
        </div>

        <div class="products products_full">
            <div class="products__item">
                <div class="products__item-title">
                    <h3>Custom glass products</h3>
                </div>
                <div class="products__item-body">
                    <div class="products__item-text">
                        <p style="text-align: center;">
                            Mercury Glass&Mirror company manufactures a variety of glass products for your
                            home or office. If you want to order glass countertops, shelves, cabinet doors, or
                            other designer glass products that will give commercial or residential premises a
                            modern look, contact our company managers.
                        </p>
                    </div>
                    <div class="products__item-pic">
                        <img src="./assets/img/product5.png" alt="product1">
                    </div>
                </div>
                <a href="#" class="products__item-btn">
                    See all
                </a>
            </div>

            <div class="products__item">
                <div class="products__item-title">
                    <h3>Custom Mirrors</h3>
                </div>
                <div class="products__item-body">
                    <div class="products__item-text">
                        <p>
                            Mirrors are an integral part of modern homes. Our mirror options can easily create
                            the appearance of a large space and add additional light in the rooms. Mercury
                            Glass&Mirror manufactures:
                        </p>
                        <ul>
                            <li>· Bathroom mirrors </li>
                            <li>· Kitchen Mirror backsplash</li>
                            <li>· Full-length mirrors</li>
                            <li>· Mirrored partitions</li>
                            <li>· Mirrors for cabinets</li>
                        </ul>
                        <p>
                            To clarify the full list of our custom glass products and choose the right one for your
                            home, contact our consultants.
                        </p>
                    </div>
                    <div class="products__item-pic">
                        <img src="./assets/img/product6.png" alt="product1">
                    </div>
                </div>
                <a href="#" class="products__item-btn">
                    See all
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Third - Why choose Mercury Glass&Mirror? -->
<section>
    <div class="container">
        <h2>
            Why choose Mercury Glass&Mirror?
        </h2>
        <div class="choose">
            <p>
                Depending on your wishes, we can make glass and mirrors products that will be a
                perfect fit for your home or office. You can be sure of the quality of our products, they
                meet all safety requirements and will complement the interior and delight you for a
                long time. If you doubt which product to choose, our consultants will be happy to help
                you choose a product that will be made specifically for your premises.
            </p>
            <p>
                You can contact us by e-mail:
                <b>mercuryglassandmirror@gmail.com</b>, we work in Florida Miami-Dade County,
                Broward, West Palm Beach.
            </p>
        </div>
    </div>
</section>

<!-- Fourth - PRICE CALCULATOR -->
<section>
    <div class="container">
        <div class="price-calc">
            <h2><a href="#">PRICE CALCULATOR</a></h2>
        </div>
    </div>
</section>

<!-- Fifth - Reviews -->
<section>
    <div class="container">
        <p class="reviews-desc">To ensure the high quality of our services, you can view photos of our works in the gallery or read reviews by satisfied customers. </p>
        <h2>Reviews</h2>
        <div class="reviews">
            <div class="reviews__item">
                <div class="reviews__item-inner">
                    <div class="reviews__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus neque, placeat eos deleniti veniam autem, amet culpa maiores beatae accusamus blanditiis, odio quas est error alias omnis similique debitis repellat?
                    </div>
                    <div class="reviews__autor">
                        <div class="reviews__autor-pic">
                            <img src="./assets/img/product6.png" alt="ava">
                        </div>
                        <div class="reviews__autor-name">
                            Ahmad S 1
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__item-inner">
                    <div class="reviews__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus neque, placeat eos deleniti veniam autem, amet culpa maiores beatae accusamus blanditiis, odio quas est error alias omnis similique debitis repellat?
                    </div>
                    <div class="reviews__autor">
                        <div class="reviews__autor-pic">
                            <img src="./assets/img/product6.png" alt="ava">
                        </div>
                        <div class="reviews__autor-name">
                            Ahmad S 2
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__item-inner">
                    <div class="reviews__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus neque, placeat eos deleniti veniam autem, amet culpa maiores beatae accusamus blanditiis, odio quas est error alias omnis similique debitis repellat?
                    </div>
                    <div class="reviews__autor">
                        <div class="reviews__autor-pic">
                            <img src="./assets/img/product6.png" alt="ava">
                        </div>
                        <div class="reviews__autor-name">
                            Ahmad S 3
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__item-inner">
                    <div class="reviews__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus neque, placeat eos deleniti veniam autem, amet culpa maiores beatae accusamus blanditiis, odio quas est error alias omnis similique debitis repellat?
                    </div>
                    <div class="reviews__autor">
                        <div class="reviews__autor-pic">
                            <img src="./assets/img/product6.png" alt="ava">
                        </div>
                        <div class="reviews__autor-name">
                            Ahmad S 4
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__item-inner">
                    <div class="reviews__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus neque, placeat eos deleniti veniam autem, amet culpa maiores beatae accusamus blanditiis, odio quas est error alias omnis similique debitis repellat?
                    </div>
                    <div class="reviews__autor">
                        <div class="reviews__autor-pic">
                            <img src="./assets/img/product6.png" alt="ava">
                        </div>
                        <div class="reviews__autor-name">
                            Ahmad S 5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>