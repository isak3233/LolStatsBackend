<?php

namespace App\DTOs;

class SummonerResponseDto 
{
    public function __construct(
        public readonly string $gameTag,
        public readonly string $region
    ){}
}