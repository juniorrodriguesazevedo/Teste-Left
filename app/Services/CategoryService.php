<?php

namespace App\Services;

class CategoryService
{
    public static function listCategories()
    {
        return [
            [
                'name' => 'Bebidas',
                'is_active' => 'Sim'
            ],
            [
                'name' => 'Frutas',
                'is_active' => 'Sim'
            ],
            [
                'name' => 'Verduras',
                'is_active' => 'Sim'
            ],
            [
                'name' => 'Papelaria',
                'is_active' => 'Sim'
            ],
            [
                'name' => 'Limpeza',
                'is_active' => 'Sim'
            ],
            [
                'name' => 'Eletrônicos',
                'is_active' => 'Sim'
            ],
            [
                'name' => 'Brinquedos',
                'is_active' => 'Sim'
            ],
            [
                'name' => 'Esporte',
                'is_active' => 'Sim'
            ],
        ];
    }
}
