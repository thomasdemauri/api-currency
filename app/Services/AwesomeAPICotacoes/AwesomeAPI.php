<?php

namespace App\Services\AwesomeAPICotacoes;

use Illuminate\Support\Facades\Http;

class AwesomeAPI {

    private string $baseEndpoint = 'https://economia.awesomeapi.com.br';

    public function getCurrency (string $from, string $to, float $amount)
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->get("$this->baseEndpoint/$from-$to")->json();

        return $response[0]['high'] * $amount;
    }


}