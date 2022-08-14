<?php

namespace App\Services;

class CategoryService
{
    public static function listCategories()
    {
        return [
            [
                'name' => 'Bebidas',
            ],
            [
                'name' => 'Frutas',
            ],
            [
                'name' => 'Verduras',
            ],
            [
                'name' => 'Papelaria',
            ],
            [
                'name' => 'Limpeza',
            ],
            [
                'name' => 'Eletrônicos',
            ],
            [
                'name' => 'Brinquedos',
            ],
            [
                'name' => 'Esporte',
            ],
        ];
    }
}
