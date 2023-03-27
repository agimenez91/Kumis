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
            <article class="article__content">
                <?php the_content(); ?>
            </article>

            <?php get_template_part ( 'template-parts/prevnext-template' ); ?>

            <aside class="sidebar">
                <h2>¿Quieres mejorar tu presencia online?</h2>
                <p class="p--M">En el blog más chachi del mundo encontrarás tips y mogollón de recursos que te ayudarán a destacar sobre tu competencia</p>
                <div>
                    <button class="btn--1">¡Suscríbete ya! 
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 17.3995C3.4227 14.6433 6.848 11.8871 10.2707 9.13081C6.87407 6.75745 3.47483 4.38409 0.0782033 2.01072C0.649088 1.57801 1.21997 1.14792 1.79086 0.71521C5.52637 3.75206 9.26449 6.79154 13 9.82839C9.3479 13.1249 5.69842 16.4187 2.04632 19.7152L0 17.3995Z"/>
                        </svg>
                    </button>
                </div>
            </aside>
        </section>
        <!-- Article ends -->

        <!-- Blog start -->
        <section class="frame section__wrap">
            <h2>Artículos relacionados:</h2>
            <div class="carrousel">
                <?php
                    // Args para el loop
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
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
                        <p><?php the_excerpt(); ?></p>
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
        <div class="card-cta frame" >
            <div class="card-cta__text">
                <h2 class="h1">CTA Lorem Ipsum Dollor</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos aperiam consequuntur nemo molestiae eum.</p>
            </div>
            <div class="card-cta__btn">
                <button class="btn--2">Contáctanos</button>
            </div>
        </div>
        <!-- CTA ends -->

    <?php get_footer(); ?>