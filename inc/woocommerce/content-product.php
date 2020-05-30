<?php

// loop before
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');

// title before
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 5);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash');
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15);

// title
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');
add_action( 'woocommerce_shop_loop_item_title', 'taffy_template_loop_product_title', 10);

// title after
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 15 );

// loop after
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close');
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price');
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');


/**
 * TITLE UPDATED
 */
function taffy_template_loop_product_title() {
    echo '<a href="'. get_the_permalink() .'" class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . ' title">' . get_the_title() . '</a>';
}