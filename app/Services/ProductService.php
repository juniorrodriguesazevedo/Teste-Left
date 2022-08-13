<?php

namespace App\Services;

class ProductService
{
    public static function listProducts()
    {
        return [
            [
                'category_id' => 1,
                'name' => 'Cola-Cola',
                'price' => 8.90,
                'is_active' => 'Sim'
            ],
            [
                'category_id' => 2,
                'name' => 'Maça',
                'price' => 1.00,
                'is_active' => 'Sim'
            ],
            [
                'category_id' => 3,
                'name' => 'Alface',
                'price' => 2.00,
                'is_active' => 'Sim'
            ],
            [
                'category_id' => 4,
                'name' => 'Caneta',
                'price' => 1.50,
                'is_active' => 'Sim'
            ],
            [
                'category_id' => 5,
                'name' => 'Amaciante',
                'price' => 9.60,
                'is_active' => 'Sim'
            ],
            [
                'category_id' => 6,
                'name' => 'TV',
                'price' => 990.90,
                'is_active' => 'Sim'
            ],
            [
                'category_id' => 7,
                'name' => 'Carrinho',
                'price' => 10.00,
                'is_active' => 'Sim'
            ],
            [
                'category_id' => 8,
                'name' => 'Chuteira',
                'price' => 190.00,
                'is_active' => 'Sim'
            ],
        ];
    }
}
