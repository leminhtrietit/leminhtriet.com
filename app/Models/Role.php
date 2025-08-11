<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Role extends Model
{
    use HasFactory;

    // Nếu tên bảng khác 'roles'
    protected $table = 'roles';

    // Nếu khóa chính không phải là 'id'
    // protected $primaryKey = 'role_id';

    // Nếu bạn muốn tắt timestamps (created_at, updated_at)
    // public $timestamps = false;

    // Các thuộc tính có thể gán hàng loạt
    protected $fillable = ['name', 'guard_name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'model_has_roles', 'role_id', 'model_id')
                    ->where('model_type', User::class); // Thêm điều kiện này nếu cần
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions', 'role_id', 'permission_id');
    }
}
