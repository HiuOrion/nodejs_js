<?php

return [
    'vnp_TmnCode' => env('VNP_TMN_CODE'),
    'vnp_HashSecret' => env('VNP_HASH_SECRET'),
    'vnp_Url' => env('VNP_URL', 'https://sandbox.vnpayment.vn/paymentv2/vpcpay.html'),
    'vnp_ReturnUrl' => env('VNP_RETURN_URL'),
];
