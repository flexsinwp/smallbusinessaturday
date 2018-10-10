<?php
get_header();
findme_elated_get_title(); ?>
<div class="eltd-container eltd-default-page-template">
	<?php do_action('findme_elated_after_container_open'); ?>
	<div class="eltd-container-inner clearfix">
		<?php
			$eltd_taxonomy_id = get_queried_object_id();
			$eltd_taxonomy = !empty($eltd_taxonomy_id) ? get_category($eltd_taxonomy_id) : '';
			$eltd_taxonomy_slug = !empty($eltd_taxonomy) ? $eltd_taxonomy->slug : '';
			$eltd_taxonomy_name = !empty($eltd_taxonomy) ? $eltd_taxonomy->taxonomy : '';
		
			eltd_core_get_archive_portfolio_list($eltd_taxonomy_slug, $eltd_taxonomy_name);
		?>
	</div>
	<?php do_action('findme_elated_before_container_close'); ?>
</div>
<?php get_footer(); ?>
