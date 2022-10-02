<?php

if (!defined('ABSPATH')) exit;
$page_id = get_queried_object_id();
$top_footer_color = get_field_object('top_footer_color', $page_id);
$value = $top_footer_color['value'] ? $top_footer_color['value'] : '#ffffff';
?>

<div class="o-footer__top" style="background-color:<?= (is_single()) ? '#ffffff' : $value ?> ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="o-footer__social-list d-flex justify-content-center align-items-center">
                    <li class="o-footer__social-item d-none d-md-flex align-items-center">
                        <span class="o-footer__social-text"><?php _e('Volg ons', 'openup'); ?></span>
                    </li>
                    <?php if (have_rows('footer_social', 'option')): ?>
                        <?php while (have_rows('footer_social', 'option')): the_row();
                            $image = get_sub_field('footer_social_icon');
                            $link = get_sub_field('footer_social_link');
                            $share_class = get_sub_field('share_class');
                            ?>
                            <li class="o-footer__social-item">
                                <a class="o-footer__social-link d-flex align-items-center flex-column flex-md-row"
                                   href="<?php echo $link['url']; ?>">
                            <span class="o-footer__social-icon-wrapper d-flex align-items-center justify-content-center">
                                <?php echo wp_get_attachment_image($image['ID'],'full') ?>
                            </span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <li class="o-footer__social-item d-none d-md-flex align-items-center">
                        <span class="o-footer__social-text"><?php _e('Sharing is caring') ?></span>
                    </li>
                </ul>
                <div class="d-flex justify-content-center d-md-none">
                    <span class="o-footer__social-text d-inline-block"><?php _e('Volg ons.', 'openup'); ?></span>
                    <span class="o-footer__social-text d-inline-block"><?php _e('Sharing is caring.') ?></span>
                </div>
            </div>
        </div>
    </div>
</div>