<?php
require __DIR__.'/vendor/autoload.php';

$client = new \GuzzleHttp\Client([
    'base_url' => 'http://localhost:8000',
    'defaults' => [
        'exceptions' => false
    ]
]);

$response = $client->post('/api/comment/2/plus');
echo "Plus vote:";
echo $response;
echo "\n\n";

$response = $client->post('/api/comment/2/minus');
echo 'Minus vote:';
echo $response;
echo "\n\n";

$response = $client->post('/api/comment/2/total');
echo 'Total votes:';
echo $response;
echo "\n\n";
