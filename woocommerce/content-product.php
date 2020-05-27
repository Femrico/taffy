<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div <?php wc_product_class( ['card', 'product-card'], $product ); ?>>

	<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10 (RMV)
		 */
		do_action( 'woocommerce_before_shop_loop_item' );
	?>

	<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 5
		 * @hooked woocommerce_show_product_loop_sale_flash - 10 (RMV)
		 * @hooked woocommerce_template_loop_product_thumbnail - 10
		 * @hooked woocommerce_template_loop_product_link_close - 15
		 */
		do_action( 'woocommerce_before_shop_loop_item_title' );
	?>

	<div class="card-body">
		
		<?php

			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_product_title - 10 (RMV)
			 * @hooked taffy_template_loop_product_title - 10
			 */
			do_action( 'woocommerce_shop_loop_item_title' );

		?>
		
		<div class="action-bar">
			<?php
				/**
				 * Hook: woocommerce_after_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_rating - 5 (RMV)
				 * @hooked woocommerce_template_loop_price - 10
				 * @hooked woocommerce_template_loop_add_to_cart - 15
				 */
				do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
			<!-- <div class="price">
				$10<small>.99</small>
				<span class="strike">
					$12<small>.99</small>
				</span>
			</div>
			<a href="#" class="btn btn-primary btn-cta">+ <i class="far fa-shopping-cart"></i></a> -->
		</div>
	</div>
	
	<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5 (RMV)
		 * @hooked woocommerce_template_loop_price - 5 (RMV)
		 * @hooked woocommerce_template_loop_add_to_cart - 10 (RMV)
		 */
		do_action( 'woocommerce_after_shop_loop_item' );
	?>

</div>