<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20 (RMV)
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<div class="container">

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		// do_action( 'woocommerce_archive_description' );
		?>
	</div>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	echo '<section class="mb-5">';
	echo '<div class="container">';
	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();
	echo '</div>';
	echo '</section>';

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
?>

<?php //if (array( 21, 'decor', 'Decor' )) { ?>
<?php 
	if (is_product_category('21')) {
?>
	<section class="mt-5">
		<div class="container">
			<div class="category-block droptest">
				<div class="text">
					<div class="lead">&nbsp;</div>
					<h4>&nbsp;</h4>
				</div>
			</div>
			<div class="col-lg-10 mx-auto mt-5 text-center">
				<h2 class="mb-4">6ft Drop Test</h2>
				<p>
					A dual-layer hard bumper case which is exclusively designed for 
					your iPhone. With soft shock absorbing outer shell, your phone 
					will always be protected from scratches, dust and drops. The sparkly 
					glitter comes sealed in the middle and won’t be leaked or get smuged. 
					Along with the precise cutouts and raised edges, this makes the case 
					both beautiful and very protective.
				</p>
			</div>
		</div>
	</section>
	<section class="my-5">
		<div class="container">
			<div class="text-center mb-4 pb-2">
				<h2>Best Sellers</h2>
			</div>
			<div class="product-grid mb-5 pb-2">
				<?php
				$query = new WP_Query(array(
					'post_type' => 'product',
					'post_status' => 'publish',
					'posts_per_page' => 2,
					'post__in' => array(9517, 9510),
					'tax_query' => array(array(
						'taxonomy' => 'product_visibility',
						'field'    => 'term_id',
						'terms'    => 'featured',
						'operator' => 'IN',
					))
				));

				while ($query->have_posts()) {
					$query->the_post();
					do_action('woocommerce_shop_loop');
					wc_get_template_part('content', 'product');
				}
				?>
			</div>
		</div>
	</section>
<?php } ?>

<?php
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
