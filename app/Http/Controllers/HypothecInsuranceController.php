<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HypothecInsuranceRequest;
use App\Models\Bitrix24;

class HypothecInsuranceController extends Controller
{
    public function page()
    {
        return view('templates.hypothec-insurance');
    }

    public function postForm(HypothecInsuranceRequest $request)
    {
        Bitrix24::createMortgageCalculationLead($request->validated());
        return response()->json(['success' => true]);
    }
}
