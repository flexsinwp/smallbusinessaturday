<div class="eltd-ls-single-section eltd-ls-single-content eltd-grid clearfix">

	<div class="eltd-ls-single-section-inner left">

		<?php

            echo eltd_listing_single_template_part('parts/content');

            echo "Hello";

            if( have_rows('amenities') ):

    // loop through the rows of data
    while ( have_rows('amenities') ) : the_row();

        // display a sub field value
       echo get_sub_field('amenity_text');

    endwhile;

else :

    // no rows found

endif;

            echo eltd_listing_single_template_part('parts/amenities');
            echo eltd_listing_single_template_part('parts/tags', '', $params);
            echo eltd_listing_single_template_part('parts/video', '', $params);
            echo eltd_listing_single_template_part('parts/comments');
        ?>
	</div>

	<div class="eltd-ls-single-section-inner right">
		<?php
            echo eltd_listing_single_template_part('parts/map', '', $params);
//            echo eltd_listing_single_template_part('parts/views', '', $params);
            echo eltd_listing_single_template_part('parts/booking', '', $params);
            echo eltd_listing_single_template_part('parts/enquiry', '', $params);
		?>
	</div>

</div>