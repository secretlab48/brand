<?php
global $post;

$section_title = get_field('consult_active_teams');

$teams_args = array(
    'post_type' => 'team',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key' => 'team_active',
            'value' => '1',
        )
    )
);

$teams_query = new WP_Query($teams_args);

$list_teams = $teams_query->get_posts(); ?>

<section class="s-popup" id="step6">
    <div class="container">
        <div class="row justify-content-center align-items-center flex-column">
            <div class="col-12">
                <header class="s-popup__header d-flex justify-content-center">
                    <a href="#"
                       class="s-popup__link-back d-flex justify-content-center justify-content-md-start align-items-center u-color-primary-dark-blue">
                        <svg class="icon">
                            <use xlink:href="#icon-angle-left"></use>
                        </svg>
                        <span class="d-none d-md-inline-block"><?php _e('Terug', 'openup'); ?></span>
                    </a>
                    <div class="s-popup__logo-wrapper d-flex align-items-center">
                        <?php the_custom_logo(); ?>
                    </div>
                </header>
            </div>
            <div class="col-12 col-md-6">
                <div class="s-popup__intro">
                    <div class="c-intro text-center u-color-primary-dark-blue">
                        <?php if ($section_title): ?>
                            <h2 class="c-intro__title">
                                <?php echo $section_title ?>
                            </h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <?php if ($list_teams) : ?>
                    <div class="c-blog-filter JS-blog-filter JS-blog-filter--teams u-bg-primary-skin u-bg-primary-skin u-color-primary-dark-blue"
                         id="close-tag1">
                        <span class="c-blog-filter__main u-bg-primary-skin">
                            <span class="c-blog-filter__main-text"><?php _e('Selecteer uit lijst', 'openup'); ?></span>
                            <svg class="icon">
                                <use xlink:href="#icon-chevron-down"></use>
                            </svg>
                        </span>
                        <div class="c-blog-filter__list-wrap u-bg-primary-skin">
                            <ul class="c-blog-filter__list">
                                <li class="c-blog-filter__list-item JS-team-filter-item">
                                    <a class="u-color-primary-dark-blue"
                                    href="<?php echo home_url(); ?>">
                                        <?php _e('Selecteer uit lijst', 'openup'); ?>
                                    </a>
                                </li>
                                <?php foreach ($list_teams as $team) : ?>
                                    <li class="c-blog-filter__list-item JS-team-filter-item">
                                        <a data-team-id="<?= $team->ID ?>"
                                        class=" u-color-primary-dark-blue"
                                        href="javascript:void(0);">
                                            <?php echo $team->post_title;?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-12">
                <div class="s-team-list__container justify-content-left align-items-stretch flex-wrap d-md-flex JS-team-filter">
                    <?php if ($teams_query->have_posts()) : ?>
                        <?php while ($teams_query->have_posts()) : $teams_query->the_post(); ?>
                            <?php get_template_part('template-parts/components/team-card'); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
