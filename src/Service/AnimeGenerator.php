<?php

// src/Service/AnimeGenerator.php
namespace App\Service;

class AnimeGenerator
{
    public function animeRand(): string
    {
        $messages = [
            'Naruto Uzumaki',
            'Uchiha Sasuke',
            'Sakura Trash',
            'Uchiha İtachi',
            'Pokemon Garıgaçıo',
            'Ichigo Kurosaki',
            'Orihime Kun',
            'İshida Uryu',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}   