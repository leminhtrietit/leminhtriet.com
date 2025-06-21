<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email',
        'password',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at', // Phải có ở đây nếu dùng mass assignment

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function personalInfo()
    {
        return $this->hasOne(\App\Models\PersonalInfo::class);
    }
    public function getNameAttribute(): string
    {
        // Nếu personalInfo chưa tồn tại hoặc cột name bị null, trả về chuỗi mặc định
        return $this->personalInfo->name ?? 'No Name';
    }         
    public function socialAccounts()
    {
        return $this->hasMany(\App\Models\UserSocialAccount::class);
    }             
    // public function givePermissionTo(string $permission)
    // {
    //     $permissions = $this->permissions ?? [];
    //     if (!in_array($permission, $permissions)) {
    //         $permissions[] = $permission;
    //         $this->permissions = $permissions;
    //         $this->save();
    //     }
    // }

    // public function revokePermissionTo(string $permission)
    // {
    //     $permissions = $this->permissions ?? [];
    //     $permissions = array_diff($permissions, [$permission]);
    //     $this->permissions = $permissions;
    //     $this->save();
    // }

    // public function hasPermissionTo(string $permission): bool
    // {
    //     $permissions = $this->permissions ?? [];
    //     return in_array($permission, $permissions);
    // }
    public function givePermissionTo(string $permission)
    {
        $permissions = (array)($this->permissions ?? []); // Explicitly cast to array
        if (!in_array($permission, $permissions)) {
            $permissions[] = $permission;
            $this->permissions = $permissions;
            $this->save();
        }
    }

    public function revokePermissionTo(string $permission)
    {
        $permissions = (array)($this->permissions ?? []); // Explicitly cast to array
        $permissions = array_diff($permissions, [$permission]);
        $this->permissions = $permissions;
        $this->save();
    }

    public function hasPermissionTo(string $permission): bool
    {
        $permissions = (array)($this->permissions ?? []); // Explicitly cast to array
        return in_array($permission, $permissions);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'model_has_roles', 'model_id', 'role_id')
                    ->withPivot('model_type'); // Thêm withPivot('model_type')
    }

     
}
