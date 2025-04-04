<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'identitynumber',
        'name',
        'dateofbirth',
        'phone',
        'address',
        'placeofbirth',
        'gender',
        'user_id',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'personal_info_id');
    }
  
    public function getDisplayNameAttribute()
    {
        return "{$this->name} - {$this->identitynumber} - {$this->phone}";
    }
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
