<?php /* Template name: Página sobre la marca */ ?>

<?php get_header(); ?>

<!-- Main start -->
<main class="main about">

<!-- Cover start -->
<header class="cover frame relative">
    <div class="cover__text">
        <h1><?php the_title(); ?></h1>
        <p class="subtitle--M"><?php echo get_field ('upper-subtitle'); ?></p>
        <p class="p--S"><?php echo get_field ('cover_txt'); ?></p>
    </div>
    <div class="cover__img">
        <?php the_post_thumbnail('medium'); ?>
    </div>
</header>
<!-- Cover ends -->

<!-- Statement start -->
<div class="card-statement frame">
    <h2><?php echo get_field ('statement_txt'); ?></h2>
    <p><?php echo get_field ('statement_subtitle'); ?></p>
</div>
<!-- Statement ends -->

<?php the_content(); ?>

<?php get_footer(); ?>