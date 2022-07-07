<div class="eltd-footer-bottom-holder">
	<div class="eltd-footer-bottom-inner <?php echo esc_attr($footer_bottom_grid_class); ?>">
		<div class="eltd-grid-row <?php echo esc_attr($footer_bottom_classes); ?>">
			<?php for($i = 1; $i <= $footer_bottom_columns; $i++) { ?>
				<div class="eltd-grid-col-<?php echo esc_attr(12 / $footer_bottom_columns); ?>">
					<?php
					if(is_active_sidebar('footer_bottom_column_'.$i)) {
						dynamic_sidebar('footer_bottom_column_'.$i);
					}
					?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>