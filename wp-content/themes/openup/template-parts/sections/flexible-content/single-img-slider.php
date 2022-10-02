<?php
$infinitySlider = get_sub_field('slider_full_page_infinity');
$infinityClass = '';
if($infinitySlider){
    $infinityClass = 'slider-infinity';
}
?>

    <section class="s-single-img">
        
        <?php if (have_rows('single_img_slider_repeater')): ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="s-single-img__slider JS-single-image <?php echo $infinityClass; ?>">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php while (have_rows('single_img_slider_repeater')): the_row();
                                    $image = get_sub_field('image');
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="s-single-img__slide">
                                            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="c-slider__nav d-flex justify-content-between align-items-center">
                            <div class="c-slider__nav-button c-slider__nav-button--prev">
                                <a href="#" class="c-btn-round c-btn-round--prev c-btn-primary--white">
                                    <svg class="icon">
                                        <use xlink:href="#icon-angle-left"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="c-slider__nav-button c-slider__nav-button--next">
                                <a href="#" class="c-btn-round c-btn-round--next c-btn-primary--white">
                                    <svg class="icon">
                                        <use xlink:href="#icon-angle-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>

