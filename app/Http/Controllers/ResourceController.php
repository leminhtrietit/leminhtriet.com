<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceController extends Controller
{
    // public function index()
    // {
    //     $resources = Resource::all();

    //     return view('resource', compact('resources'));
    // }
   public function index()
{
    // 1. Lấy tất cả resource đang hoạt động
    $allResources = Resource::where('trangthai_link', 1)->get();

    // 2. Nhóm chúng lại theo category
    $grouped = $allResources->groupBy('category');

    // 3. ĐỊNH NGHĨA THỨ TỰ MONG MUỐN
    $categoryOrder = [
        'Office',
        'Đồ hoạ',
        'Vẽ kỹ thuật',
        'Workspace',
        'Ứng dụng',
        'Hướng dẫn',
        'Khác',

        // Thêm các category khác vào đây theo đúng thứ tự bạn muốn
    ];

    // 4. SẮP XẾP LẠI COLLECTION DỰA TRÊN THỨ TỰ ĐÃ ĐỊNH NGHĨA
    $categorizedResources = $grouped->sortBy(function ($resources, $category) use ($categoryOrder) {
        $order = array_search($category, $categoryOrder);
        return $order === false ? 999 : $order; // Nếu category không có trong mảng order, đẩy xuống cuối
    });

    // 5. Trả về view với cả 2 biến
    return view('resource', compact('categorizedResources', 'allResources'));
}
}
