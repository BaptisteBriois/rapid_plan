<?php
    // Contenu de la page d'accueil
    get_header();
?>

    <section id="start" style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/assets/images/start.jpg');">

        <h1>Bienvenue chez<br> Rapid Plan</h1>
        <h2>Le meilleur de la reprographie depuis plus de 50 ans</h2>
        <a href="#who"><i class="fa fa-angle-double-down fa-5x" aria-hidden="true"></i></a>

    </section>

    <section id="who">

        <h2>Qui sommes-nous?</h2>

        <?php the_content(); ?>

    </section>

    <section id="prestations">

        <?php $getPosts = new WP_Query();
        $getPosts->query('showposts=10'); ?>

        <div class="container-fluid">
            <div class="row">
        <?php while ($getPosts->have_posts()) : $getPosts->the_post(); ?>

            <div class="prestation col-sm-6" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>);">
                <div class="prestatext">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; ?>
            </div>
        </div>

    </section>

    <section id="where">

        <h2>Nos adresses</h2>

        <div class="container-fluid">

            <div class="col-sm-6 adress">

                <h3>Montataire</h3>

                <p>8-10 rue de Condé<br>
                    60160 Montataire<br>
                    Du lundi au vendredi<br>
                    De 8h30 à 12h et de 13h30 à 18h<br>
                    03.44.25.47.30<br>
                    rapid.plan@wanadoo.fr
                </p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.1122717053568!2d2.4338554154655814!3d49.25531788063048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6497cc4ae4fbd%3A0x91dd51fc697dcb8b!2s10+Rue+de+Cond%C3%A9%2C+60160+Montataire!5e0!3m2!1sfr!2sfr!4v1466866756272" width="100%" height="400px" frameborder="0" style="border:1px solid" allowfullscreen></iframe>

            </div>

            <div class="col-sm-6 adress">

                <h3>Compiègne</h3>

                <p>2 rue Jacques de Vaucanson<br>
                    60200 Compiègne<br>
                    Du lundi au vendredi<br>
                    De 9h à 17h<br>
                    03.44.97.56.77<br>
                    crapidplan@orange.fr
                </p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.7782869549055!2d2.7855918154703843!3d49.39418587078494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d40ceb27088d%3A0x1181ed475608efd7!2s2+Rue+Jacques+de+Vaucanson%2C+60200+Compi%C3%A8gne!5e0!3m2!1sfr!2sfr!4v1466867009663" width="100%" height="400px" frameborder="0" style="border:1px solid" allowfullscreen></iframe>

            </div>

        </div>

    </section>

    <section id="contact">

        <h2>Contactez-nous</h2>

        <div>

        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
        </div>
    </section>

<?php get_footer(); ?>