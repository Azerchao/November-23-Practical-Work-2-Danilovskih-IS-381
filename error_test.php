<?php
declare(strict_types=1);

// Пункт 7: класс Shop\Models\Order не существует (пока не перенесён bonus/Order.php)
require __DIR__ . '/vendor/autoload.php'; // или autoload.php

try {
    $order = new Shop\Models\Order();
} catch (Error $e) {
    echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
    // Error: Class "Shop\Models\Order" not found
}
