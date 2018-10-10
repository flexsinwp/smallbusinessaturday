<article class="<?php echo esc_attr($item_classes) ?>">
	<div class="eltd-mg-content">
		<?php if (has_post_thumbnail()) { ?>
			<div class="eltd-mg-image">
				<div class="eltd-mg-image-overlay" style="background-image:url(<?php echo esc_url($background_image_url); ?>)"></div>
				<?php the_post_thumbnail(); ?>
			</div>
		<?php } ?>
		<div class="eltd-mg-item-outer">
			<div class="eltd-mg-item-inner">
				<div class="eltd-mg-item-content">
					<?php if(!empty($item_image)) { ?>
						<img itemprop="image" class="eltd-mg-item-icon" src="<?php echo esc_url($item_image['url'])?>" alt="<?php echo esc_attr($item_image['alt']); ?>" />
					<?php } ?>
					<?php if (!empty($item_title)) { ?>
						<<?php echo esc_attr($item_title_tag); ?> itemprop="name" class="eltd-mg-item-title entry-title"><?php echo esc_html($item_title); ?></<?php echo esc_attr($item_title_tag); ?>>
					<?php } ?>
					<?php if (!empty($item_text)) { ?>
						<p class="eltd-mg-item-text"><?php echo esc_html($item_text); ?></p>
					<?php } ?>
				</div>
				<?php if (!empty($item_link)) { ?>
					<a itemprop="url" href="<?php echo esc_url($item_link); ?>" target="<?php echo esc_attr($item_link_target); ?>" class="eltd-mg-item-link"></a>
				<?php } ?>
			</div>
		</div>
	</div>
</article>
