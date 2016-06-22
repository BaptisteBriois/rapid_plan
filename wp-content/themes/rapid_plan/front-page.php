<?php
    // Contenu de la page d'accueil
    get_header();
?>

    <section id="start">

        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/photo2.jpg" alt="">

    </section>

    <section id="who">

        <h2>Qui sommes-nous?</h2>

        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

    </section>

    <section id="prestations">

        <h2>Nos prestations</h2>

        <?php $getPosts = new WP_Query();
        $getPosts->query('showposts=10'); ?>

        <?php while ($getPosts->have_posts()) : $getPosts->the_post(); ?>

            <div class="container-fluid prestation">
                <div class="prestationtext col-md-6">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                <div class="prestationimg col-md-6">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>

        <?php endwhile; ?>

    </section>

    <section id="where">

        <h2>Où nous trouver?</h2>

        <div class="container-fluid">

            <div class="col-md-6 adress">

                <h3>Montataire</h3>

                <h4>25 rue des Oiseaux<br>
                    60780 Montataire<br>
                    Du lundi au vendredi<br>
                    De 9h à 18h<br>
                    03.45.67.76.98
                </h4>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20829.688321557845!2d2.4125888627955128!3d49.2629226333299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e64bd8730d214b%3A0x6d8085d35e8be162!2sMontataire!5e0!3m2!1sfr!2sfr!4v1466604693787" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>

            <div class="col-md-6 adress">

                <h3>Compiègne</h3>

                <h4>25 rue des Oiseaux<br>
                    60780 Compiègne<br>
                    Du lundi au vendredi<br>
                    De 9h à 18h<br>
                    03.45.67.76.98
                </h4>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41542.98353371069!2d2.8198381241021124!3d49.40065106846755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d5e621cbedd7%3A0x40af13e81644610!2s60200+Compi%C3%A8gne!5e0!3m2!1sfr!2sfr!4v1466604795216" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>

        </div>

    </section>

    <section id="contact">

        <h2>Contactez-nous</h2>

        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>

    </section>

<?php get_footer(); ?>