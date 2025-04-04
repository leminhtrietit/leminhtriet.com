<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSocialAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('user_social_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('provider'); // ví dụ: 'google'
            $table->string('provider_user_id'); // ID từ Google
            $table->text('provider_token')->nullable();
            $table->text('provider_refresh_token')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['provider', 'provider_user_id']); // mỗi provider, provider_user_id duy nhất
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_social_accounts');
    }
}
