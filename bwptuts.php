<?php
if ( ! defined( 'ABSPATH' ) ) {exit;}
add_action('admin_menu', 'loan_sifter_rates_shortcode_create_menu');
function loan_sifter_rates_shortcode_create_menu() {
	//create new top-level menu
	//call register settings function
	add_action( 'admin_init', 'loan_sifter_rates_shortcode_plugin_settings' );
}
function loan_sifter_rates_shortcode_plugin_settings() {
	//register our settings
	register_setting( 'interactive-tuts-setting-group', 'your_site_url' );
}
function wp_interactive_tutorials_custom_menu_page(){
    //start wrap
    	echo '<div class="wrap">';
        echo '<h2>' . __( 'Interactive Tutorials', 'wp_interactive_tutorials' ) . '</h2>';
        ?>
        <div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">

				<!-- main content -->
				<div id="post-body-content">
					<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
								<?php echo __( 'Settings', 'mr-mortgage-wp' ); ?>
							</span></h2></div>
							<div class="inside">
								<form method="POST" action="options.php">
		    <?php settings_fields( 'interactive-tuts-setting-group' ); ?>
		    <?php do_settings_sections( 'interactive-tuts-setting-group' ); ?>
		    <p>
		    	Set the default dummy url. Example: YourSite.com
		    </p>
		        	<input type="text" name="your_site_url" size="40" value="<?php echo esc_attr( get_option('your_site_url') ); ?>" />
		        	</p>
		        	
		    <?php submit_button(); ?>
		</form>
		<p>
			If someone is not logged in, this is what the shortcode will output: <?php echo esc_attr( get_option('your_site_url') ); ?>/wp-admin
		</p>
		</div>
		<!-- .inside -->
		</div>
		<!-- .postbox -->
					<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
								<?php echo __( 'Shortcodes', 'wp_interactive_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
								<table class="widefat" cellspacing="0">
									<tbody>
									<tr class="alternate">
										<td class="row-title">
										<?php echo __( 'Register Shortcode: ', 'wp_interactive_tutorials' ); ?> 			
										<?php echo '[interactive_tuts-register before-registered-text="" register-text="" register-url="" other=""]';?>
										</td>
									</tr>
									<tr>
										<td class="row-title">
										<?php echo __( 'Interactive Tutorials Shortcode: ', 'wp_interactive_tutorials' ); ?> 						<?php echo '[interactive_tuts logged-in-text="" link="" logged-out-text=""]';?>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Registered Shortcode Parameters Defined', 'wp_interactive_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
								<p>
										<?php echo '<code>before-registered-text=""</code>'; ?> 			
										<?php echo __( 'The text displayed before the register text and url.', 'wp_interactive_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>register-text=""</code>'; ?> 			
										<?php echo __( 'The text used in the link, between the opening and closing < a> tags. Default text: Register', 'wp_interactive_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>register-url=""</code>'; ?> 			
										<?php echo __( 'The link to your login page. Like /wp-admin/, /wp-login.php/ or /your-login-url/. Default URL: /wp-admin/', 'wp_interactive_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>other=""</code>'; ?> 			
										<?php echo __( 'The text displayed after the register text and url.', 'wp_interactive_tutorials' );?>
								</p>
								<p>
										<?php echo '<b>Example</b>: <br>' . '<code>[interactive_tuts-register before-registered-text="Create a free profile on our site to link directly to your site. " register-text="Sign Up" register-url="/login" other=" for free."]</code>'; ?>
								</p>

								<p>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Interactive Tutorials Shortcode Parameters Defined', 'wp_interactive_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
										<?php echo '<code>logged-in-text=""</code>'; ?> 			
										<?php echo __( 'The text displayed to the user, when logged in, between the opening and closing < a> tags. ', 'wp_interactive_tutorials' );?>
								</p>
								<p>
										<?php echo '<code>link=""</code>'; ?> 			
										<?php echo __( 'The link you want your users to visit. Use /wp-admin/ to link inside the WordPress Dashboard.', 'wp_interactive_tutorials' );?>
								</p>

								<p>
										<?php echo '<b>Example</b>: <br>' . '<code>[interactive_tuts logged-in-text="Install Query All The Post Types" link="/wp-admin/plugin-install.php?s=query+all+the+post+types&tab=search&type=term"]</code>'; ?>
								</p>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Example Dummy Text', 'wp_interactive_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
							<p>
							<h3><?php echo __( 'To Use Dummy Text:', 'wp_interactive_tutorials' ); ?></h3>
								<ol>
									<li>
										<?php echo __( 'Create a new page or post. Perferrably a test page hidden from the public, or on a staging site.', 'wp_interactive_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'Copy and Paste Dummy Text.', 'wp_interactive_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'Publish post or page.', 'wp_interactive_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'View the post or page as a logged in user. Page should link to the site you defined in your user profile, followed by the link url you defined in the shortcode.', 'wp_interactive_tutorials' ); ?>
									</li>
									<li>
										<?php echo __( 'Log out of the site. View the post or page. Should only show the Register link, and your logged out text followed by the link you defined in the shortcode. ', 'wp_interactive_tutorials' ); ?>
									</li>
								</ol>
							</p>
							<p>
							<h3><?php echo __( 'Dummy Text', 'wp_interactive_tutorials' ); ?></h3>
							Lets Get Started. <br>[interactive_tuts-register before-registered-text="Create a free profile on our site to link directly to your site. " register-text="Sign Up" register-url="/login" other=" for free."]
<ol>
<li> [interactive_tuts logged-in-text="Login Here" link="/wp-admin" logged-out-text="Login to Youriste.com "]</li>
<li>[interactive_tuts logged-in-text="Install Query All The Post Types" logged-out-text="Visit Youriste.com " link="/wp-admin/plugin-install.php?s=query+all+the+post+types&tab=search&type=term"]. Click on Install & Activate button.</li>
<li>[interactive_tuts logged-in-text="Visit Settings Page" logged-out-text="Visit Youriste.com " link="/wp-admin/options-general.php?page=query_all_the_post_types" message=" to see the settings page."]</li>
</ol></p>
							</div>
							<!-- .inside -->
						</div>
						<!-- .postbox -->
					</div>
					<!-- .meta-box-sortables .ui-sortable -->
				</div>
				<!-- post-body-content -->

				<!-- sidebar -->
				<div id="postbox-container-1" class="postbox-container">
					<div class="meta-box-sortables">
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'About The Plugin', 'wp_interactive_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
							<p>
							<?php echo __( 'Interactive Tutorials is a plugin that helps your site link directly to a users WordPress website, with the help of shortcodes. A user registers for a free account on your site. The user enters in their website url into the standard WordPress user profile. Every time a user views one of your tutorials, using these shortcodes, the user will be linked directly to their site. ', 'wp_interactive_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'Version', 'wp_interactive_tutorials' ) . ' 0.0.1' ; ?>
							</p>
							</div>
						</div>
						<!-- .postbox -->
						<div class="postbox">
							<div style="background-color:#0073aa;width:100%;display:inline-block;vertical-align:middle;"><h2 style="color:#fff;"><span>
							<?php echo __( 'Some Other Details', 'wp_interactive_tutorials' ); ?>
							</span></h2></div>
							<div class="inside">
							<p>
							<?php echo __( 'You need to use another plugin allowing your WordPress site to allow anyone to register as a subscriber, or use a plugin allowing users to create a free account and edit their profile on the front end of your site.', 'wp_interactive_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'Once you set up a tutorial, you shouldnt have to edit it again, unless the urls change. Sometimes a plugin author might change the url to a settings page or options tabs.', 'wp_interactive_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'If a user is not logged in, the output is a little ugly. Its designed to intrigue users to create a free profile to see sexy links and link directly to their site.', 'wp_interactive_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'This plugin does not work with MultiSite, yet', 'wp_interactive_tutorials' ); ?>
							</p>
							<p>
							<?php echo __( 'Version', 'wp_interactive_tutorials' ) . ' 0.0.1' ; ?>
							</p>
							</div>
						</div>
						<!-- .postbox -->
					</div>
					<!-- .meta-box-sortables -->
				</div>
				<!-- #postbox-container-1 .postbox-container -->
			</div>
			<br class="clear">
		</div>
        <?php
        echo '</div>';
}
?>