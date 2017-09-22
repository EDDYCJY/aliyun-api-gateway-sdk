<?php
require_once __DIR__ . '../../../vendor/autoload.php';

use ApiGateway\Model\Api\DescribeApiLatencyData;
use ApiGateway\ApiService;

$object = new DescribeApiLatencyData();
$object->setGroupId();
$object->setApiId();
$object->setStartTime();
$object->setEndTime();

$serviceObj = new ApiService($object);
$response   = $serviceObj->get();

print_r($response);