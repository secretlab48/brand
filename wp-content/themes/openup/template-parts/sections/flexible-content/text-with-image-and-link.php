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

$sect_twil_title = get_sub_field('section_text_with_image_and_link_title');
$sect_twil_description = get_sub_field('section_text_with_image_and_link_description');
$sect_twil_image = get_sub_field('section_text_with_image_and_link_image');
$sect_twil_link = get_sub_field('section_text_with_image_and_link_link');
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
                    <?php if ($sect_twil_image): ?>
                        <?php echo wp_get_attachment_image($sect_twil_image['ID'],'full') ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-7 order-1 order-lg-2">
                <div class="c-intro u-color-primary-white">
                    <?php if ($sect_twil_title): ?>
                        <h2 class="c-intro__title">
                            <?php echo $sect_twil_title; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($sect_twil_description): ?>
                        <div class="c-intro__description">
                            <?php echo $sect_twil_description; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($sect_twil_link): ?>
                        <div class="c-intro__link">
                            <a class="c-btn c-btn-primary--blue"
                               href="<?php echo $sect_twil_link['url']; ?>">
                                <?php echo $sect_twil_link['title']; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
