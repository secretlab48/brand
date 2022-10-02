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

$form_shortcode = get_sub_field('form_post_shortcode');
$form_css_class = get_sub_field('form_post_css_class');
?>

<?php if ( ! empty( $form_shortcode ) ) : ?>
    <section class="s-one-column <?= $form_css_class ?>">
        <div class="ac-form-box">
            <?php echo do_shortcode( $form_shortcode ); ?>
        </div>
    </section>

<?php endif; ?>