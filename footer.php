<footer class="footer">
    <section class="inner-footer">
        <div class="container">
            <div class="footer-logo">
                <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" />
            </div>
            <div class="footer-text">
                <p>
                    Nibh lacus quam non non neque proin vel in odio. Ac elementum odio mattis imperdiet tincidunt tellus
                    purus.
                </p>
            </div>
            <div class="social-icons"></div>
            <div class="footer-divider">
                <hr />
            </div>
            <div class="row foot-flex">
                <div class="col inner-f">
                    <div>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer_menu',
                                'menu_class' => 'myfootermenuclass',
                            )
                        );
                        ?>
                    </div>

                </div>

            </div>
            <div class="col">
                <p class="copyright">
                    © 2023 [website name]. All rights reserved.
                </p>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>