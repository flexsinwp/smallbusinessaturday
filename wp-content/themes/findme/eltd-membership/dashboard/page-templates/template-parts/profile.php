<div class="eltd-membership-dashboard-page">
    <h2 class="eltd-membership-dashboard-page-title eltd-main-title">
		<?php esc_html_e( 'Profile', 'eltd-membership' ); ?>
    </h2>
	<div class="eltd-membership-dashboard-page-content">
        <div class="eltd-membership-dashboard-image-holder eltd-membership-left">
			<?php echo eltd_membership_kses_img( $profile_image ); ?>
            <p class="eltd-image-info"> <?php esc_html_e( 'You are currently signed in as', 'eltd-membership' ); ?> <span><?php echo esc_attr( $user_login ); ?></span></p>
			<?php
			echo findme_elated_get_button_html( array(
				'text'      => esc_html__( 'Sign out', 'findme' ),
				'html_type' => 'anchor',
				'size' => 'small',
				'link' => apply_filters( 'submit_job_form_logout_url', wp_logout_url( get_permalink() )),
			) );
			?>
        </div>
        <div class="eltd-membership-dashboard-profile-content eltd-membership-right">
            <?php if ($first_name !== ''){ ?>
                <p>
                    <span><?php //esc_html_e( 'First Name', 'eltd-membership' ); ?></span>
                    <?php echo "<h2>". esc_attr($first_name);
                         echo esc_attr($last_name)."</h2>";
                         
                         echo esc_attr($email)."|". esc_attr($website);
                     ?>
                </p>
                <hr>

            <?php } ?>
             <?php if ($description !== ''){ ?>
                <p class="eltd-membership-desc">
                    <span><?php esc_html_e( 'Description', 'eltd-membership' ); ?></span>
                    <?php  echo esc_attr($description); ?>
                </p>
            <?php } ?>
            <hr>
            <h3>My Top Listing</h3>
  <ul>
 <?php
if ( is_user_logged_in() ):
    ?>

    <?php
echo do_shortcode('[eltd_listing_list listing_list_skin="light" listing_type="job_listing"  listing_list_number="3" listing_list_columns="three"]');

else :

    echo "not logged in";

endif;
/*
    if ( is_user_logged_in() ):


    global $current_user;
    wp_get_current_user();
    $author_query = array( 'post_type'=>'job_listing' ,'orderby'=>'meta_value_num','posts_per_page' => '3','author' => $current_user->ID);
    $author_posts = new WP_Query($author_query);
    while($author_posts->have_posts()) : $author_posts->the_post();
    ?>
        <li>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(array(250,250)); ?>
        <br>
        <?php the_title();

     ?>

      
    
      </a>

     
     
     </li>      
    <?php           
    endwhile;

else :

    echo "not logged in";

endif;
*/
   ?>
</ul>



             <?php if ($email !== ''){ ?>
                <p>
                    <span><?php //esc_html_e( 'Email', 'eltd-membership' ); ?></span>
                    <?php  //echo esc_attr($email); ?>
                </p>
            <?php } ?>


            <?php if ($last_name !== ''){ ?>
                <p>
                    <span><?php // esc_html_e( 'Last Name', 'eltd-membership' ); ?></span>
                    <?php //echo esc_attr($last_name); ?>
                </p>
            <?php } ?>
            <?php // if ($email !== ''){ ?>
                <p>
                    <span><?php //esc_html_e( 'Email', 'eltd-membership' ); ?></span>
                    <?php // echo esc_attr($email); ?>
                </p>
            <?php //} ?>
            <?php if ($website !== ''){ ?>
                <p>
                    <span><?php // esc_html_e( 'Website', 'eltd-membership' ); ?></span>
                    <a href="<?php // echo esc_url( $website ); ?>" target="_blank"><?php //echo esc_attr($website); ?></a>
                </p>
            <?php } ?>
            <?php if ($description !== ''){ ?>
                <p class="eltd-membership-desc">
                    <span><?php // esc_html_e( 'Description', 'eltd-membership' ); ?></span>
                    <?php // echo esc_attr($description); ?>
                </p>
            <?php } ?>
            
        </div>
	</div>
</div>
