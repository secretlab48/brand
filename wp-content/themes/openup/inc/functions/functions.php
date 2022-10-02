<?php

/* Function header */
function openup_header_sections($logo) {
    $page_id = get_queried_object_id();
    $hide_menu = get_field('hide_menu', $page_id);
    ?>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="o-header__logo d-flex align-items-center">
                    <?php echo $logo; ?>
                </div>
            </div>
            <?php if ($hide_menu || is_404()): ?>

            <?php else: ?>
                <div class="col-auto">
                    <div class="o-header__nav-block d-flex align-items-center justify-content-end">
                        <div class="c-main-menu__link-wrap  d-flex align-items-center d-xl-none">
                            <a href="#" class="c-main-menu__link JS-link-menu--open">
                                <svg class="icon">
                                    <use xlink:href="#icon-mobile-burger"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="c-main-menu-mobile">
                            <div class="c-main-menu-mobile__inner d-xl-flex align-items-start align-items-xl-center flex-column flex-xl-row">
                                <div class="c-main-menu-mobile__header d-flex align-items-center justify-content-between d-xl-none">
                                    <div class="o-header__logo d-flex align-items-center">
                                        <?php echo $logo; ?>
                                    </div>
                                    <div class="c-main-menu__link-wrap  d-flex align-items-center d-xl-none">
                                        <a href="#" class="c-main-menu__link JS-link-menu--close">
                                            <svg class="icon">
                                                <use xlink:href="#icon-main-close"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <?php get_template_part('template-parts/components/navigation/main-menu'); ?>

                                <div class="c-main-menu-mobile__footer d-flex align-items-start justify-content-between justify-content-xl-center">
                                    <?php do_action('wpml_add_language_selector') ?>

                                    <?php get_template_part('template-parts/components/buttons/consult'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}


function openup_render_footer_widget() {

    $contact_number = get_field( 'phone', 'option' );
    $contact_title = get_field( 'phone_title', 'option' );
    $number_icon = get_field( 'phone_image', 'option' );
    $contact_link = get_field( 'chat_link', 'option' );
    $chat_icon = get_field( 'chat_image', 'option' );

?>
            <ul class="o-footer__contact-list">
            <?php if ($contact_number) { ?>
                <?php
                $tel_text = $contact_title . $contact_number;
                $pattern = '/\+?\d{2,3}\s\d+/';
                $tel = $tel_text;
                ?>
                <li class="o-footer__contact-item footer-info-container d-flex align-items-center">
                    <?php if ($number_icon) { ?>
                        <?php
                            $icon_id = isset( $number_icon['ID'] ) ? $number_icon['ID'] : $number_icon;
                            echo wp_get_attachment_image($icon_id,'full', "", array( "class" => "o-footer__contact-icon" ))
                        ?>
                    <?php } ?>
                    <a class="o-footer__contact-link phone-number" href="tel:<?php echo $tel; ?>">
                        <?php echo $tel; ?>
                    </a>
                    <div class="o-footer__info-box">
                        <div class="o-footer__info-link-box">
                            <a class="o-footer__info-link" href="<?php echo get_permalink( 741 ); ?>"><?= __( 'Vind je lokale telefoonnummer', 'openup' ) ?></a>
                        </div>
                        <!--<a class="o-footer__svg-link" href="<?php echo get_permalink( 741 ); ?>">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="10" r="9" stroke-width="2"/>
                                <path d="M9.53921 6.232C10.2112 6.232 10.7572 5.756 10.7572 5.098C10.7572 4.426 10.2112 3.95 9.53921 3.95C8.88121 3.95 8.33521 4.426 8.33521 5.098C8.33521 5.756 8.88121 6.232 9.53921 6.232ZM10.7432 14.982C10.7292 14.17 10.7152 12.952 10.7152 12.168V10.012L10.7712 7.772L10.5752 7.632L7.36921 8.472V8.808L8.41921 8.92C8.44721 9.634 8.46121 10.152 8.46121 11.048V12.168C8.46121 12.952 8.44721 14.156 8.43321 14.982L7.50921 15.066V15.5H11.5972V15.066L10.7432 14.982Z" />
                            </svg>
                        </a>-->
                    </div>
                </li>
            <?php } ?>

            <?php
            if ($contact_link) { ?>
                <li class="o-footer__contact-item d-flex align-items-center">
                    <?php if ($chat_icon) { ?>
                        <?php
                        $icon_id = isset( $chat_icon['ID'] ) ? $chat_icon['ID'] : $chat_icon;
                            echo wp_get_attachment_image($icon_id,'full', "", array( "class" => "o-footer__contact-icon" ))
                        ?>
                    <?php } ?>
                    <a class="o-footer__contact-link"
                    href="<?php echo esc_url($contact_link['url']); ?>"
                    target="<?php echo esc_attr($contact_link['target']); ?>">
                        <?php echo esc_html($contact_link['title']); ?>
                    </a>
                </li>
            <?php } ?>

        </ul>
        <!--         END ACF CODE-->
    <?php
}

/* TinyMCE Drop Cap Button */

function openup_tiny_mce_add_buttons( $plugins ) {
    $plugins['openup_dropcap_plugin'] = get_template_directory_uri() . '/src/js/admin/tiny-mce.js';
    $plugins['openup_custom_list_plugin'] = get_template_directory_uri() . '/src/js/admin/custom-list-tiny-mce.js';
    return $plugins;
}

function openup_tiny_mce_register_buttons( $buttons ) {
    $newBtns = array(
        'openup_dropcap_button',
        'openup_custom_list_button'
    );
    $buttons = array_merge( $buttons, $newBtns );
    return $buttons;
}

add_action( 'init', 'openup_tiny_mce_new_buttons' );

function openup_tiny_mce_new_buttons() {
    add_filter( 'mce_external_plugins', 'openup_tiny_mce_add_buttons' );
    add_filter( 'mce_buttons', 'openup_tiny_mce_register_buttons' );
}

add_theme_support( 'editor-styles' );
add_action( 'admin_init', function() { add_editor_style('src/scss/admin/tiny-mce.css'); } );

/* TinyMCE  Drop Cap Button */


add_action( 'acf/init', 'header_foooter_settings' );
function header_foooter_settings() {

    if( function_exists('acf_add_options_page') ) {

        $site_globals = acf_add_options_page(array(
            'page_title' 	=> 'Options',
            'menu_title' 	=> 'Options',
            'icon_url'		=> 'dashicons-admin-generic',
            'redirect' 		=> true
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> $site_globals['menu_slug'],
            'position'    =>  '1',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Footer Settings',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> $site_globals['menu_slug'],
            'position'    =>  '2',
        ));

    }
}

