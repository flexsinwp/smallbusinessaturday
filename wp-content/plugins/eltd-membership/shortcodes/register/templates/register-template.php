<div class="eltd-social-register-holder">
	<div class="eltd-social-register-holder-inner">

		<form method="post" class="eltd-register-form">
			<fieldset>
				<div>
                    <input type="text" name="user_register_name" id="user_register_name"
                           placeholder="<?php esc_html_e( 'Your Name*', 'eltd-membership' ) ?>" value="" required
                           pattern=".{3,}"
                           title="<?php esc_html_e( 'Three or more characters', 'eltd-membership' ); ?>"/>
                </div>
                <div>
                    <input type="email" name="user_register_email" id="user_register_email"
                           placeholder="<?php esc_html_e( 'Your E-mail Address*', 'eltd-membership' ) ?>" value="" required/>
                </div>
                <div>
                    <input type="password" name="user_register_password" id="user_register_password" placeholder="<?php esc_html_e('Choose a secured password*','eltd_membership') ?>" value="" required />
                </div>
                <div>
                    <input type="password" name="user_register_confirm_password" id="user_register_confirm_password" placeholder="<?php esc_html_e('Repeat Password*','eltd_membership') ?>" value="" required />
                </div>
				<div class="eltd-register-button-holder">
					<?php
					if ( eltd_membership_theme_installed() ) {
						echo findme_elated_get_button_html( array(
							'html_type' => 'button',
							'text'      => esc_html__( 'Create a New Account', 'eltd-membership' ),
							'type'      => 'solid',
                            'fullwidth' => 'yes'
						) );
					} else {
						echo '<button type="submit">' . esc_html__( 'Register', 'eltd-membership' ) . '</button>';
					}
					wp_nonce_field( 'eltd-ajax-register-nonce', 'eltd-register-security' ); ?>
				</div>
			</fieldset>
		</form>
	</div>
	<?php
	if ( eltd_membership_theme_installed() ) {
		$social_login_enabled = findme_elated_options()->getOptionValue( 'enable_social_login' ) == 'yes' ? true : false;
		if ( $social_login_enabled ) { ?>
			<div class="eltd-login-form-social-login">
				<div
					class="eltd-login-social-title"><?php esc_html_e( 'Or Connect with Social Networks', 'eltd-membership' ); ?></div>
				<?php
				do_action( 'eltd_membership_social_network_login' );
				?>
			</div>
		<?php }
	}
	do_action( 'eltd_membership_action_login_ajax_response' );
	?>

    <?php $eltd_terms_link = findme_elated_options()->getOptionValue('listing_item_terms_link');
    ?>
    <div class="eltd-register-terms-holder">
        <span>
            By creating an account you are accepting our <a href="<?php echo wp_kses_post($eltd_terms_link)?>" >Terms & Conditions</a>
        </span>
    </div>

</div>