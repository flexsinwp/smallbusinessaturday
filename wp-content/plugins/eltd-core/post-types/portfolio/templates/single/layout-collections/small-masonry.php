<?php
$masonry_classes = '';
$number_of_columns = findme_elated_get_meta_field_intersect('portfolio_single_masonry_columns_number');
if(!empty($number_of_columns)) {
	$masonry_classes .= ' eltd-ps-'.$number_of_columns.'-columns';
}
$space_between_items = findme_elated_get_meta_field_intersect('portfolio_single_masonry_space_between_items');
if(!empty($space_between_items)) {
	$masonry_classes .= ' eltd-ps-'.$space_between_items.'-space';
}
?>
<div class="eltd-grid-row">
	<div class="eltd-grid-col-8">
		<div class="eltd-ps-image-holder eltd-ps-masonry-images <?php echo esc_attr($masonry_classes); ?>">
			<div class="eltd-ps-image-inner">
				<div class="eltd-ps-grid-sizer"></div>
				<div class="eltd-ps-grid-gutter"></div>
				<?php
				$media = eltd_core_get_portfolio_single_media();
				
				if(is_array($media) && count($media)) : ?>
					<?php foreach($media as $single_media) : ?>
						<div class="eltd-ps-image <?php echo esc_attr($single_media['holder_classes']); ?>">
							<?php eltd_core_get_portfolio_single_media_html($single_media); ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="eltd-grid-col-4">
		<div class="eltd-ps-info-holder eltd-ps-info-sticky-holder">
			<?php
			//get portfolio content section
			eltd_core_get_cpt_single_module_template_part('templates/single/parts/content', 'portfolio', $item_layout);
			
			//get portfolio custom fields section
			eltd_core_get_cpt_single_module_template_part('templates/single/parts/custom-fields', 'portfolio', $item_layout);
			
			//get portfolio categories section
			eltd_core_get_cpt_single_module_template_part('templates/single/parts/categories', 'portfolio', $item_layout);
			
			//get portfolio date section
			eltd_core_get_cpt_single_module_template_part('templates/single/parts/date', 'portfolio', $item_layout);
			
			//get portfolio tags section
			eltd_core_get_cpt_single_module_template_part('templates/single/parts/tags', 'portfolio', $item_layout);
			
			//get portfolio share section
			eltd_core_get_cpt_single_module_template_part('templates/single/parts/social', 'portfolio', $item_layout);
			?>
		</div>
	</div>
</div>