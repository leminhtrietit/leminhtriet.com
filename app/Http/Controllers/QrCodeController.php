<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    /**
     * Hiển thị trang tạo mã QR.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('qrcode.create');
    }
}