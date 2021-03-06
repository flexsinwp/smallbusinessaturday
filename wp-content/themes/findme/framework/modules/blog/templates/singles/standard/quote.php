<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="eltd-post-content">
        <div class="eltd-post-text">
            <?php findme_elated_get_module_template_part('templates/parts/image', 'blog', '', $part_params); ?>
            <div class="eltd-post-text-inner">
                <div class="eltd-post-text-main">
                    <?php findme_elated_get_module_template_part('templates/parts/post-type/quote', 'blog', '', $part_params); ?>
                    <div class="eltd-post-info-top">
                        <?php findme_elated_get_module_template_part('templates/parts/post-info/date', 'blog', '', $part_params); ?>
                        <?php findme_elated_get_module_template_part('templates/parts/post-info/category', 'blog', 'single', $part_params); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="eltd-post-additional-content">
            <?php the_content(); ?>
        </div>
        <div class="eltd-post-info-bottom clearfix">
            <div class="eltd-post-info-bottom-left">
                <?php findme_elated_get_module_template_part('templates/parts/post-info/tags', 'blog', '', $part_params); ?>
            </div>
            <div class="eltd-post-info-bottom-right">
                <?php findme_elated_get_module_template_part('templates/parts/single/share', 'blog', '', $part_params); ?>
            </div>
        </div>
    </div>
</article>