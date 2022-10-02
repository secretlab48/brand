<?php

add_action('wp_ajax_jobs_filter', 'jobs_filter');
add_action('wp_ajax_nopriv_jobs_filter', 'jobs_filter');

function jobs_filter()
{

    global $post, $wpdb;

    $post_id = $_POST['post_id'];
    $location = $_POST['location'];
    $department = $_POST['department'];
    $token = $_POST['token'];
    $post = get_post( $post_id );

    $jobsBoardData = new Jobs($token);
    $jobsBoard = $jobsBoardData->boardData;
    $jobsVacancy = $jobsBoardData->jobVacancy;
    $custom_fields = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE post_id = $post->ID AND meta_key REGEXP '^flexible_content_page.+job_board_custom_item';", ARRAY_A);
    $custom_data = [];
    foreach( $custom_fields as $custom_field ) {
        preg_match( '/flexible_content_page_\d+_job_board_custom_items_(\d+)_(job_board_custom_.+)/', $custom_field[ 'meta_key' ], $name );
        if ( is_array( $name ) && count( $name ) > 0 ) {
            $i = $name[1];
            $title = $name[2];
            $custom_data[ $i ][ $title ] = $custom_field[ 'meta_value' ];
        }
    }
    $custom_jobs = [];
    $custom_items = $custom_data;
    foreach ( $custom_items as $custom_item ) {
        $custom_jobs[] = [
            'absolute_url' => $custom_item[ 'job_board_custom_link' ],
            'title' => $custom_item[ 'job_board_custom_title' ],
            'location' => [ 'name' => $custom_item[ 'job_board_custom_location' ] ],
            'department' => $custom_item[ 'job_board_custom_department' ]
        ];
    }


    if ($location !== 'all' && !empty($location) && $department== 'all' || $department == NULL):
        ?>
        <div class="row c-job-card__container">
            <div class="col-lg-2">
                <div class="s-job-board__profession">
                    <h6 class="u-color-primary-dark-blue text-center text-lg-left"><?php echo $location ?></h6>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="c-job-card__wrap">
                    <?php
                    $jobsVacancy = array_merge( $jobsVacancy, $custom_jobs );
                    foreach ($jobsVacancy as $job) :
                        $job_location = $job['location']['name'];
                        if ($job_location == $location):
                            ?>
                            <div class="c-job-card u-bg-primary-white">
                                <div class="c-job-card__info">
                                    <h5 class="c-job-card__title u-color-primary-dark-blue"><?php echo $job['title']; ?></h5>
                                    <div class="c-job-card__location">
                                        <span class="c-job-card__text u-color-primary-dark-blue"><?php echo $job['retention_period'] ?></span>
                                        <span class="c-job-card__text u-color-primary-dark-blue"><?php echo $location ?></span>
                                    </div>
                                </div>
                                <div class="c-job-card__btn">
                                    <a class="c-btn c-btn-primary--blue"
                                       href="<?php echo $job['absolute_url']; ?>">Details
                                        <svg class="icon">
                                            <use xlink:href="#icon-arrow-team"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php elseif ($department !== 'all' && !empty($department) && $location == 'all' || $location == NULL): ?>
        <div class="row c-job-card__container">
            <div class="col-lg-2">
                <div class="s-job-board__profession">
                    <h6 class="u-color-primary-dark-blue text-center text-lg-left"><?php echo $department ?></h6>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="c-job-card__wrap">
                    <?php
                        foreach ($jobsBoard['departments'] as $job_department) {
                            if ($job_department['name'] == $department) {
                                foreach ($custom_jobs as $custom_job) {
                                    if ($custom_job['department'] == $job_department['name']) {
                                        $job_department['jobs'][] = [
                                            'absolute_url' => $custom_job['absolute_url'],
                                            'title' => $custom_job['title'],
                                            'location' => [ 'name' => '333' ]
                                        ];
                                    }
                                }
                            }
                        }
                    ?>
                    <?php foreach ($jobsBoard['departments'] as $job_department) :
                        if ($job_department['name'] == $department):
                            foreach ($custom_jobs as $custom_job) {
                                if ($custom_job['department'] == $job_department['name']) {
                                    $job_department['jobs'][] = [
                                        'absolute_url' => $custom_job['absolute_url'],
                                        'title' => $custom_job['title'],
                                        'location' => [ 'name' => $custom_job[ 'location' ][ 'name' ] ]
                                    ];
                                }
                            }
                            foreach ($job_department['jobs'] as $job):
                                ?>
                                <div class="c-job-card u-bg-primary-white">
                                    <div class="c-job-card__info">
                                        <h5 class="c-job-card__title u-color-primary-dark-blue"><?php echo $job['title']; ?></h5>
                                        <div class="c-job-card__location">
                                            <span class="c-job-card__text u-color-primary-dark-blue"><?php echo $job['retention_period'] ?></span>
                                            <span class="c-job-card__text u-color-primary-dark-blue"><?php echo $job['location']['name']; ?></span>
                                        </div>
                                    </div>
                                    <div class="c-job-card__btn">
                                        <a class="c-btn c-btn-primary--blue"
                                           href="<?php echo $job['absolute_url']; ?>">
                                            <?php echo __('Details', 'openup'); ?>
                                            <svg class="icon">
                                                <use xlink:href="#icon-arrow-team"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    <?php elseif ($department !== 'all'): ?>

    <?php endif; ?>

    <?php wp_die();
}