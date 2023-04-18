<?php get_header(); the_post();?>
    
    <!-- Main start -->
    <main class="main">
        
        <!-- Cover start -->
        <header class="cover--article">
            <?php the_post_thumbnail( 'large', ['class' => 'cover--article__img', 'alt'   => esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ),] );?>
            <h1 class="txt--blue"><?php the_title(); ?></h1>
            <p class="txt--orange"><?php the_field ( 'author' ); ?></p>
        </header>
        <!-- Cover ends -->

        <!-- Article start -->
        <section class="frame nopaddingtop nopaddingbottom article">
            <article class="article__content content">
                <?php the_content(); ?>
            </article>

            <?php get_template_part ( 'template-parts/prevnext-template' ); ?>

            <?php dynamic_sidebar( 'Sidebar articulos' ); ?>

        </section>
        <!-- Article ends -->

        <!-- Blog start -->
        <section class="frame section__wrap">
            <h2><?php _e('Artículos relacionados:'); ?></h2>
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
                        <a href="<?php the_permalink(); ?>" class="card-blog__link"></a>
                        </article>
                    <?php
                    }
                    }
                    // Restore original post data
                    wp_reset_postdata();
                ?>
            </div>
        </section>
        <!-- Blog ends -->
        
        <!-- CTA start -->
        <?php get_template_part ( 'template-parts/cta-template' ); ?>
        <!-- CTA ends -->

    <?php get_footer(); ?>