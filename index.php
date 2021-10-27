<?php
require_once __DIR__ . '/vendor/autoload.php';

use \ElasticSearch\Client;
// The recommended way to go about things is to use an environment variable called ELASTICSEARCH_URL
try {
    //sudo curl --location --request PUT 'http://localhost:9200/default-index'
    $elasticSearchClient = Client::connection();
} catch (Exception $e) {
    echo $e->getMessage(); exit();
}

$id = 22;
$elasticSearchClient->index(['title' => 'My cool document'], $id);
print_r($elasticSearchClient->search('title:cool') ?? false);
//print_r($elasticSearchClient->delete($id));
