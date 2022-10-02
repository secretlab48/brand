<?php

if (!defined('ABSPATH')) exit;

//ACF vars
$menu_tel = get_field('main_menu_tel', 'option');
$menu_link = get_field('main_menu_link', 'option');
?>

<div class="c-main-menu">
    <?php wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu' => 'Main Menu',
        'container_id' => 'cssmenu',
        'menu_class' => 'top-menu',
    )); ?>

    <div class="c-main-menu__consult-wrapper d-flex align-items-center d-xl-none">
        <ul class="c-main-menu__consult-list">
            <li class="c-main-menu__consult-item d-flex align-items-center">
                <a href="<?php echo $menu_tel['url']; ?>"><?php echo $menu_tel['title']; ?></a>
            </li>
            <li class="c-main-menu__consult-item d-flex align-items-center">
                <a href="<?php echo $menu_link['url']; ?>"><?php echo $menu_link['title']; ?></a>
            </li>
        </ul>
    </div>
</div>