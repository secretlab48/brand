<?php

$current_cat = !empty( $_GET['cat'] ) ? $_GET['cat'] : null;
$cur_tax_themas = !empty( $_GET['themas'] ) ? $_GET['themas'] : null;
$cur_tax_author = !empty( $_GET['author'] ) ? $_GET['author'] : null;
$curent_taxonomy = '';
$curent_term = '';

$post_arg = [
    'post_type' => 'post',
    'posts_per_page' => 6,
];

if (!empty($current_cat) && $current_cat !== 'alle_types'):
    $curent_taxonomy = 'category';
    $curent_term = $current_cat;
elseif (!empty($cur_tax_themas) && $cur_tax_themas !== "alle_themas"):
    $curent_taxonomy = 'thema_areas-taxonomy';
    $curent_term = $cur_tax_themas;
elseif (!empty($cur_tax_author) && $cur_tax_author !== 'alle_auteurs'):
    $curent_taxonomy = 'author-taxonomy';
    $curent_term = $cur_tax_author;
endif;

if (isset($current_cat) && $current_cat !== 'alle_types'
    || isset($cur_tax_themas) && $cur_tax_themas !== "alle_themas"
    || isset($cur_tax_author) && $cur_tax_author !== 'alle_auteurs'):
    $post_arg['tax_query'] = array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'thema_areas-taxonomy',
            'field' => 'slug',
            'terms' => $cur_tax_themas,
        ),
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $current_cat,
        ),
        array(
            'taxonomy' => 'author-taxonomy',
            'field' => 'slug',
            'terms' => $cur_tax_author,
        )
    );

endif;

$posts_query = new WP_Query($post_arg);
?>

<?php if ($posts_query): ?>
    <section class="s-blog-posts u-bg-secondary-skin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="o-banner__title u-color-primary-dark-blue text-center"><?php _e('Tips en inzichten van onze psychologen', 'openup'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="s-blog-post__filter JS-post-filter-slider JS-filter-slider">
                        <?php get_template_part('template-parts/components/filters/blog-filters'); ?>
                    </div>
                </div>
            </div>
            <div class="js-filter">
                <div class="s-blog-posts__container" data-pages="<?= $posts_query->max_num_pages; ?>">
                    <div class="row JS--post-container ">
                        <?php
                        while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                            <div class="col-md-6 col-lg-4 JS--posts--item">
                                <?php get_template_part('template-parts/components/post-card'); ?>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php if ($posts_query->max_num_pages > 1): ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="JS--load--container">
                                <div class="c-load-more text-center d-flex justify-content-center">
                                    <a class="c-btn c-btn-primary--dark-blue JS--load-more"
                                       data-current-post-type="<?php echo get_post_type(); ?>"
                                       data-current-term="<?php echo $curent_term ?>"
                                       data-current-taxonomy="<?php echo $curent_taxonomy ?>"
                                       href="javascript:void(0);"><?php echo __('Meer laden', 'openup'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif ?>

