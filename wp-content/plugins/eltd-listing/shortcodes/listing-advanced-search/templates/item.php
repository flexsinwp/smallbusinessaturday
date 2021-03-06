<?php
	$this_object = eltd_listing_adv_search_class_instance();
?>
<article class="eltd-ls-item">

    <?php if(has_post_thumbnail()) { ?>

        <div class="eltd-ls-item-image">
            <?php
            if($cat_html !== ''){
                echo wp_kses_post($cat_html);
            }
            ?>

            <a href="<?php echo get_the_permalink(); ?>">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
            </a>
        </div>

    <?php } ?>

    <div class="eltd-ls-item-inner">

        <div class="eltd-ls-item-title">
            <h3 class="eltd-listing-title">
                <a href="<?php echo get_the_permalink(); ?>">
                    <?php echo get_the_title(); ?>
                </a>
            </h3>
        </div>

        <?php if($address_html !== ''){ ?>

            <div class="eltd-ls-item-address">
                <?php echo wp_kses_post($address_html); ?>
            </div>

        <?php }

        if($rating_html !== ''){ ?>
            <div class="eltd-ls-item-content">
                <?php
                echo  wp_kses_post($rating_html);
                ?>
            </div>
        <?php } ?>

    </div>

</article>