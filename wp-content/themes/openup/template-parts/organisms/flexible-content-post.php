<?php
while (have_rows('flexible_content_post')) : the_row();

    if (get_row_layout() == 'section_image')
        get_template_part('template-parts/sections/flexible-content-post/section-image');

    if (get_row_layout() == 'section_text_content')
        get_template_part('template-parts/sections/flexible-content-post/section-text-content');

    if (get_row_layout() == 'section_slider')
        get_template_part('template-parts/sections/flexible-content-post/section-slider');

    if (get_row_layout() == 'post_video_section')
        get_template_part('template-parts/sections/flexible-content-post/post-video');

    if( get_row_layout() == 'spacer' )
        get_template_part('template-parts/components/spacer');

    if (get_row_layout() == 'section_post_form_renderer')
        get_template_part('template-parts/sections/flexible-content-post/section-post-form-renderer');

endwhile;