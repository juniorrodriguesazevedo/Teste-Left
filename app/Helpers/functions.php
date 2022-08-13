<?php

use Illuminate\Support\Str;


function cpfMask($str)
{
    // Formata o CPF

    if (strlen($str) == 11) {
        $mask = '###.###.###-##';
    } else {
        $mask = '##.###.###/####-##';
    }

    $str = str_replace(" ", "", $str);

    for ($i = 0; $i < strlen($str); $i++) {
        $mask[strpos($mask, "#")] = $str[$i];
    }

    return $mask;
}

function phoneMask($str)
{
    //Formata o telefone

    if (!$str) {
        return $str;
    }

    $mask = '(##) #####-####';

    if (strlen($str) == 10) {
        $mask = '(##) ####-####';
    }

    $str = str_replace(" ", "", $str);

    for ($i = 0; $i < strlen($str); $i++) {
        $mask[strpos($mask, "#")] = $str[$i];
    }

    return $mask;
}

function removePriceMask($value)
{
    // Remove máscara do preço

    $price = Str::of($value)->replace(['R$', ' ', '.'], '')->replaceLast(',', '.');

    return $price;
}
