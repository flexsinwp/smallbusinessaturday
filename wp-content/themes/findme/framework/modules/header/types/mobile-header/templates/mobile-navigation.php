<?php do_action('findme_elated_before_mobile_navigation'); ?>

<nav class="eltd-mobile-nav">
    <div class="eltd-grid">
        <?php wp_nav_menu(array(
            'theme_location' => 'mobile-navigation' ,
            'container'  => '',
            'container_class' => '',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => 'top_navigation_fallback',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new FindmeElatedMobileNavigationWalker()
        )); ?>
    </div>
</nav>

<?php do_action('findme_elated_after_mobile_navigation'); ?>