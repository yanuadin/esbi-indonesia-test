<?php

namespace App\App;

class View
{

    public static function render(string $view, $data = [])
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }

}