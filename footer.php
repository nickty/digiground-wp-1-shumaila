<footer>
    <section class="footer">
        <div class="container">
            <div class="row foot-flex">
                <div class="col inner-f">
                    <div>
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'footer_menu',
                                'menu_class'        => 'myfootermenuclass',
                            ) );
                        ?>
                    </div>
                   
                </div>
                <div class="col">
                    <p class="copyright">
                    Copyright © 
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>