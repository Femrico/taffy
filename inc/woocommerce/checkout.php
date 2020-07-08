<?php

/**
 * Add a field in checkout
 */
// add_action('woocommerce_after_order_notes', 'customise_checkout_field');
// function customise_checkout_field($checkout)
// {
//     echo '<div id="customise_checkout_field"><h2>' . __('Heading') . '</h2>';
//     woocommerce_form_field('customised_field_name', array(
//         'type' => 'text',
//         'class' => array(
//             'my-field-class form-row-wide'
//         ),
//         'label' => __('Customise Additional Field'),
//         'placeholder' => __('Guidence'),
//         'required' => true,
//     ), $checkout->get_value('customised_field_name'));
//     echo '</div>';
// }


/**
 * Remove coupon notice on checkout
 */
add_action('woocommerce_before_checkout_form', 'remove_checkout_coupon_form', 9);
function remove_checkout_coupon_form()
{
    remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
}


/**
 * Combine first and last name on checkout
 */
add_filter('woocommerce_billing_fields', 'taffy_combine_first_last_names');
function taffy_combine_first_last_names($fields)
{
    unset($fields['billing']['billing_last_name']);

    return $fields;
}

/**
 * Customize checkout fields
 */
add_filter('woocommerce_enable_order_notes_field', '__return_false');
add_filter('woocommerce_checkout_fields', 'taffy_customize_checkout_fields');
function taffy_customize_checkout_fields($fields)
{

    // remove fields
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_address_2']);

    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_address_2']);

    unset($fields['order']['order_comments']);


    // update order
    $fields['billing']['billing_country']['priority'] = 95;
    $fields['billing']['billing_email']['priority'] = 15;
    $fields['billing']['billing_phone']['priority'] = 16;


    // change lables & placeholders
    $fields['billing']['billing_first_name']['label'] = "Full Name";
    $fields['billing']['billing_first_name']['placeholder'] = "Full Name";
    $fields['billing']['billing_address_1']['label'] = "Street Address";
    $fields['billing']['billing_address_1']['placeholder'] = "Street Address";
    $fields['billing']['billing_city']['label'] = "City";
    $fields['billing']['billing_city']['placeholder'] = "City";
    $fields['billing']['billing_phone']['label'] = "Phone";
    $fields['billing']['billing_phone']['placeholder'] = "Phone No.";
    $fields['billing']['billing_email']['label'] = "Email";
    $fields['billing']['billing_email']['placeholder'] = "Email Address";

    $fields['billing_address_1']['label'] = "Street Address";
    $fields['billing_address_1']['placeholder'] = "Street Address";


    // change fields size
    $fields['billing']['billing_first_name']['class'] = array('form-row-wide');
    $fields['billing']['billing_phone']['class'] = array('form-row-first');
    $fields['billing']['billing_email']['class'] = array('form-row-first');
    $fields['billing']['billing_state']['class'] = array('form-row-first');
    $fields['billing']['billing_postcode']['class'] = array('form-row-first');


    return $fields;
}


/**
 * Customize Address Fields
 */
add_filter('woocommerce_default_address_fields', 'taffy_customize_address_fields');
function taffy_customize_address_fields($fields)
{

    $fields['state']['label'] = 'State';
    $fields['state']['placeholder'] = 'State';

    $fields['city']['label'] = 'City';
    $fields['city']['placeholder'] = 'City';

    $fields['postcode']['label'] = 'Zip Code';
    $fields['postcode']['placeholder'] = 'Zip Code';

    $fields['address_1']['label'] = 'Street Address';
    $fields['address_1']['placeholder'] = 'Street Address';

    return $fields;
}
