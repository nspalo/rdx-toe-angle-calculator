<?php

// declare(strict_types=1);

require __DIR__ . '/src/vendor/autoload.php';

use App\Services\RearToeAngleService;

if ($argc <= 1) {
    echo 'ERROR! Invalid number of arguments.' . PHP_EOL;
    echo 'command: ' . PHP_EOL;
    echo '_$ php rdx-toe.php <susBlockRF> <bushingRF> <susBlockRR> <bushingRR>' . PHP_EOL;
    die();
}

/**
 * $argv[1] = $susBlockRF
 * $argv[2] = $bushingRF
 * $argv[3] = $susBlockRR
 * $argv[4] = $bushingRR
 */
$service = new RearToeAngleService($argv[1], $argv[2], $argv[3], $argv[4]);

$service->displayRearToeAngleData();
