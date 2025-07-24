<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $table = 'resources';

    protected $fillable = [
'appname',
        'version',
        'category',      // Thêm để phân loại
        'description',   // Thêm để mô tả
        'logo_url',      // Thêm để hiển thị logo
        'link_truycap',
        'ten_hanhdong',
        'trangthai_link',
    ];
}
