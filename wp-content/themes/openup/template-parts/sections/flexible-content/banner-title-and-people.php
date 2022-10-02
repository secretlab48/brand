<?php

//ACF vars
$noticeBoardTitle = get_sub_field('section_title_and_people_title');
$btn_type = get_sub_field( 'type_of_button' );
if ( $btn_type == 'link' ) {
    $noticeBoardBtn = get_sub_field('section_title_and_people_btn');
}
else {
    $noticeBoardBtn = [ 'title' => __( 'got to Job Section', 'openup' ), 'url' => '#department-no-department' ];
}

$noticeBoardDescription = get_sub_field('section_title_and_people_desc');
$noticeBoardImageM = get_sub_field('section_title_and_people_man');
$noticeBoardImageW = get_sub_field('section_title_and_people_woman');
?>

<section class="o-notice-board">
    <div class="o-notice-board__banner">
        <div class="o-notice-board__img">
            <?php echo wp_get_attachment_image($noticeBoardImageW['ID'], 'full', "", array("class" => "notice-board-img--people")) ?>
        </div>
        <div class="o-notice-board__img">
            <?php echo wp_get_attachment_image($noticeBoardImageM['ID'], 'full', "", array("class" => "notice-board-img--people")) ?>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 col-lg-7">
                    <h1 class="o-notice-board__title"><?php echo $noticeBoardTitle; ?></h1>
                    <div class="o-notice-board__btn">
                        <a class="c-btn c-btn-primary--blue" href="<?php echo $noticeBoardBtn[ 'url' ]; ?>">
                            <?php echo $noticeBoardBtn[ 'title' ]; ?></a>
                    </div>
                    <div class="o-notice-board__description">
                        <?php echo $noticeBoardDescription; ?>
                    </div>
                </div>
            </div>
        </div>
        <picture>
            <source srcset="/wp-content/themes/openup/img/global/circle-lightgreen-mob.svg" media="(max-width: 575px)">
            <img class="o-notice-board-circle o-notice-board-circle__lightgreen"
                 src="/wp-content/themes/openup/img/global/circle-lightgreen.svg" alt="background-lightgreen">
        </picture>
        <picture>
            <source srcset="/wp-content/themes/openup/img/global/circle-green-mob.svg" media="(max-width: 575px)">
            <img class="o-notice-board-circle o-notice-board-circle__green"
                 src="/wp-content/themes/openup/img/global/circle-green.svg" alt="background-green">
        </picture>
    </div>
</section>
