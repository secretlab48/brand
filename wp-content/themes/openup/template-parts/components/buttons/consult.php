<?php

if (!defined('ABSPATH')) exit;

//ACF vars
$button_mobile = get_field('book_session_button_mobile', 'option');
$button_desktop = get_field('book_session_button_desktop', 'option');
$session_menu = get_field('book_session_menu', 'option');

?>

<?php if ($button_desktop && $session_menu): ?>
    <div class="d-none d-xl-flex c-main-menu__nav-list-wrapper">
        <a class="c-btn-outline c-btn-outline-primary--dark-blue" href="<?php echo $button_desktop['url']; ?>">
            <?php echo $button_desktop['title']; ?>
        </a>
        <?php if( have_rows('book_session_menu', 'option') ): ?>
            <ul class="c-main-menu__nav-list">
                <?php while( have_rows('book_session_menu', 'option') ): the_row();
                    $link = get_sub_field('link', 'option');
                    ?>
                    <li class="c-main-menu__nav-item">
                        <a href="<?php echo $link['url'] ?>" class="c-main-menu__nav-link">
                            <?php echo $link['title'] ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php if ($button_mobile): ?>
    <div class="d-flex d-xl-none">
        <a href="<?php echo $button_mobile['url'] ?>" class="c-btn c-btn-primary--blue">
            <?php echo $button_mobile['title'] ?>
        </a>
    </div>
<?php endif; ?>



