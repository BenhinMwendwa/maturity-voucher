<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/preview/maturity-discharge', function () {
    $data = (object) [
        'pol_data' => (object) [
            'v_policy_no'     => 'IL3103001010694',
            'life_assured'    => 'Brisnell Karanja',
            'address'     => "P.O Box 7468-00300,<br>Nairobi.",
            'date_of_risk'    => '2026-02-08',
            'policy_end_date' => '2025-11-27',
        ],
        'sum_assured'         => 460000.00,
        'actual_bonus'        => 144000.00,
        'interim_bonus'       => 0.00,
        'unpaid_premiums'     => 0.00,
        'revenue_stamp'       => 2.50,
        'outstanding_loan'    => 0.00,
        'nfp_loan'            => 0.00,
        'total_deductions'    => 2.50,
        'net_amount_payable'  => 603997.50,
        'net_amount_words'    => 'Six Hundred Three Thousand Nine Hundred Ninety-Seven Cents Fifty',
    ];

    $pdf = \PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadView('pdfs.maturitydischargevoucher', array('data' => $data));

    return $pdf->stream('maturity-discharge-voucher.pdf');
});