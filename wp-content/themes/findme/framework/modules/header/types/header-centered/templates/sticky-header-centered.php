<?php do_action('findme_elated_after_sticky_header'); ?>

    <div class="eltd-sticky-header">
        <?php do_action('findme_elated_after_sticky_menu_html_open'); ?>
        <div class="eltd-sticky-holder">
        <?php if ($sticky_header_in_grid) : ?>
            <div class="eltd-grid">
        <?php endif; ?>
                <div class=" eltd-vertical-align-containers">
                    <div class="eltd-position-left">
                        <div class="eltd-position-left-inner">
                            <?php if (!$hide_logo) {
                                findme_elated_get_logo('sticky');
                            } ?>
                        </div>
                    </div>
                    <div class="eltd-position-right">
                        <div class="eltd-position-right-inner">
                            <?php findme_elated_get_sticky_menu('eltd-sticky-nav'); ?>
                        </div>
                    </div>
                </div>
        <?php if ($sticky_header_in_grid) : ?>
            </div>
        <?php endif; ?>
        </div>
    </div>

<?php do_action('findme_elated_after_sticky_header'); ?>