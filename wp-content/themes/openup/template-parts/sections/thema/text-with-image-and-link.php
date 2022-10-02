<?php
/**
 *  Partial: Sections
 *
 *  Partial for loading Sections via file name using a class extending
 *  ACF's flexible content field.
 *
 * @see       inc/acf/acf-sections.php - Sections class
 * @see       inc/fields/* - Defined fields and Sections
 */

if (!defined('ABSPATH')) exit;

$sect_title = get_field('thema_section_with_link_title');
$sect_description = get_field('thema_section_with_link_description');
$sect_image = get_field('thema_section_with_link_image');
$sect_link = get_field('thema_section_with_link__link');
?>


<section class="s-two-column s-wave s-wave--primary-green">
    <div class="s-wave__inner-wrapper">
        <svg class="s-wave__icon s-wave__icon-type-2 icon-bottom">
            <use xlink:href="#wave-bottom-type-2"></use>
        </svg>
    </div>

    <div class="container">
        <div class="row justify-content-md-between">
            <div class="col-12 col-lg-4 order-2 order-lg-1">
                <div class="s-two-column__img-box text-left">
                    <?php if ($sect_image): ?>
                        <img src="<?php echo $sect_image['url']; ?>"
                             alt="<?php echo esc_attr($sect_image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-7 order-1 order-lg-2">
                <div class="c-intro u-color-primary-white">
                    <?php if ($sect_title): ?>
                        <h2 class="c-intro__title">
                            <?php echo $sect_title; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($sect_description): ?>
                        <div class="c-intro__description">
                            <?php echo $sect_description; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($sect_link): ?>
                        <div class="c-intro__link">
                            <a class="c-btn c-btn-primary--blue"
                               href="<?php echo $sect_link['url']; ?>">
                                <?php echo $sect_link['title']; ?> 
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
