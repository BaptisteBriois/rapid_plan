<?php
    // Contenu de la page d'accueil
    get_header();
?>

    <section id="start" style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/assets/images/start.jpg');">

        <h1>Bienvenue chez Rapid Plan</h1>
        <h2>Le meilleur de la reprographie depuis plus de 50 ans</h2>

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

            <div class="prestation col-md-6" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>);" onMouseOver="document.getElementById('presta<?php the_ID(); ?>').style.display='block'" onMouseOut="document.getElementById('presta<?php the_ID(); ?>').style.display='none'">
                <div id="presta<?php the_ID(); ?>" class="prestatext">
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

            <div class="col-md-6 adress">

                <h3>Montataire</h3>

                <h4>25 rue des Oiseaux<br>
                    60780 Montataire<br>
                    Du lundi au vendredi<br>
                    De 9h à 18h<br>
                    03.45.67.76.98
                </h4>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20829.688321557845!2d2.4125888627955128!3d49.2629226333299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e64bd8730d214b%3A0x6d8085d35e8be162!2sMontataire!5e0!3m2!1sfr!2sfr!4v1466604693787" width="100%" height="400px" frameborder="0" style="border:1px solid" allowfullscreen></iframe>

            </div>

            <div class="col-md-6 adress">

                <h3>Compiègne</h3>

                <h4>25 rue des Oiseaux<br>
                    60780 Compiègne<br>
                    Du lundi au vendredi<br>
                    De 9h à 18h<br>
                    03.45.67.76.98
                </h4>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41542.98353371069!2d2.8198381241021124!3d49.40065106846755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d5e621cbedd7%3A0x40af13e81644610!2s60200+Compi%C3%A8gne!5e0!3m2!1sfr!2sfr!4v1466604795216" width="100%" height="400px" frameborder="0" style="border:1px solid" allowfullscreen></iframe>

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