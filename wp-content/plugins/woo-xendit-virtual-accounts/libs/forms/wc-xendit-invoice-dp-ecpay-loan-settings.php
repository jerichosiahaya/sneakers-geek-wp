<?php
if (! defined('ABSPATH')) {
    exit;
}

return apply_filters(
    'wc_xendit_dp_ecpay_loan_settings',
    array(
        'channel_name' => array(
            'title' => __('Payment Channel Name', 'woocommerce-gateway-xendit'),
            'type' => 'text',
            'description' => __('Your payment channel name will be changed into <strong><span class="channel-name-format"></span></strong>', 'woocommerce-gateway-xendit'),
            'placeholder' => 'ECPay Loan',
        ),
        'payment_description' => array(
            'title' => __('Payment Description', 'woocommerce-gateway-xendit'),
            'type' => 'textarea',
            'css' => 'width: 400px;',
            'description' => __('Change your payment description for <strong><span class="channel-name-format"></span></strong>', 'woocommerce-gateway-xendit'),
            'placeholder' => 'Pay with your ECPay Loan via Xendit',
        )
    )
);
