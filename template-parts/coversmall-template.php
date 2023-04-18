<main class="main simple">

        <!-- Cover start -->
        <header class="cover-small frame">
            <?php if (is_home()) { ?>
                <h1><?php single_post_title(); ?></h1>
            <?php } else { ?>
                <h1><?php the_title(); ?></h1>
            <?php } ?>
        </header>

        <!-- Cover ends -->