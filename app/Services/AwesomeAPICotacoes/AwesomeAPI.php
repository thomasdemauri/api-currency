<?php

namespace App\Services\AwesomeAPICotacoes;

use Illuminate\Support\Facades\Http;

class AwesomeAPI {

    private string $baseEndpoint = 'https://economia.awesomeapi.com.br';

    public function getCurrency (string $from, string $to, float $amount): float|string
    {
        // Requisicao get
        $response = Http::withOptions([
            'verify' => false,
        ])->get("$this->baseEndpoint/$from-$to");
        
        if ($response->failed()) {
            return 'Falha na API. Por favor tente mais tarde ou tente outra moeda.';
        }

        $response->json();

        return $response[0]['high'] * $amount;
    }
}