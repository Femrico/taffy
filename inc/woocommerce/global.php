<?php
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
    $html .= sprintf('<div class="stars %s">', ($rating == 0) ? 'empty' : '');

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

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);