<?php

if (!defined('ABSPATH')) exit;

?>
<div class="o-footer__middle">
    <div class="container">
        <div class="row">
            <div class="middle-footer-1">
                <?php
                if (is_active_sidebar('footer-1')) {
                    dynamic_sidebar('footer-1');
                }
                ?>
            </div>
            <div class="col middle-footer-2">
                <div>
                    <?php
                    if (is_active_sidebar('footer-2')) {
                        dynamic_sidebar('footer-2');
                    }
                    openup_render_footer_widget();
                    ?>
                </div>
            </div>
            <div class="col middle-footer-3">
                <div>
                    <?php
                        get_template_part('template-parts/components/newsletter-code-en');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>