<?php
require_once "vendor/autoload.php";

use Class\MapAPI;
use Class\SearchAPI;
echo "<pre>";

$searchAPI = new SearchAPI();
$exampleOne = $searchAPI->generateQuery(["q" => "Coffee", 'location' => "Austin"]);
/*
Results = local_results = [
    places => [
            [
            'position'=>1,
            'rating'=>5,
            'reviews'=>4,
            'price'=>25,
            ...
            ...
            ...
            ...
            ],
            ...
            ]
];
*/
if (!empty($exampleOne['local_results']['places']) & is_array($exampleOne['local_results']['places'])) {
    foreach ($exampleOne['local_results']['places'] as $placeDetail) {
        print_r($placeDetail);
        exit;
    }
}


/** 
 * Manage API KEY
 */
$mapAPI = new MapAPI();
$exampleTwo = $mapAPI->generateQuery(["q" => "Coffee", 'll' => '@40.7455096,-74.0083012,14z']);
