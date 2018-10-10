<div id="job-manager-job-dashboard">
	<p><?php _e( 'Your listings are shown in the table below.', 'findme' ); ?></p>
	
  <ul>


<?php

if ( is_user_logged_in() ):
	?> <h3>Top Listing</h3> 
<?php
echo do_shortcode('[eltd_listing_list listing_list_skin="light" listing_type="job_listing"  listing_list_number="3" listing_list_columns="three"]');

else :

    echo "not logged in";

endif;

/*if ( is_user_logged_in() ): 
    global $current_user;
    wp_get_current_user();
    $author_query = array( 'post_type'=>'job_listing' ,'orderby'=>'meta_value_num','posts_per_page' => '3','author' => $current_user->ID);
    $author_posts = new WP_Query($author_query);
    if($author_posts->have_posts()):
    	?>  <h3>Top Listing</h3> <?php
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
    endif;
else :

    echo "not logged in";


endif;

*/

?>


</ul>
<h3>Your Listing</h3>
	<table class="job-manager-jobs">
		<thead>
			<tr>
				<?php foreach ( $job_dashboard_columns as $key => $column ) : ?>
					<th class="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $column ); ?></th>
				<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
			<?php if ( ! $jobs ) : ?>
				<tr>
					<td colspan="6"><?php _e( 'You do not have any active listings.', 'findme' ); ?></td>
				</tr>
			<?php else : ?>
				<?php foreach ( $jobs as $job ) : ?>
					<tr>
						<?php foreach ( $job_dashboard_columns as $key => $column ) : ?>
							<td class="<?php echo esc_attr( $key ); ?>">
								<?php if ('job_title' === $key ) : ?>
									<?php if ( $job->post_status == 'publish' ) : ?>
                                        <a href="<?php echo get_the_permalink($job->ID); ?>" class="eltd-user-listing-title-image" 
                                            <?php echo findme_elated_get_inline_style('background-image:url('.esc_url(get_the_post_thumbnail_url($job->ID)).')') ?>>
                                        </a>
                                <div class="eltd-user-listing-content-holder">
										<a href="<?php echo get_permalink( $job->ID ); ?>"><?php echo wp_kses_post($job->post_title); ?></a>
									<?php else : ?>
										<?php echo wp_kses_post($job->post_title); ?> <small>(<?php the_job_status( $job ); ?>)</small>
									<?php endif; ?>
									<ul class="job-dashboard-actions">
										<?php
											$actions = array();

											switch ( $job->post_status ) {
												case 'publish' :
													$actions['edit'] = array( 'label' => __( 'Edit', 'findme' ), 'nonce' => false );

													if ( is_position_filled( $job ) ) {
														$actions['mark_not_filled'] = array( 'label' => __( 'Mark not filled', 'findme' ), 'nonce' => true );
													} else {
														$actions['mark_filled'] = array( 'label' => __( 'Mark filled', 'findme' ), 'nonce' => true );
													}

													$actions['duplicate'] = array( 'label' => __( 'Duplicate', 'findme' ), 'nonce' => true );
													break;
												case 'expired' :
													if ( job_manager_get_permalink( 'submit_job_form' ) ) {
														$actions['relist'] = array( 'label' => __( 'Relist', 'findme' ), 'nonce' => true );
													}
													break;
												case 'pending_payment' :
												case 'pending' :
													if ( job_manager_user_can_edit_pending_submissions() ) {
														$actions['edit'] = array( 'label' => __( 'Edit', 'findme' ), 'nonce' => false );
													}
												break;
											}

											$actions['delete'] = array( 'label' => __( 'Delete', 'findme' ), 'nonce' => true );
											$actions           = apply_filters( 'job_manager_my_job_actions', $actions, $job );

											foreach ( $actions as $action => $value ) {
												$action_url = add_query_arg( array( 'action' => $action, 'job_id' => $job->ID ) );
												if ( $value['nonce'] ) {
													$action_url = wp_nonce_url( $action_url, 'job_manager_my_job_actions' );
												}
												echo '<li><a href="' . esc_url( $action_url ) . '" class="job-dashboard-action-' . esc_attr( $action ) . '">' . esc_html( $value['label'] ) . '</a></li>';
											}
										?>
									</ul>
                                        </div>
								<?php elseif ('date' === $key ) : ?>
									<?php echo date_i18n( get_option( 'date_format' ), strtotime( $job->post_date ) ); ?>
								<?php elseif ('expires' === $key ) : ?>
									<?php echo wp_kses_post($job->_job_expires) ? date_i18n( get_option( 'date_format' ), strtotime( $job->_job_expires ) ) : '&ndash;'; ?>
								<?php elseif ('filled' === $key ) : ?>
									<?php echo is_position_filled( $job ) ? '&#10004;' : '&ndash;'; ?>
								<?php else : ?>
									<?php do_action( 'job_manager_job_dashboard_column_' . $key, $job ); ?>
								<?php endif; ?>
							</td>
						<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<?php get_job_manager_template( 'pagination.php', array( 'max_num_pages' => $max_num_pages ) ); ?>
</div>
