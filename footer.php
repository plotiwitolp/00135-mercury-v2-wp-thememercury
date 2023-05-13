</main>
<footer>
    <div class="container">
        <div class="footer">
            <div class="footer__top">
                <div class="footer__logo">
                    <img src="<?php the_field('logo_footer', 17); ?>" alt="footer_logo">
                </div>
                <div class="footer__contacts">
                    <h3><?php the_field('title_contacts_footer', 17); ?></h3>
                    <dl class="dl">
                        <div class="dl__item">
                            <dt>
                                <?php the_field('title_telephone_footer', 17); ?>
                            </dt>
                            <dd>
                                <?php the_field('tel_number_footer', 17); ?>
                            </dd>
                        </div>
                        <div class="dl__item">
                            <dt>
                                <?php the_field('title_mail_footer', 17); ?>
                            </dt>
                            <dd>
                                <?php the_field('email_footer', 17); ?>
                            </dd>
                        </div>
                        <div class="dl__item">
                            <dt>
                                <?php the_field('title_address_footer', 17); ?>
                            </dt>
                            <dd>
                                <address><?php the_field('address_footer', 17); ?></address>
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="footer__more-info">
                    <h3><?php the_field('title_more_info_footer', 17); ?></h3>
                    <div class="footer__more-info-inner">
                        <a href="<?php the_field('link_info_footer', 17); ?>"><?php the_field('title_info_footer', 17); ?></a>
                        <a href="<?php the_field('link_price_calculator_footer', 17); ?>"><?php the_field('title_price_calculator_footer', 17); ?></a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__copyright">
                    © All Rights reserved
                </div>
                <div class="footer__socials">
                    <div class="footer__socials-item">
                        <a href="<?php the_field('link_facebook', 17); ?>">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="footer__socials-item">
                        <a href="<?php the_field('link_instagram', 17); ?>">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#top" class="on-top">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>

<?php wp_footer(); ?>
</body>

</html>