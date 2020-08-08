<?php

/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined('ABSPATH') || exit;
?>

<div class="woocommerce-order thankyou-page">

	<?php
	if ($order) :

		do_action('woocommerce_before_thankyou', $order->get_id());
	?>

		<?php if ($order->has_status('failed')) : ?>

			<div class="celebration-image">
				<img src="/wp-content/themes/taffy/assets/images/emoji-broken-heart.png">
			</div>
			<h1>Ooops!</h1>

			<p>
				Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.
			</p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>" class="pay btn btn-primary btn-cta btn-lg mb-3"><?php esc_html_e('Try Again', 'woocommerce'); ?></a>
			</p>

		<?php else : ?>

			<div class="celebration-image">
				<img src="/wp-content/themes/taffy/assets/images/emoji-party-popper.png">
			</div>
			<h1>Yaaay!</h1>

			<p>
				Your order has been successfully processed and a confirmation email will be sent to <b><?= $order->get_billing_email(); ?></b> shortly.
			</p>

			<div class="order-number">
				<p class="number"><?= $order->get_order_number(); ?></p>
				<p class="label">Your Order Number</p>
			</div>

			<a href="/shop/" class="btn btn-primary btn-cta btn-lg mb-3">Continue Shopping</a>

			<div class="my-5">
				<h3 class="mb-3">Useful Links</h3>
				<p>
					<a href="/order-tracking/">Track Order</a> |
					<a href="/shipping-policy/">Shipping Info</a> |
					<a href="/faqs/">FAQs</a>
				</p>
			</div>

			<div class="mt-5">
				<h3 class="mb-3">Follow Us</h3>
				<div class="social dark-bg">
					<div class="buttons justify-content-center">
						<a href="https://www.facebook.com/thefemrico/" target="_blank" rel="nofollow noopener" class="btn btn-social facebook"><i class="fab fa-facebook-f"></i></a>
						<a href="#" target="_blank" rel="nofollow noopener" class="btn btn-social twitter"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social instagram"><i class="fab fa-instagram"></i></a>
						<a href="https://www.pinterest.com/femrico/boards/" target="_blank" rel="nofollow noopener" class="btn btn-social pinterest"><i class="fab fa-pinterest-p"></i></a>
						<a href="https://www.etsy.com/shop/femrico/" target="_blank" rel="nofollow noopener" class="btn btn-social etsy"><i class="fab fa-etsy"></i></a>
						<!-- <a href="#" target="_blank" rel="nofollow" class="btn btn-social youtube"><i class="fab fa-youtube"></i></a> -->
					</div>
				</div>
			</div>


		<?php endif; ?>

		<?php //do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id()); ?>
		<?php //do_action('woocommerce_thankyou', $order->get_id()); ?>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', 'woocommerce'), null); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																										?></p>

	<?php endif; ?>

</div>