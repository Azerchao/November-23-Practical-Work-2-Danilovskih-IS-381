<?php
declare(strict_types=1);

// Вариант 1: собственный автозагрузчик (с отладочным выводом)
require __DIR__ . '/autoload.php';

use Shop\Helpers\PriceFormatter;
use Shop\Models\Customer;
use Shop\Models\Product;
use Shop\Services\Cart;

echo "Создаём покупателя..." . PHP_EOL;
$customer = new Customer('Анна Смирнова', 'anna@example.com');

echo "Создаём корзину..." . PHP_EOL;
$cart = new Cart($customer);

echo "Добавляем товары..." . PHP_EOL;
$cart->add(new Product('Клавиатура', 1250.0), 1);
$cart->add(new Product('Мышь', 790.5), 2);
$cart->add(new Product('Коврик', 300.0), 3);

echo "Считаем сумму..." . PHP_EOL;
echo "Покупатель: {$cart->getCustomer()->name}" . PHP_EOL;
echo "Итого: " . PriceFormatter::format($cart->getTotal()) . PHP_EOL;
