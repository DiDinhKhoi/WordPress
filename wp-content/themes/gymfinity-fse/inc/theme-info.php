<?php
/**
 * Add Theme info Page
 */

function gymfinity_fse_menu() {
	add_theme_page( esc_html__( 'Gymfinity  FSE', 'gymfinity-fse' ), esc_html__( 'About Gymfinity  FSE', 'gymfinity-fse' ), 'edit_theme_options', 'about-gymfinity-fse', 'gymfinity_fse_theme_page_display' );
}
add_action( 'admin_menu', 'gymfinity_fse_menu' );

function gymfinity_fse_admin_theme_style() {
	wp_enqueue_style('gymfinity-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'gymfinity_fse_admin_theme_style');

/**
 * Display About page
 */
function gymfinity_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'gymfinity-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The Gymfinity FSE is a free health fitness WordPress theme, as it is the best option for gym centers, yoga businesses, and fitness-related businesses.', 'gymfinity-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'gymfinity-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'gymfinity-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'gymfinity-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'gymfinity-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'gymfinity-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'gymfinity-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'gymfinity-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'gymfinity-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'gymfinity-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Gymfinity PRO', 'gymfinity-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'gymfinity-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/fitness-trainer-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'gymfinity-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'gymfinity-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/gymfinity/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'gymfinity-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/gymfinity/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'gymfinity-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'gymfinity-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'gymfinity-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with Gymfinity  FSE, please give your feedback.', 'gymfinity-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/gymfinity-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'gymfinity-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>