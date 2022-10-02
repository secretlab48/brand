<?php

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts()
{

    $cur_taxonomy = $_POST['taxonomy'];
    $cur_term = $_POST['term'];
    $post_type = $_POST['post_type'];
    $post_per_page = $post_type == 'post' ? 6 : 3;

    $args = array(
        'post_type' => array($post_type),
        'posts_per_page' => $post_per_page,
        'paged' => $_POST['page'] + 1,
    );

    if (!empty($cur_taxonomy) && !empty($cur_term)):
        $args['tax_query'] = array(
            array(
                'taxonomy' => $cur_taxonomy,
                'field' => 'slug',
                'terms' => $cur_term,
            )
        );

    endif;

    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="col-md-6 col-lg-4 JS--posts--item">
                <?php get_template_part('template-parts/components/post-card'); ?>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif;
    wp_die();

}




