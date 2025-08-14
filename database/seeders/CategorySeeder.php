<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; // Import model Category
use Illuminate\Support\Facades\DB; // Import DB Facade

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tắt kiểm tra khóa ngoại để tránh lỗi khi seeding
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Xóa dữ liệu cũ trong bảng để tránh trùng lặp nếu chạy lại seeder
        Category::truncate();

        $categories = [
            [
                'name' => 'Hướng dẫn',
                'slug' => 'huong-dan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chia sẻ kiến thức',
                'slug' => 'chia-se-kien-thuc',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Khóa học',
                'slug' => 'khoa-hoc',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Công cụ',
                'slug' => 'cong-cu',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Chèn dữ liệu vào bảng categories
        Category::insert($categories);

        // Bật lại kiểm tra khóa ngoại
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}