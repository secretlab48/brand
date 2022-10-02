<?php
$title = get_sub_field('cta_download_section_title');
$type_of_link = get_sub_field('cta_download_section_type_of_link');
$section_link = get_sub_field('link_cta_download_section');
$file_download = get_sub_field('cta_download_section_download_file');
$download_link_title = get_sub_field('cta_download_section_link_title');
$img = get_sub_field('cta_download_section_image');

?>

<section class="s-two-column s-wave s-wave--primary-green">
    <div class="s-wave__inner-wrapper">
        <svg class="s-wave__icon s-wave__icon-type-2 icon-bottom">
            <use xlink:href="#wave-bottom-type-2"></use>
        </svg>
    </div>

    <div class="container">
        <div class="row justify-content-md-between">
            <div class="col-12 col-lg-4 order-2 order-lg-1">
                <div class="s-two-column__img-box text-left">
                    <?php if ($img): ?>
                        <img src="<?php echo $img['url']; ?>"
                             alt="<?php echo esc_attr($img['alt']); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-7 order-1 order-lg-2">
                <div class="c-intro u-color-primary-white">
                    <?php if ($title): ?>
                        <h2 class="c-intro__title">
                            <?php echo $title; ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (have_rows('cta_download_section_list')): ?>
                        <div class="c-intro__description">
                            <ul class="c-intro__list c-intro__list--check">
                                <?php while (have_rows('cta_download_section_list')) : the_row();
                                    $item = get_sub_field('cta_download_section_list_item'); ?>
                                    <li class="c-intro__list-item"><?php echo $item ?></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if ($type_of_link == 'link' && $section_link): ?>
                        <div class="c-intro__link">
                            <a class="c-btn c-btn-primary--blue"
                               href="<?php echo $section_link['url']; ?>">
                                <?php echo $section_link['title'] ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if ($type_of_link == 'download' && $download_link_title && $file_download): ?>
                        <div class="c-intro__link">
                            <a class="c-btn c-btn-primary--blue"
                               href="<?php echo $file_download['url']; ?>" download>
                                <?php echo $download_link_title ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>