<?php

namespace App\Http\Controllers;

use App\Services\SummonerService;
use App\Http\Requests\GetSummonerRequest;
use Illuminate\Http\JsonResponse;

class SummonerController extends Controller
{
    private readonly SummonerService $_summonerService;
    public function __construct(SummonerService $summonerService)
    {
        $this->_summonerService = $summonerService;
    }
    public function show(GetSummonerRequest $request, string $gameTag): JsonResponse 
    {
        $region = $request->validated('region');
        $summoner = $this->_summonerService->getSummoner($gameTag, $region);
        return response()->json($summoner);
    }
}
