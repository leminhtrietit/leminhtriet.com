<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class EmailVerification extends Model
{
    use HasFactory;

    /**
     * Tên bảng tương ứng trong database.
     *
     * @var string
     */
    protected $table = 'email_verifications';

    /**
     * Các cột được phép gán giá trị bằng Mass Assignment.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'token',
        'used_at',
    ];

    /**
     * Kiểu dữ liệu date time cho các cột.
     *
     * @var array
     */
    protected $dates = [
        'used_at',
        'created_at',
        'updated_at',
    ];

    /**
     * Định nghĩa quan hệ với bảng users.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Kiểm tra xem link xác thực đã được sử dụng hay chưa.
     *
     * @return bool
     */
    public function isUsed(): bool
    {
        return ! is_null($this->used_at);
    }

    /**
     * Đánh dấu link đã được sử dụng (cập nhật cột used_at).
     *
     * @return void
     */
    public function markAsUsed(): void
    {
        $this->used_at = Carbon::now();
        $this->save();
    }
}
