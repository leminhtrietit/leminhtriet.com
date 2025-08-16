<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QrCodeController extends Controller
{
    // Giữ nguyên phương thức showForm()
    public function showForm()
    {
        return view('qrcode.create');
    }
}