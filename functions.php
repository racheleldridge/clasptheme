<?php
	add_action( 'widgets_init', 'my_register_sidebars' );
	function my_register_sidebars() {
		/* Register dynamic sidebar 'new_sidebar' */
			register_sidebar(
				array(
					'id' => 'clasp_sidebar',
					'name' => __( 'clasp Sidebar' ),
					'description' => __( 'The sidebar for the clasp website' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
					)
				);
		/* Repeat the code pattern above for additional sidebars. */
	}
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	/* Theme setup */
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'clasp' ),
		) );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 850, 300 );
	// Register Custom Navigation Walker
		require_once('class-wp-bootstrap-navwalker.php');
	/* Change Excerpt length */
		function custom_excerpt_length( $length ) {
			return 30;
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );	
?>