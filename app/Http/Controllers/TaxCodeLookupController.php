<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TaxCodeLookupController extends Controller
{
    // Hàm xử lý gọi API, trả về array hoặc null
    protected function queryVietQrApi($taxId)
    {
        $apiUrl = "https://api.vietqr.io/v2/business/" . urlencode($taxId);
        $response = Http::get($apiUrl);
        if ($response->successful()) {
            $data = $response->json();
            if (!empty($data['data'])) {
                return $data['data'];
            }
        }
        return null;
    }

    // Giao diện truyền thống (submit reload)
    public function lookup(Request $request)
    {
        $request->validate([
            'tax_id' => 'required'
        ]);
        $taxId = $request->input('tax_id');
        $data = $this->queryVietQrApi($taxId);
        if ($data) {
            return view('tools.lookup-taxcode', [
                'data' => ['data' => $data], // giữ nguyên key để không phải sửa blade nhiều
                'taxId' => $taxId,
            ]);
        } else {
            return view('tools.lookup-taxcode', [
                'error' => 'Không tìm thấy mã số thuế hoặc hệ thống lỗi.',
                'taxId' => $taxId,
            ]);
        }
    }

    // API cho AJAX (trả JSON)
    public function taxcodeApi(Request $request)
    {
        $taxId = $request->input('tax_id');
        // Kiểm tra hợp lệ (mã số thuế là số, 10-14 ký tự)
        if (empty($taxId) || !preg_match('/^\d{10,14}$/', $taxId)) {
            return response()->json([
                'success' => false,
                'message' => 'Mã số thuế không hợp lệ!'
            ]);
        }
        $data = $this->queryVietQrApi($taxId);
        if ($data) {
            return response()->json([
                'success' => true,
                'data' => [
                    'id' => $data['id'] ?? '',
                    'name' => $data['name'] ?? '',
                    'internationalName' => $data['internationalName'] ?? '',
                    'shortName' => $data['shortName'] ?? '',
                    'address' => $data['address'] ?? ''
                ]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy mã số thuế này!'
            ]);
        }
    }
}
