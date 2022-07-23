<?php

// src/Service/NameGenerator.php
namespace App\Service;

class NameGenerator
{
    /**
     * @var AnimeGenerator
     */
    private $animeGenerator;

    public function __construct(AnimeGenerator $animeGenerator)
    {
        $this->animeGenerator = $animeGenerator;
    }

    public function nameGenerator(): string
    {
        $message = 'Senin karakterin '.$this->animeGenerator->animeRand();
        return  $message;
    }
}   