<?php

namespace App\Services;

use App\DTOs\SummonerResponseDto;

class SummonerService 
{
    public function getSummoner(string $gameTag, string $region): SummonerResponseDto
    {
        return new SummonerResponseDto(
            gameTag: $gameTag,
            region: $region
        );
    }
}