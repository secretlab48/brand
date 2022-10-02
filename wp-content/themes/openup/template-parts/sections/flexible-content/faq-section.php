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
$title = get_sub_field('faq_section_title');
$description = get_sub_field('faq_section_description');
$has_term_tile = get_sub_field('has_term_title');
$has_terms_slider = get_sub_field('has_terms_slider');
$faq_slider_terms = get_sub_field( 'faq_slider_terms' );
$terms = get_sub_field('faq_section_taxonomy');
$get_term = empty($_GET['term']) ? $get_term = $terms[0] : $get_term = $_GET['term'];

$faq_terms = get_terms([
    'taxonomy' => 'faq_type',
]);
$faq_arg_term = array(
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'faq_type',
            'field' => 'term_id',
            'terms' => $get_term,
        )
    )
);

$faq_query = new WP_Query($faq_arg_term); ?>

<section class="s-faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="c-intro text-center u-color-primary-dark-blue">
                    <?php if ($title): ?>
                        <h2 class="c-intro__title"> <?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if ($description): ?>
                        <div class="c-intro__description">
                            <?php echo $description; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="s-faq__nav">
                    <?php if ( $has_term_tile ) : ?>
                    <div class="s-faq__nav-list JS-faq-category JS-faq-category--section JS-filter-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($terms as $faq_term):
                                    $term_name = get_term($faq_term); ?>
                                    <div class="swiper-slide">
                                        <div class="s-faq__nav-item">
                                            <a class="u-color-primary-dark-blue <?= empty($_GET['term']) && $term_name->term_id == $terms[0] ? 'active' : $term_name->term_id == $_GET['term'] ? 'active' : '' ?> "
                                               href="<?php echo add_query_arg('term', $term_name->term_id) ?>"><?php echo $term_name->name ?></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="c-search-filter JS-faq-search u-color-primary-dark-blue" id="close-tag1">
                        <div class="c-search-filter__header">
                            <input type="text" class="c-search-filter__input JS-faq-search-input" data-terms-id = "<?= implode(', ', $terms) ?>" data-post-type ="faq"
                                   placeholder="<?php _e('Waar ben je naar opzoek?', 'openup'); ?>"/>
                            <button type="submit" role="button"
                                    class="c-btn-round c-btn-round--more c-btn-round--transparent c-search-filter__serch-btn JS-to-post-btn">
                                <svg class="icon">
                                    <use xlink:href="#icon-serch"></use>
                                </svg>
                            </button>
                            <button type="submit" role="button"
                                    class="c-btn-round c-btn-round--more c-btn-primary--blue d-none JS-to-back-btn">
                                <svg class="icon">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="JS-faq-list-container"></div>
                    </div>
                    <?php if ( $has_terms_slider ) : ?>
                    <div class="s-faq__nav"  name="s-faq">
                        <div class="s-faq__nav-list JS-faq-category JS-filter-slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php 
                                        $slider_terms = ( ! empty( $faq_slider_terms ) && count( $faq_slider_terms ) > 0 ) ? $faq_slider_terms : $faq_terms;
                                        foreach ($slider_terms as $faq_term): 
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="s-faq__nav-item">
                                                <a class="u-color-primary-dark-blue <?= empty($_GET['term']) && $faq_terms[0]->term_id == $faq_term->term_id ? 'active' : ( ! empty( $faq_term->term_id ) && $faq_term->term_id ) == $get_term ? 'active' : '' ?>"
                                                   href="<?php echo add_query_arg('term', $faq_term->term_id) ?>"><?php echo $faq_term->name ?></a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="s-faq__nav-button swiper-button-next">
                                <svg class="icon-angle">
                                    <use xlink:href="#icon-angle-right"></use>
                                </svg>
                            </div>
                            <div class="s-faq__nav-button swiper-button-prev">
                                <svg class="icon-angle">
                                    <use xlink:href="#icon-angle-left"></use>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>
                </div>
                <div class="JS-faq-search-container">
                    <?php if ($faq_query->have_posts()): ?>
                        <div class="c-accordion">
                            <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
                                <?php get_template_part('template-parts/components/accordion-post'); ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
