<?php
declare(strict_types=1);

// Дополнительно: перенесите этот файл в src/Models/Order.php
namespace Shop\Models;

class Order
{
    public function __construct(public readonly int $id = 1)
    {
    }
}
