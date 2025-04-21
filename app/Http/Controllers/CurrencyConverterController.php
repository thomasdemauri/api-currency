<?php

namespace App\Http\Controllers;

use App\Services\AwesomeAPICotacoes\AwesomeAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

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
            'amount' => ['required', 'min:0.01', 'decimal:0,2'],
            'from' => ['required', 'string'],
            'to' => ['required', 'string']
        ]);

        $amount =  $this->api->getCurrency($request->input('from'), $request->input('to'), $request->input('amount'));

        $currency = Number::currency($amount, in: $request->to);

        return back()
            ->withInput()
            ->with('amount', $currency);
    }
}
