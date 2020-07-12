<?php

// Before Summar
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);

// Summary
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
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

function taffy_remove_product_tabs($tabs)
{
    unset($tabs['reviews']);                   // Remove reviews
    unset($tabs['description']);               // Remove description
    unset($tabs['additional_information']);    // Remove additional information

    return $tabs;
}


/**
 * Remove Link from Thumbnails
 */
add_filter('woocommerce_single_product_image_thumbnail_html', 'taffy_remove_image_thumbnail_link');
function taffy_remove_image_thumbnail_link($html)
{
    return strip_tags($html, '<div><img>');
}



// removing the price of variable products
// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

// Change location of
// add_action('woocommerce_single_product_summary', 'custom_wc_template_single_price', 10);
function custom_wc_template_single_price()
{
    global $product;

    // Variable product only
    if (!$product->is_type('simple')) :

        // Main Price
        $prices = array($product->get_variation_price('min', true), $product->get_variation_price('max', true));
        $price = wc_price($prices[0]) . ' - ' . wc_price($prices[1]);

        // Sale Price
        $prices = array($product->get_variation_regular_price('min', true), $product->get_variation_regular_price('max', true));
        sort($prices);
        $saleprice = wc_price($prices[0]) . ' - ' . wc_price($prices[1]);

        if ($price !== $saleprice && $product->is_on_sale()) {
            $saleprice = wc_price($prices[0]) . ' - ' . wc_price($prices[1]);
        }

?>
        <script>
            jQuery(document).ready(function($) {
                // When variable price is selected by default
                setTimeout(function() {
                    if (0 < $('input.variation_id').val() && null != $('input.variation_id').val()) {
                        if ($('p.availability'))
                            $('p.availability').remove();

                        $('p.price').html($('div.woocommerce-variation-price > span.price').html()).append('<p class="availability">' + $('div.woocommerce-variation-availability').html() + '</p>');
                        console.log($('div.woocommerce-variation-availability').html());
                    }
                }, 300);

                // On live variation selection
                $('select').blur(function() {
                    if (0 < $('input.variation_id').val() && null != $('input.variation_id').val()) {
                        if ($('.price p.availability') || $('.price p.stock'))
                            $('p.price p').each(function() {
                                $(this).remove();
                            });

                        $('p.price').html($('div.woocommerce-variation-price > span.price').html()).append('<p class="availability">' + $('div.woocommerce-variation-availability').html() + '</p>');
                        console.log($('input.variation_id').val());
                    } else {
                        $('p.price').html($('div.hidden-variable-price').html());
                        if ($('p.availability'))
                            $('p.availability').remove();
                        console.log('NULL');
                    }
                });
            });
        </script>
<?php

        echo '<p class="price">' . $price . '</p>
        <div class="hidden-variable-price" >' . $price . '</div>';

    endif;
}
