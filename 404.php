<?php get_header(); ?>

    <!-- Main start -->
    <main class="main p404">

        <!-- Cover start -->
        <header class="cover frame">
            <div class="cover__text">
                <p class="subtitle--S"><?php echo get_field ( '404_upper_subtitle', 'option' ); ?></p>
                <h1><?php echo get_field('404_page_title', 'option'); ?></h1>
                <p class="p--S"><?php _e ('¡Haz', 'kumis'); ?> <a href="<?php echo home_url(); ?>"><?php _e ('click aquí', 'kumis'); ?></a> <?php echo get_field ( '404_goback', 'option' ); ?></p>
            </div>
            <div class="cover__img">
                <?php echo wp_get_attachment_image( get_field( '404_img', 'option' ), 'large' ); ?>
            </div>
        </header>
        <!-- Cover ends -->
        
<?php get_footer(); ?>