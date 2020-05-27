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
 * PRICE MODIFICATIONS
 */
add_filter('woocommerce_format_sale_price', 'taffy_format_sale_price', 10, 3);
function taffy_format_sale_price($price, $regular_price, $sale_price) {
    $price = ( is_numeric( $sale_price ) ? wc_price( $sale_price ) : $sale_price ) . '<span class="strike">' . ( is_numeric( $regular_price ) ? wc_price( $regular_price ) : $regular_price ) . '</span>';
    return $price;
}

add_filter('formatted_woocommerce_price', 'taffy_formatted_price', 10, 5);
function taffy_formatted_price( $formatted_price, $price, $decimal_places, $decimal_separator, $thousand_separator ) {
	$unit = number_format( intval( $price ), 0, $decimal_separator, $thousand_separator );
	$decimal = sprintf( '%02d', ( $price - intval( $price ) ) * 100 );
	return $unit . '<small>' . $decimal_separator . $decimal . '</small>';
}


/**
 * RATINGS MODIFICATIONS
 */
add_filter('woocommerce_product_get_rating_html', 'taffy_update_rating_html', 10, 3);
function taffy_update_rating_html($html, $rating, $count = 0) {
    $complete_stars = floor($rating);
    $half_stars = ($rating - $complete_stars > 0) ? 1 : 0;
    $empty_stars = 5 - $complete_stars - $half_stars;

    $html = '';
    $html .= '<div class="stars">';

    for ($i = 0; $i < $complete_stars; $i++) {
        $html .= '<i class="fas fa-star"></i>';
    }

    for ($i = 0; $i < $half_stars; $i++) {
        $html .= '<i class="fas fa-star-half-alt"></i>';
    }

    for ($i = 0; $i < $empty_stars; $i++) {
        $html .= '<i class="far fa-star"></i>';
    };

    $html .= '</div>';
    return $html;
}


/**
 * TITLE UPDATED
 */
function taffy_template_loop_product_title() {
    echo '<a href="'. get_the_permalink() .'" class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . ' title">' . get_the_title() . '</a>';
}