<?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
    );
    $query = new WP_Query($args);

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
    wp_reset_postdata();
?>
