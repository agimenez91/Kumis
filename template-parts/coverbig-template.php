    <!-- Cover start -->
    <header class="cover frame">
        <div class="cover__text">
            <p class="subtitle--S"><?php echo get_field ('upper-subtitle'); ?></p>
            <h1><?php the_title(); ?></h1>
            <p><?php echo get_field ('cover_txt'); ?></p>
            <a class="btn--1" href="<?php echo get_field ('btn__link'); ?>"><?php echo get_field ('btn__text'); ?></a>
        </div>
        <div class="cover__img">
            <?php the_post_thumbnail(''); ?>
        </div>
    </header>
    <!-- Cover ends -->

    <!-- Statement start -->
    <div class="card-statement frame">
        <h2><?php echo get_field ('statement_txt'); ?></h2>
        <p><?php echo get_field ('statement_subtitle'); ?></p>
    </div>
    <!-- Statement ends -->