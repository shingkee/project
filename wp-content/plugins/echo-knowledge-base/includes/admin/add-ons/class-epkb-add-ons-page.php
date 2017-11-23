<?php  if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Display Add-ons page
 *
 * @copyright   Copyright (C) 2017, Echo Plugins
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
class EPKB_Add_Ons_Page {

	public function display_add_ons_page() {

		ob_start(); ?>

		<div class="wrap">
			<h1></h1>
		</div>
		<div id="ekb-admin-page-wrap" class="ekb-admin-page-wrap epkb-add-ons-container">
			<div class="epkb-config-wrapper">
				<div class="wrap" id="ekb_core_top_heading"></div>
				<div class="eckb-top-notice-message"></div>

				<div class="welcome_header">
					<div class="container-fluid">
						<div class="row">
							<div class="col-5">
								<h1><?php esc_html_e( 'Extend Your Knowledge Base', 'echo-knowledge-base' ); ?></h1>
							</div>
						</div>
					</div>
				</div>          <?php

				self::display_add_ons_details();  ?>
			</div>

		</div>      <?php

		echo ob_get_clean();
	}

	/**
	 * Display all add-ons
	 */
	private static function display_add_ons_details() {

		$output = '';
		$license_content = apply_filters( 'epkb_license_fields', $output );
		$tab = empty($_REQUEST['epkb-tab']) || empty($license_content) ? 'add-ons' : 'licenses';    ?>

		<div id="epkb-tabs" class="add_on_container">
			<section class="epkb-main-nav">
				<ul class="epkb-admin-pages-nav-tabs">
					<li class="nav_tab <?php echo ($tab == 'add-ons' ? 'active' : ''); ?>">
						<h2><?php esc_html_e( 'Add-ons', 'echo-knowledge-base' ); ?></h2>
						<p><?php esc_html_e( 'More Possibilities', 'echo-knowledge-base' ); ?></p>
					</li>
					<?php if ( ! empty($license_content) ) { ?>
						<li id="eckb_license_tab" class="nav_tab <?php echo ($tab == 'licenses' ? 'active' : ''); ?>">
							<h2><?php esc_html_e( 'Licenses', 'echo-knowledge-base' ); ?></h2>
							<p><?php esc_html_e( 'Licenses for add-ons', 'echo-knowledge-base' ); ?></p>
						</li>
					<?php }  ?>
				</ul>
			</section>
			<div id="add_on_panels" class="ekb-admin-pages-panel-container">
				<div class="ekb-admin-page-tab-panel container-fluid <?php echo ($tab == 'add-ons' ? 'active' : ''); ?>">
					<div class="row">   <?php

						// http://www.echoknowledgebase.com/wp-content/uploads/2017/09/product_preview_coming_soon.png

						$i18_grid = '<strong>' . __( 'Grid Layout', 'echo-knowledge-base' ) . '</strong>';
						$i18_sidebar = '<strong>' . __( 'Sidebar Layout', 'echo-knowledge-base' ) . '</strong>';
						self::add_on_product( array(
								'title' => __( 'Elegant Layouts', 'echo-knowledge-base' ),
								'special_note' => __( 'More ways to visualize your KB', 'echo-knowledge-base' ),
								'img' => 'http://www.echoknowledgebase.com/wp-content/uploads/2017/09/product_preview_elegant_layouts.png',
								'desc' => sprintf( _x( 'Use %s or %s for KB Main page or combine Basic, ' .
								                       'Tabs, Grid and Sidebar layouts in many cool ways.', 'echo-knowledge-base' ), $i18_grid, $i18_sidebar ),
								'learn_more_url' => 'https://www.echoknowledgebase.com/wordpress-plugin/elegant-layouts/',
						) );

						$i18_list = '<strong>' . __( 'product, service or team', 'echo-knowledge-base' ) . '</strong>';
						self::add_on_product( array(
							'title' => __( 'Multiple Knowledge Bases', 'echo-knowledge-base' ),
							'special_note' => __( 'More possibilities', 'echo-knowledge-base' ),
							'img' => 'http://www.echoknowledgebase.com/wp-content/uploads/2017/09/product_preview_multiple_kb.png',
							'desc' => sprintf( _x( 'Create a new Knowledge Base for both external and internal site as well as for each %s.',
                                                    'product, service or team', 'echo-knowledge-base' ), $i18_list ),
							'learn_more_url' => 'https://www.echoknowledgebase.com/wordpress-plugin/multiple-knowledge-bases/'
						) );

						$i18_what = '<strong>' . __( 'Widgets and shortcodes', 'echo-knowledge-base' ) . '</strong>';
						self::add_on_product( array(
							'title' => __( 'Widgets', 'echo-knowledge-base' ),
							'special_note' => __( 'Shortcodes, Widgets, Sidebars', 'echo-knowledge-base' ),
							'img' => 'http://www.echoknowledgebase.com/wp-content/uploads/2017/09/product_preview_WIDG_1.png',
							'desc' => sprintf( _x( 'Add KB Search, Most Recent Articles and other %s to your articles, sidebars and pages.',
                                                'echo-knowledge-base' ), $i18_what ),
							'learn_more_url' => 'https://www.echoknowledgebase.com/wordpress-plugin/widgets/'
						) );

                        self::add_on_product( array(
                            'title' => __( 'Roles and Permissions', 'echo-knowledge-base' ),
                            'special_note' => __( 'Guard Your Documents', 'echo-knowledge-base' ),
                            'img' => 'http://www.echoknowledgebase.com/wp-content/uploads/2017/09/product_preview_coming_soon.png',
                            'desc' => __( 'Knowledge Base specific roles and permissions will give you control over access to your Knowledge Base so that you can setup internal KB for your organization.'),
                            'coming_when' =>  __( 'Coming in November', 'echo-knowledge-base' ),
                            '#' //'learn_more_url' => 'https://www.echoknowledgebase.com/wordpress-plugin/access-manager/',
                        ) );

						/* self::add_on_product( array(
							'title' => __( 'Article Shortcodes', 'echo-knowledge-base' ),
							'special_note' => __( 'Supercharge Your Articles', 'echo-knowledge-base' ),
							'img' => 'http://www.echoknowledgebase.com/wp-content/uploads/2017/09/product_preview_coming_soon.png',
							'desc' => __( 'Use a set of shortcodes to make it easier and faster to create professional-looking articles. ' .
							              'Additionally, your users will find these articles easier to read.'),
							'coming_when' =>  __( 'Coming in Sept', 'echo-knowledge-base' ),
							'#' //'learn_more_url' => 'https://www.echoknowledgebase.com/wordpress-plugin/sidebar-layout/',
						) ); */	?>

					</div>
				</div>

				<!--   LICENSES ONLY -->		<?php
				if ( ! empty($license_content) ) { ?>
					<div class="ekb-admin-page-tab-panel container-fluid <?php echo ($tab == 'licenses' ? 'active' : ''); ?>">
						<section id="ekcb-licenses" class="form_options">
							<ul>  	<!-- Add-on name / License input / status  -->   <?php
								echo $license_content;      ?>
							</ul>
						</section>
					</div>
				<?php }  ?>

			</div>
		</div>   <?php
	}

	private static function add_on_product( $values = array () ) {    ?>

		<div class="add_on_product">
			<div class="top_heading">
				<h3><?php echo esc_html($values['title']); ?></h3>
				<p><i><?php echo esc_html($values['special_note']); ?></i></p>
			</div>
			<div class="featured_img">
				<img src="<?php echo $values['img']; ?>">
			</div>
			<div class="description">
				<p>
					<?php echo wp_kses_post($values['desc']); ?>
				</p>
			</div>
			<div class="button_container">
				<?php if ( ! empty($values['coming_when']) ) { ?>
					<div class="coming_soon"><?php echo esc_html( $values['coming_when'] ); ?></div>
				<?php } else { ?>
					<a class="button primary-btn" href="<?php echo $values['learn_more_url']; ?>" target="_blank"><?php esc_html_e( 'Learn More', 'echo-knowledge-base' ); ?></a>
				<?php } ?>
			</div>

		</div>    <?php
	}
}

