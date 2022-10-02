<?php

//ACF

$title = get_field('blog_hero_title', 'options');
$description = get_field('blog_hero_description', 'options');
?>


<section class="o-main-hero o-main-hero--column o-main-hero--blog u-color-primary-dark-blue">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 col-lg-5">
                <div class="o-main-hero__container">
                    <?php if ($title) : ?>
                        <h1 class="o-main-hero__title"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ($description) : ?>
                        <div class="o-main-hero__description"><?php echo $description; ?></div>
                    <?php endif; ?>
                </div>
            </div>  
            <div class="o-main-hero__img-container"> 
                <img src="/wp-content/themes/openup/img/global/man_blog.svg" alt="Blog Page Image"/> 
            </div>
        </div>
    </div>
</section>