<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="eltd-post-content">
        <div class="eltd-post-heading">
            <?php findme_elated_get_module_template_part('templates/parts/post-type/gallery', 'blog', '', $part_params); ?>
        </div>
        <div class="eltd-post-text">
            <div class="eltd-post-text-inner">
                <div class="eltd-post-info eltd-post-info-top">
                    <?php findme_elated_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params); ?>
                </div>
                <div class="eltd-post-text-main">
                    <?php findme_elated_get_module_template_part('templates/parts/title', 'blog', '', $part_params); ?>
                    <?php the_content(); ?>
                    <?php do_action('findme_elated_single_link_pages'); ?>
                </div>
                <div class="eltd-post-info-bottom clearfix">
                    <div class="eltd-post-info eltd-post-info-bottom-left">
                        <?php findme_elated_get_module_template_part('templates/parts/post-info/author', 'blog', '', $part_params); ?>
                        <?php findme_elated_get_module_template_part('templates/parts/post-info/date', 'blog', '', $part_params); ?>
                        <?php findme_elated_get_module_template_part('templates/parts/post-info/comments', 'blog', '', $part_params); ?>
                        <?php findme_elated_get_module_template_part('templates/parts/post-info/share', 'blog', '', $part_params); ?>
                    </div>
                    <div class="eltd-post-info eltd-post-info-bottom-right">
                        <?php findme_elated_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>