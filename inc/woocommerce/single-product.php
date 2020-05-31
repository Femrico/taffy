<?php

// Before Summar
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);

// Summary
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 15);

// After Summary
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


/**
 * Update Product Tabs
 */
add_filter('woocommerce_product_tabs', 'taffy_remove_product_tabs', 98);

function taffy_remove_product_tabs($tabs) {
    unset ($tabs['reviews']);                   // Remove reviews
    unset ($tabs['description']);               // Remove description
    //unset ($tabs['additional_information']);    // Remove additional information

    return $tabs;
}


/**
 * Remove Link from Thumbnails
 */
add_filter('woocommerce_single_product_image_thumbnail_html', 'taffy_remove_image_thumbnail_link');
function taffy_remove_image_thumbnail_link($html) {
    return strip_tags($html, '<div><img>');
} 