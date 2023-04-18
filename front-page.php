<?php get_header(); ?>


    <!-- Main start -->
    <main class="main home">

        <!-- Cover start -->
        <?php get_template_part ( 'template-parts/coverbig-template' ); ?>
        <!-- Cover ends -->

        <?php the_content(); ?>

        <!-- Blog start -->
        <section class="frame section__wrap">
            <h2><?php _e('El Blog Digital para Veterinarios'); ?></h2>
            <div class="carrousel">
                <?php
                    // Args para el loop
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category__not_in' => array(9)
                    );
                    // Query
                    $query = new WP_Query($args);

                    // Loop
                    if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <article class="card-blog">
                        <?php the_post_thumbnail( 'small', ['class' => 'thumbnail', 'alt'   => esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ),] );?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="card-blog__link" aria-label="Haz click para ir a la página del artículo"></a>
                        </article>
                    <?php
                    }
                    }
                    // Restore original post data
                    wp_reset_postdata();
                ?>
            </div>
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn--1">¡Quiero leer más artículos!</a>
        </section>
        <!-- Blog ends -->

        <?php get_footer(); ?>