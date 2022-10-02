<?php
global $post;
$page_id = get_queried_object_id();

$last_post_arg = [
    'post_type' => array('post', 'thema'),
    'posts_per_page' => 1,
];

$last_post_query = new WP_Query($last_post_arg);

//ACF
$blog_post = get_field('blog_page_post_section', 'option');
?>

<section class="s-last-post u-color-primary-white s-wave s-wave--primary-green">
    <div class="s-wave__inner-wrapper">
        <svg class="s-wave__icon icon-bottom">
            <use xlink:href="#wave-bottom-type-3"></use>
        </svg>
    </div>

    <div class="container">
        <div class="row justify-content-md-between align-items-center">
            <?php if ($blog_post): ?>
                <?php foreach ($blog_post as $post_item):
                    //$post_id = apply_filters( 'wpml_object_id', $post_item->ID, 'post' );
                    $permalink = get_the_permalink($post_item->ID);
                    $title = get_the_title($post_item->ID);
                    $image = get_the_post_thumbnail($post_item->ID);
                    $read_time = get_field('advanced_post_option_read_time', $post_item->ID);
                    $small_description = get_field('advanced_post_option_small_description', $post_item->ID);
                    $authors = get_the_terms($post_item->ID, 'author-taxonomy');
                    $thema_tax = wp_get_post_terms($post_item->ID, 'thema_areas-taxonomy', array('fields' => 'names'));
                    ?>
                    <?php if ($image): ?>
                    <div class="col-md-5 col-lg-4 order-2 order-md-0 text-center">
                        <a href="<?php echo $permalink ?>" class="s-last-post__media-img">
                            <?php echo $image ?>
                        </a>
                    </div>
                <?php endif; ?>

                    <div class="col-md-7">
                        <?php if ($title): ?>
                            <a href="<?php echo $permalink ?>" class="s-last-post__title"><?php echo $title ?></a>
                        <?php endif; ?>
                        <div class="s-last-post__meta-wrapper">
                            <ul class="c-meta-list d-flex align-items-center flex-wrap">
                                <!--<li class="c-meta-list__item d-flex align-items-center">
                                    <svg class="icon">
                                        <use xlink:href="#icon-calendar"></use>
                                    </svg>
                                    <span class="c-meta-list__text">
                                        <?php /*the_date('d M Y');*/ ?>
                                    </span>
                                </li>-->
                                <?php if ($read_time) : ?>
                                    <li class="c-meta-list__item d-flex align-items-center">
                                        <svg class="icon">
                                            <use xlink:href="#icon-watch"></use>
                                        </svg>
                                        <span class="c-meta-list__text">
                                        <?php echo $read_time ?>
                                    </span>
                                    </li>
                                <?php endif; ?>
                                <?php if ($authors) : ?>
                                    <li class="c-meta-list__item c-meta-list__item--author d-flex align-items-center">
                                        <svg class="icon">
                                            <use xlink:href="#icon-edit"></use>
                                        </svg>
                                        <span class="c-meta-list__text">
                                        <?php echo $authors[0]->name; ?>
                                    </span>
                                    </li>
                                <?php endif; ?>
                                <?php if ($thema_tax): ?>
                                    <li class="c-meta-list__item-wrapper u-grad-primary-green">
                                        <div class="c-meta-list__item c-meta-list__item--tag d-flex align-items-center">
                                            <svg class="icon">
                                                <use xlink:href="#icon-tag"></use>
                                            </svg>
                                            <?php foreach ($thema_tax as $tax) : ?>
                                                <a href="<?php echo add_query_arg('themas', ( isset( $tax->slug ) ? $tax->slug : $tax ), get_post_type_archive_link('post')) ?>"
                                                   class="c-meta-list__text">
                                                    <?php echo $tax; ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php if ($permalink): ?>
                            <div class="s-last-post__link">
                                <a href="<?php echo $permalink ?>"
                                   class="c-btn-link c-btn-link--more c-btn-link--primary-white">
                                    <?php _e('Meer lezen', 'openup'); ?>
                                    <svg class="icon">
                                        <use xlink:href="#icon-arrow-team"></use>
                                    </svg>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <?php if ($last_post_query->have_posts()): ?>
                    <?php while ($last_post_query->have_posts()) : $last_post_query->the_post();
                        $last_post_id = apply_filters('wpml_object_id', $post->ID, 'post');
                        $permalink = get_permalink($last_post_id);
                        $image = get_the_post_thumbnail($last_post_id);
                        $title = get_the_title($last_post_id);
                        $read_time = get_field('advanced_post_option_read_time');
                        $small_description = get_field('advanced_post_option_small_description');
                        $authors = get_the_terms($last_post_id, 'author-taxonomy');
                        $thema_tax = wp_get_post_terms($last_post_id, 'thema_areas-taxonomy', array('fields' => 'names'));
                        ?>
                        <?php if ($image): ?>
                            <div class="col-md-5 col-lg-4 order-2 order-md-0 text-center">
                                <a href="<?php echo $permalink ?>" class="s-last-post__media-img">
                                    <?php echo $image ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="col-md-7">
                            <?php if ($title): ?>
                                <a href="<?php echo $permalink ?>" class="s-last-post__title"><?php echo $title ?></a>
                            <?php endif; ?>
                            <div class="s-last-post__meta-wrapper">
                                <ul class="c-meta-list d-flex align-items-center flex-wrap">
                                    <li class="c-meta-list__item d-flex align-items-center">
                                        <svg class="icon">
                                            <use xlink:href="#icon-calendar"></use>
                                        </svg>
                                        <span class="c-meta-list__text">
                                        <?php the_date('d M Y'); ?>
                                    </span>
                                    </li>
                                    <?php if ($read_time) : ?>
                                        <li class="c-meta-list__item d-flex align-items-center">
                                            <svg class="icon">
                                                <use xlink:href="#icon-watch"></use>
                                            </svg>
                                            <span class="c-meta-list__text">
                                                <?php echo $read_time ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( ! is_wp_error( $authors ) && is_array( $authors ) ) : ?>
                                        <li class="c-meta-list__item c-meta-list__item--author d-flex align-items-center">
                                            <svg class="icon">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                            <span class="c-meta-list__text">
                                                <?php echo $authors[0]->name; ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($thema_tax): ?>
                                        <li class="c-meta-list__item-wrapper u-grad-primary-green">
                                            <div class="c-meta-list__item d-flex align-items-center">
                                                <svg class="icon">
                                                    <use xlink:href="#icon-tag"></use>
                                                </svg>
                                                <?php foreach ($thema_tax as $tax) : ?>
                                                    <a href="<?php echo add_query_arg('themas', $tax->slug, get_post_type_archive_link('post')) ?>"
                                                       class="c-meta-list__text">
                                                        <?php echo $tax; ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php if ($permalink): ?>
                                <div class="s-last-post__link">
                                    <a href="<?php echo $permalink ?>"
                                       class="c-btn-link c-btn-link--more c-btn-link--primary-white">
                                        <?php echo __('Meer lezen ', 'openup'); ?>

                                        <svg class="icon">
                                            <use xlink:href="#icon-arrow-team"></use>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
