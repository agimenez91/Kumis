<?php /* Template name: Página de Contacto */ ?>

<?php get_header(); ?>

<?php get_template_part ( 'template-parts/coversmall-template' ); ?>


        <!-- Form start -->
        <section class="frame form">
            <div class="form__area">
                <?php the_content(); ?>

                <div class="form__img">
                    <?php the_post_thumbnail(''); ?>
                </div>
            </div>
        </section>
        <!-- Form ends -->
        
        <?php get_template_part ( 'template-parts/cta-template' ); ?>


<?php get_footer(); ?>