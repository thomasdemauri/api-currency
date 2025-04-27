<?php

namespace App\Http\Controllers;

use App\Services\AwesomeAPICotacoes\AwesomeAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

use function PHPSTORM_META\type;

class CurrencyConverterController extends Controller
{
    private AwesomeAPI $api;
    
    public function __construct(AwesomeAPI $api)
    {
        $this->api = $api;
    }

    public function home()
    {
        return view('home');
    }

    public function convert(Request $request)
    {
        $payload = $request->validate([
            'amount' => ['required', 'min:0.01', 'decimal:0,2'],
            'from' => ['required', 'string'],
            'to' => ['required', 'string']
        ]);

        $amount =  $this->api->getCurrency($payload['from'], $payload['to'], $payload['amount']);

        if (is_numeric($amount)) {
            $amount = Number::currency($amount, in: $request->to);
        }

        return back()
            ->withInput()
            ->with('amount', $amount);
    }
}
