<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<div class="product-top">
		<div class="container">
			<div class="row">
				<?php woocommerce_breadcrumb(); ?>
			</div>
			<div class="row product-content">

				<div class="col-sm-1">
					<?php
					do_action('woocommerce_product_thumbnails');
					?>
				</div>

				<div class="col-sm-6">
					<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10 (RMV)
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action('woocommerce_before_single_product_summary');
					?>
				</div>

				<div class="col-sm-5">
					<div class="summary entry-summary">
						<?php
						/**
						 * Hook: woocommerce_single_product_summary.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 * @hooked WC_Structured_Data::generate_product_data() - 60
						 */
						do_action('woocommerce_single_product_summary');
						?>
						<div class="secure-payment">
							<img src="<?= get_template_directory_uri() ?>/assets/images/ssl-secure-icon.png" loading="lazy">
						</div>
					</div>
				</div>
			</div>
			<div class="row related-products">
				<?php woocommerce_output_related_products(); ?>
			</div>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20 (RMV)
	 */
	do_action('woocommerce_after_single_product_summary');
	?>

	<div class="product-description pb-3 mb-5">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>

	<div class="product-reviews">
		<div class="container">
			<?php comments_template(); ?>
		</div>
	</div>

	<!-- <div class="py-5">
		<div class="container">
			<div class="category-block droptest">
				<div class="text">
					<div class="lead">No Joke!</div>
					<h4>6ft Drop Tested</h4>
					<a href="/glitter-cases/" class="btn btn-primary">Shop Now</a>
				</div>
			</div>
		</div>
	</div> -->

	<section class="my-5 who-are-we">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<div class="text">
						<h2>
							Who Are We?
						</h2>
						<p>
							At Femrico, we’re fashion enthusiasts who want to help others enjoy the looks and
							protection of their mobile devices. Unlike the generic store, we’re not the last step
							of a long & overpriced distribution chain. We’re lifelong partners with years of
							experience in the industry who want to give direct access to the best quality products
							that’s out there - along with unlimited access to our friendly customer support and tech resources.
						</p>
						<div class="social">
							<div class="buttons">
								<a href="https://www.facebook.com/thefemrico/" target="_blank" rel="nofollow noopener" class="btn btn-social facebook"><i class="fab fa-facebook-f"></i></a>
								<a href="#" target="_blank" rel="nofollow noopener" class="btn btn-social twitter"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social instagram"><i class="fab fa-instagram"></i></a>
								<a href="https://www.pinterest.com/femrico/boards/" target="_blank" rel="nofollow noopener" class="btn btn-social pinterest"><i class="fab fa-pinterest-p"></i></a>
								<a href="https://www.etsy.com/shop/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social etsy"><i class="fab fa-etsy"></i></a>
								<!-- <a href="#" target="_blank" rel="nofollow" class="btn btn-social youtube"><i class="fab fa-youtube"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<?php do_action('woocommerce_after_single_product'); ?>