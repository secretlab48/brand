<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package openup
 */

if (!defined('ABSPATH')) exit;
global $post;
$global_tracking_body = (class_exists('ACF')) ? get_field('global_tracking_body', 'options') : null;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
# Global / Page Tracking
if ($global_tracking_body) : echo $global_tracking_body; endif;
$page_id = get_queried_object_id();
$layouts = get_post_meta($page_id, 'flexible_content_page', true);
$background_color_left_hero_slider = get_field('hero_slider_background_color', $page_id);
$background_color_left_hero_slider = ( ! empty( $background_color_left_hero_slider ) ) ? str_replace( '_', '-', $background_color_left_hero_slider ) : '';
$background_color = get_field('background_color_right', $page_id);
$background_color_left = get_field('background_color_left', $page_id);
$background_color = ( ! empty( $background_color ) ) ? str_replace( '_', '-', $background_color ) : '';
if ($background_color):
    $logo_color = 'o-header-secondary u-bg-primary-'.$background_color;
elseif (((is_array($layouts)) && in_array('section_title_and_people', $layouts))):
    $logo_color = 'o-header-secondary u-bg-primary-green';
elseif ($background_color_left_hero_slider && get_page_template_slug() == 'templates/template-home-with-slider.php'):
    $logo_color = ' o-header-transparent u-bg-primary-'.$background_color_left_hero_slider;
else:
    $logo_color = '';
endif;
if(in_array($background_color_left, ['skin', 'white']) || in_array($background_color_left_hero_slider, ['skin', 'white'])):
    $logo_color .= ' o-header-darken-logo';
elseif(in_array($background_color_left, ['green', 'blue', 'dark_blue']) || in_array($background_color_left_hero_slider, ['green', 'blue', 'dark-blue'])):
    $logo_color .= ' o-header-light-logo';
endif;
?>

<div id="page" class="site">
    <?php if (is_page_template('templates/template-consult.php')
        || is_page_template('templates/template-chat-bedankt.php')
        || is_page_template('templates/template-consult-booking.php')
        || is_page_template('templates/template-boek-consult-post.php')
        || is_page_template('templates/template-video-bedankt.php')): ?>
    <?php else: ?>
        <header class="o-header <?php echo $logo_color ?>" id="header-main">
            <?php get_template_part('template-parts/organisms/header/header-main'); ?>
            <?php get_template_part('template-parts/organisms/header/main-menu'); ?>
        </header>
    <?php endif; ?>
    <div id="content" class="site-content">


