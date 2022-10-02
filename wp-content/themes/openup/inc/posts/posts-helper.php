<?php

if (!defined('ABSPATH')) exit;

/**
 * Getting excerpt with defined symbols length
 *
 * @param int $charlength - count of char length
 * @param bool $strip_tags - strip tags
 * @return string
 */
function the_excerpt_max_charlength($charlength, $strip_tags = false)
{
    $excerpt = ($strip_tags) ? strip_tags(get_the_content()) : get_the_content();
    $excerpt = preg_replace("/<img[^>]+\>/i", "", $excerpt);
    $charlength++;

    if (mb_strlen($excerpt) > $charlength) {
        $subex = mb_substr($excerpt, 0, $charlength - 5);
        $exwords = explode(' ', $subex);
        $excut = -(mb_strlen($exwords[count($exwords) - 1]));
        if ($excut < 0) {
            echo mb_substr($subex, 0, $excut);
        } else {
            echo $subex;
        }
        echo '...';
    } else {
        echo $excerpt;
    }
}

/**
 * Getting terms names of post by taxonomy
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @param string $taxonomy
 * @param bool $strtolower
 * @return string
 */
function get_post_terms($post = 0, $taxonomy = null, $strtolower = false)
{
    $post = get_post($post);
    $id = isset($post->ID) ? $post->ID : 0;
    $taxonomy = ($taxonomy) ? $taxonomy : 'category';
    $terms = wp_get_post_terms($id, 'category');
    $post_terms = '';
    foreach ($terms as $term) {
        $post_terms .= ($strtolower) ? strtolower($term->name) . ' ' : $term->name . ' ';
    }
    return $post_terms;
}


/**
 * Getting previous post, if current post is first, return last post
 *
 * @return string
 */
function openup_get_previous_post()
{
    $post_type = get_post_type();
    $prev_post = get_previous_post();
    
    if ($prev_post) return $prev_post;

    $prev_post_arr = get_posts([
        'post_type' => $post_type,
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    ]);

    return (isset($prev_post_arr[0]) && $prev_post_arr[0]) ? $prev_post_arr[0] : null;
}

/**
 * Getting next post, if current post is last, return first post
 *
 * @return string
 */
function openup_get_next_post()
{
    $post_type = get_post_type();
    $next_post = get_next_post();

    if ($next_post) return $next_post;

    $next_post_arr = get_posts([
        'post_type' => $post_type,
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'ASC'
    ]);
    
    return (isset($next_post_arr[0]) && $next_post_arr[0]) ? $next_post_arr[0] : null;
}
