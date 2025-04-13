<?php

namespace App\Http\Controllers;

use App\Services\AwesomeAPICotacoes\AwesomeAPI;
use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{
    private AwesomeAPI $api;
    
    public function __construct(AwesomeAPI $api)
    {
        $this->api = $api;
    }

    public function convert(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'min:0.50', 'numeric'],
            'from' => ['required', 'string'],
            'to' => ['required', 'string']
        ]);

        $amount =  $this->api->getCurrency($request->input('from'), $request->input('to'), $request->input('amount'));

        dd($amount);
    }
}
