<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QRPaymentController extends Controller
{
    public function index(Request $request)
    {
        // Lấy danh sách ngân hàng từ API VietQR
        $response = Http::get('https://api.vietqr.io/v2/banks');
        $banks = [];
        if ($response->successful()) {
            $resp = $response->json();
            $banks = $resp['data'] ?? [];
        }
        return view('tools.qr-payment', [
            'banks' => $banks,
        ]);
    }
    public function create(Request $request)
    {
        $url = "https://img.vietqr.io/image/"
            . trim($request->bank_id) . "-"
            . trim($request->account_no)
            . "-compact2.png"
            . "?amount=" . urlencode($request->amount)
            . "&addInfo=" . urlencode($request->addInfo)
            . "&accountName=" . urlencode($request->accountName);

        return response()->json(['url' => $url]);
    }
}
