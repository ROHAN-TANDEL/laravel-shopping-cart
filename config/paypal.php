<?php 
// return [ 
//     'client_id' => env('AdZC0u1OOMXAEEz2jMqnY0AiDek2xMx9oZKQrr6-ARPpxKdEObSfjT8VHxsdR_8XY_k9qrLJMEpXy5r5',''),
//     'secret' => env('EBeYkrs4RIeqwB0r37-6hiOZnQMeCU_OEubiTsTSSNHyY2J9RZATXWBN-hkSsEkX27nFoOJOaYljU__h',''),
//     'settings' => array(
//         'mode' => env('PAYPAL_MODE','sandbox'),
//         'http.ConnectionTimeOut' => 30,
//         'log.LogEnabled' => true,
//         'log.FileName' => storage_path() . '/logs/paypal.log',
//         'log.LogLevel' => 'ERROR'
//     ),
// ];
// return array (
//     'client_id' => 'AdZC0u1OOMXAEEz2jMqnY0AiDek2xMx9oZKQrr6-ARPpxKdEObSfjT8VHxsdR_8XY_k9qrLJMEpXy5r5',
//     'secret' => 'EBeYkrs4RIeqwB0r37-6hiOZnQMeCU_OEubiTsTSSNHyY2J9RZATXWBN-hkSsEkX27nFoOJOaYljU__h',
// /* SDK configuration 
// */
// 'settings' => array(
// 	/**
// 	* Available option 'sandbox' or 'live'
// 	*/
// 	'mode' => 'sandbox',
// 	/**
// 	* Specify the max request time in seconds
// 	*/
// 	'http.ConnectionTimeOut' => 1000,
// 	/**
// 	* Whether want to log to a file
// 	*/
// 	'log.LogEnabled' => true,
// 	/**
// 	* Specify the file that want to write on
// 	*/
// 	'log.FileName' => storage_path() . '/logs/paypal.log',
// 	/**
// 	* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
// 	*
// 	* Logging is most verbose in the 'FINE' level and decreases as you
// 	* proceed towards ERROR
// 	*/
// 	'log.LogLevel' => 'FINE'
// 	),
// );
//
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID',''),
    'secret' => env('PAYPAL_SECRET',''),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];