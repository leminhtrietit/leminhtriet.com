<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_navbars_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('name_vi'); // Tên hiển thị Tiếng Việt
            $table->string('name_en'); // Tên hiển thị Tiếng Anh
            $table->string('url');     // Đường dẫn (link)
            $table->integer('order')->default(0); // Thứ tự sắp xếp
            $table->boolean('is_active')->default(true); // Để bật/tắt link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};