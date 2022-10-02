<?php
$post_text = get_sub_field('post_text');

?>

<div class="c-post-text u-color-primary-dark-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <?php if ($post_text): ?>
                <div class="c-wysiwyg">
                    <?php echo $post_text ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>