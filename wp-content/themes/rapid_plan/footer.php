        </section>

        <footer class="">
            <!-- your code HTML footer here -->
        </footer>

        <!-- Scripts -->
        <?php wp_footer(); ?>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/build/bootstrap.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/build/main.js"></script>
        <script type="text/javascript">
            $(function() {
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
    </body>
</html>
