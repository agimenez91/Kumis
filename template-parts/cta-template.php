<!-- CTA start -->
<div class="card-cta frame" >
    <div class="card-cta__text">
        <h2 class="h1"><?php echo get_field ('cta_title'); ?></h2>
        <p><?php echo get_field ('cta_txt'); ?></p>
    </div>
    <div class="card-cta__btn">
        <a href="<?php echo get_field ('cta_link'); ?>" class=" btn--1 btn--2"><?php echo get_field ('cta_btn_txt'); ?></a>
    </div>
</div>
<!-- CTA ends -->