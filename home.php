<?php get_header(); ?>

 <!-- Main start -->
 <main class="main">

<!-- Cover start -->
<header class="cover-small frame">
    <h1>El blog para ser super guay</h1>
    <p class="p--L">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita ad quaerat accusamus odio! Unde, reiciendis pariatur ex amet architecto quae consectetur doloribus laudantium autem suscipit! Nostrum suscipit porro impedit eum.</p>
</header>
<!-- Cover ends -->

<!-- Blog start -->
<section class="frame blog">
    <aside class="sidebar nopaddingtop">
        <h2>¿Quieres mejorar tu presencia online?</h2>
        <p class="p--M">En el blog más chachi del mundo encontrarás tips y mogollón de recursos que te ayudarán a destacar sobre tu competencia</p>
        <div>
            <button class="btn--1">¡Suscríbete ya! 
                <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 17.3995C3.4227 14.6433 6.848 11.8871 10.2707 9.13081C6.87407 6.75745 3.47483 4.38409 0.0782033 2.01072C0.649088 1.57801 1.21997 1.14792 1.79086 0.71521C5.52637 3.75206 9.26449 6.79154 13 9.82839C9.3479 13.1249 5.69842 16.4187 2.04632 19.7152L0 17.3995Z"/>
                </svg>
            </button>
        </div>
        <div>
            <button class="btn--2">Categorías 
                <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.31567 0.215209C5.07191 3.63791 7.82816 7.06322 10.5844 10.4859C12.9578 7.08928 15.3311 3.69004 17.7045 0.293413C18.1372 0.864298 18.5673 1.43518 19 2.00607C15.9631 5.74158 12.9237 9.4797 9.88682 13.2152C6.59034 9.56311 3.29648 5.91363 -8.94475e-08 2.26153L2.31567 0.215209Z"/>
                </svg>
            </button>
        </div>
    </aside>
    <article class="card-blog card-blog--expand">
        <img class="thumbnail" src="https://placekeanu.com/400/200" alt="">
        <div>
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <a href="#" class="card-blog__link"></a>
        </div>
    </article>
    <article class="card-blog card-blog--expand">
        <img class="thumbnail" src="https://placekeanu.com/400/200" alt="">
        <div>
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <a href="#" class="card-blog__link"></a>
        </div>
    </article>
    <article class="card-blog card-blog--expand">
        <img class="thumbnail" src="https://placekeanu.com/400/200" alt="">
        <div>
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <a href="#" class="card-blog__link"></a>
        </div>
    </article>
    </div>
    <div class="previousnext">
        <a href="">
        <svg width="22" height="33" viewBox="0 0 22 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.8945 4.11528C16.13 8.75738 10.361 13.3995 4.5965 18.0416C10.3171 22.0388 16.0422 26.0361 21.7628 30.0333C20.8013 30.7621 19.8398 31.4864 18.8784 32.2152C12.587 27.1005 6.29118 21.9814 -0.000207335 16.8667C6.15069 11.3147 12.2972 5.76718 18.4481 0.21521L21.8945 4.11528Z"/>
        </svg>
        Anterior                        
        </a>
        <p>/</p>
        <a href="">
        Siguiente
        <svg width="22" height="33" viewBox="0 0 22 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.105469 28.3151C5.87001 23.673 11.639 19.0309 17.4035 14.3888C11.6829 10.3916 5.95782 6.39437 0.23718 2.39713C1.19867 1.66835 2.16016 0.943988 3.12165 0.21521C9.41304 5.32991 15.7088 10.449 22.0002 15.5637C15.8493 21.1157 9.7028 26.6632 3.5519 32.2152L0.105469 28.3151Z"/>
        </svg>                        
        </a>
    </div>
    <img class="blog__img" src="img/blog.png" alt="">
</section>
<!-- Blog ends -->

<!-- Downloadable resources start -->
<section class="frame section__wrap nopaddingtop">
    <h2>Recursos que te podrían interesar:</h2>
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
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail( 'small', ['class' => 'thumbnail', 'alt'   => esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ),] );?>
                <p><?php the_excerpt(); ?></p>
                <div class="margin-auto">
                    <button class="btn--2">
                        Descargar  
                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 17.3995C3.4227 14.6433 6.848 11.8871 10.2707 9.13081C6.87407 6.75745 3.47483 4.38409 0.0782033 2.01072C0.649088 1.57801 1.21997 1.14792 1.79086 0.71521C5.52637 3.75206 9.26449 6.79154 13 9.82839C9.3479 13.1249 5.69842 16.4187 2.04632 19.7152L0 17.3995Z"/>
                        </svg>
                        <a class="card-blog__link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
                    </button>
                </div>
                </article>
            <?php
            }
            }
            // Restore original post data
            wp_reset_postdata();
        ?>
    </div>
</section>
<!-- Downloadable resources ends -->

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