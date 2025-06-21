<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOnDeleteCascadeToPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('personal_infos', function (Blueprint $table) {
        // Xóa ràng buộc cũ (nếu có)
        $table->dropForeign(['user_id']);
        // Thêm lại ràng buộc với onDelete('cascade')
        $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('personal_infos', function (Blueprint $table) {
        // Khôi phục ràng buộc cũ, nếu cần
        $table->dropForeign(['user_id']);
        $table->foreign('user_id')
              ->references('id')->on('users');
    });
}

}
