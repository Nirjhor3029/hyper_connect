<?php

namespace App\Http\Controllers;

use App\Models\PaySlip;
use Illuminate\Http\Request;

class PaySlipController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'transaction_date' => 'required|date',
            'category' => 'nullable|string|max:255',
            'bank_account_number' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        $validated['student_id'] = auth()->user()->id;
        // PaySlip::create($validated);

        $paySlip = PaySlip::where('student_id', $validated['student_id'])->first();
        if (!isset($paySlip)) {
            $paySlip = new PaySlip();
            $paySlip->student_id = $validated['student_id'];
        }
        $paySlip->transaction_date = $validated['transaction_date'];
        $paySlip->category = $validated['category'];
        $paySlip->bank_account_number = $validated['bank_account_number'];
        $paySlip->amount = $validated['amount'];
        $paySlip->save();

        return response()->json(['message' => 'Pay slip successfully submitted!']);
    }
}
