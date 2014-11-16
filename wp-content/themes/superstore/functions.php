<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 			// Options panel settings and custom settings
				'includes/theme-functions.php', 		// Custom theme functions
				'includes/theme-actions.php', 			// Theme actions & user defined hooks
				'includes/theme-comments.php', 			// Custom comments/pingback loop
				'includes/theme-js.php', 				// Load JavaScript via wp_enqueue_script
				'includes/sidebar-init.php', 			// Initialize widgetized areas
				'includes/theme-widgets.php'			// Theme widgets
				);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}

if ( is_woocommerce_activated() ) {
	locate_template( 'includes/theme-woocommerce.php', true );
}

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/





add_action( 'woocommerce_single_product_summary' , 'woocommerce_brand_summary', 25 );
 
/**
 * woocommerce_brand_summary
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
function woocommerce_brand_summary() {
	
	global $post;
	
	$brands = wp_get_post_terms( $post->ID, 'product_brand', array("fields" => "all") );
 
	foreach( $brands as $brand ) {
		echo __( 'Brand Description', '') . ': ' . term_description( $brand->term_id, 'product_brand' );
	}
	
}

 
/**
 * shortcode woo
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
function woocommerce_sale_products( $atts ){
    global $woocommerce_loop;

    extract( shortcode_atts( array(
        'per_page'      => '12',
        'columns'       => '4',
        'orderby'       => 'title',
        'order'         => 'asc'
        ), $atts ) );

    $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'ignore_sticky_posts'   => 1,
        'orderby' => $orderby,
        'order' => $order,
        'posts_per_page' => $per_page,
        'meta_query' => array(
            array(
                'key' => '_visibility',
                'value' => array('catalog', 'visible'),
                'compare' => 'IN'
            ),
            array(
                'key' => '_sale_price',
                'value' => 0,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
        )
    );

    ob_start();

    $products = new WP_Query( $args );

    $woocommerce_loop['columns'] = $columns;

    if ( $products->have_posts() ) : ?>

        <ul class="products">

            <?php while ( $products->have_posts() ) : $products->the_post(); ?>

                <?php woocommerce_get_template_part( 'content', 'product' ); ?>

            <?php endwhile; // end of the loop. ?>

        </ul>

    <?php endif;

    wp_reset_query();

    return ob_get_clean();
}

add_shortcode('sale_products', 'woocommerce_sale_products');
add_filter('jpeg_quality', 'jpeg_quality_callback');
function jpeg_quality_callback($arg) {
return (int)100;
}
 

/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>