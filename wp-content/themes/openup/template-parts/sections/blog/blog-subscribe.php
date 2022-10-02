<?php

$title = get_field('blog_page_subscribe_title', 'options');
$description = get_field('blog_page_subscribe_description', 'options');

?>

<section class="s-subscribe s-wave s-wave--primary-skin u-color-primary-dark-blue">
    <div class="s-wave__inner-wrapper">
        <svg class="s-wave__icon s-wave__icon-type-2 icon-bottom">
            <use xlink:href="#wave-bottom-type-2"></use>
        </svg>
    </div>
    <div class="container">
        <div class="row justify-content-lg-between">
            <?php if ($title): ?>
                <div class="col-12 col-lg-6">
                    <div class="c-intro">
                        <h2 class="c-intro__title"><?php echo $title ?> </h2>

                        <?php if ($description): ?>
                            <div class="c-intro__description">
                                <p><?php echo $description ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-12 col-lg-5">
                <div class="s-subscribe__form">
                    <div>
                        <?php if ( ICL_LANGUAGE_CODE == 'nl' ) :
                            get_template_part('template-parts/components/newsletter-code');
                        elseif ( ICL_LANGUAGE_CODE == 'en' ) :
                            get_template_part('template-parts/components/newsletter-code-en');
                        elseif ( ICL_LANGUAGE_CODE == 'de' ) :
                            get_template_part('template-parts/components/newsletter-code-de');
                        elseif ( ICL_LANGUAGE_CODE == 'fr' ) :
                            get_template_part('template-parts/components/newsletter-code-fr');
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 