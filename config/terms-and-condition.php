<?php

return [
    'taxes' => [
        [
            'key' => 'GST Extra',
            'value' => 'GST@18% shall be charged extra as applicable at the time of despatch.'
        ],
        [
            'key' => 'GST Inclusive',
            'value' => 'Prices are inclusive of all taxes & duties.'
        ]
    ],
    'priceBasis' => [
        [
            'key' => 'FOR Site',
            'value' => 'Prices are FOR site, PnF, Transit Insurance and Freight charges are all inclusive in above offer.'
        ],
        [
            'key' => 'Ex-Works',
            'value' => 'Prices are Ex-Works P/F, Transit Insurance and Freight shall be charged extra at actuals.'
        ],
        [
            'key' => 'Ex-Lucknow',
            'value' => 'Prices are Ex-Lucknow P/F, Transit Insurance and Freight shall be charged extra at actuals.	'
        ],
        [
            'key' => 'In Customer Scope',
            'value' => 'Prices are Ex-Works P/F, Transit Insurance and Freight shall be in your scope.'
        ],
    ],
    'paymentTerms' => [
        [
            'key' => '20% Advance',
            'value' => '20% Advance & reminaing 80% payment against PI before despatch of material.		'
        ],
        [
            'key' => '100% PI',
            'value' => '100% payment against PI before despatch of material.			'
        ],
        [
            'key' => '15 Days',
            'value' => ' 100%Payment within 15 days of reciept and acceptence of material at your site.'
        ],
        [
            'key' => '30 Days',
            'value' => '100%Payment within 30 days of reciept and acceptence of material at your site.'
        ],
        [
            'key' => 'Other',
            'value' => ''
        ],
    ],
    'warranty' => [
        [
            'key' => 'NA',
            'value' => 'ABB does not provide warranty on above offered items, hence Warranty clause is not applicable.		'
        ],
        [
            'key' => 'Dec-18',
            'value' => '12 Months from the date of commissioning or 18 months from the date of dispatch, whichever is earlier.'
        ]
    ],
    'performanceGurantee' => [
        'key' => 'Default',
        'value' => 'Any kind of Performance Gurantee or Performance Bank Gurantee is not applicable.'
    ],
    'delivery' => [
        [
            'key' => 'Without Drawing Approval',
            'value' => '_____ Weeks from the date of commercially & technically cleared PO.'
        ],
        [
            'key' => 'With Drawing Approval',
            'value' => '____ weeks from the date of receipt of clear drawing approval / manufacturing clearance whichever is later. Drawing shall be provided for approval within 30 days from the date of commercially & technically cleared PO.							'

        ]
        // [
        //     'key' => 'Without Drawing Approval',
        //     'value' => $withoutDrawingApprovalInput . 'Weeks from the date of commercially & technically cleared PO.'
        // ],
        // [
        //     'key' => 'With Drawing Approval',
        //     'value' => $withDrawingApprovalInput . '____ weeks from the date of receipt of clear drawing approval / manufacturing clearance whichever is later. Drawing shall be provided for approval within 30 days from the date of commercially & technically cleared PO.							'

        // ]
    ],
    'inventoryHoldingCharges' => [
        'key' => 'Default',
        'value' => 'In case material is not lifted within 15 days from the date of readiness then inventory holding
        charges of 0.5% per week shall be applicable on the same.
',
    ],
    'ldClause' => [
        'key' => 'Default',
        'value' => 'As per ABB policy, we do not accept any L.D. clause.'
    ],
    'scope' => [
        'key' => 'Scope',
        'value' => 'Our scope of work is limited to supply of above items only, unless otherwise mentioned as a part of this offer.
            Optional additional manual input'
    ],
];
