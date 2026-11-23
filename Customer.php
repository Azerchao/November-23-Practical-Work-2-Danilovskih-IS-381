<?php
declare(strict_types=1);

namespace Shop\Models;

class Customer
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
    ) {
    }
}
