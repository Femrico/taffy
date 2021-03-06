<?php

/**
 * PRICE MODIFICATIONS
 */
add_filter('woocommerce_format_sale_price', 'taffy_format_sale_price', 10, 3);
function taffy_format_sale_price($price, $regular_price, $sale_price)
{
    // check for admin
    if (is_admin()) {
        return $price;
    }

    // if not cart or checkout page
    if(!is_front_page() && !is_product_category() && !is_product() && !is_archive()) {
        return $price;
    }

    $price = (is_numeric($sale_price) ? wc_price($sale_price) : $sale_price) . '<span class="strike">' . (is_numeric($regular_price) ? wc_price($regular_price) : $regular_price) . '</span>';
    $shipping = " - <span class='shipping'>Arrives " . date('D, M jS', mktime(0, 0, 0, date('m'), date('d') + 6, date('Y'))) . "</span>";

    if (is_product() && get_the_id() == 9886) {
        $shipping = " - <span class='shipping'>Arrives " . date('D, M jS', mktime(0, 0, 0, date('m'), date('d') + 21, date('Y'))) . "</span>";
    }

    if (is_product()) {
        return $price . $shipping;
    } else {
        return $price;
    }

}

add_filter('formatted_woocommerce_price', 'taffy_formatted_price', 10, 5);
function taffy_formatted_price($formatted_price, $price, $decimal_places, $decimal_separator, $thousand_separator)
{
    // check for admin
    if (is_admin()) {
        return $formatted_price;
    }

    // if not cart or checkout page
    if(!is_front_page() && !is_product_category() && !is_product() && !is_archive()) {
        return $formatted_price;
    }
    
    $unit = number_format(intval($price), 0, $decimal_separator, $thousand_separator);
    $decimal = sprintf('%02d', ($price - intval($price)) * 100);
    return $unit;

}


/**
 * RATINGS MODIFICATIONS
 */
add_filter('woocommerce_product_get_rating_html', 'taffy_update_rating_html', 10, 3);
function taffy_update_rating_html($html, $rating, $count = 0)
{
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


/**
 * Remove Breadcrumbs by default
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);


/**
 * Rename Breadcrumbs home to Femrico
 */
add_filter('woocommerce_breadcrumb_defaults', 'taffy_update_breadcrumbs_home');
function taffy_update_breadcrumbs_home($defaults)
{
    $defaults['home'] = 'Femrico';
    return $defaults;
}


/**
 * Update Store Notice
 */
add_filter('woocommerce_demo_store', 'taffy_update_store_notice', 2, 100);
function taffy_update_store_notice($html, $notice)
{
    return strip_tags($notice);
}
remove_action('wp_footer', 'woocommerce_demo_store');


/**
 * Don't Redirect to Cart on Checkout Page
 */
/**
 * Redirect users after add to cart.
 */
add_filter('woocommerce_add_to_cart_redirect', 'taffy_add_to_cart_redirect');
function taffy_add_to_cart_redirect($url)
{

    if (is_checkout()) {
        global $woocommerce;
        $url = $woocommerce->cart->get_checkout_url();
    }

    return $url;
}
