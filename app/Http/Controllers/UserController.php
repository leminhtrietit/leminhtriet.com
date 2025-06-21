<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function assignPermission(User $user)
    {
        $user->givePermissionTo('create_post');
        return 'Permission assigned successfully';
    }

    public function checkPermission(User $user)
    {
        if ($user->hasPermissionTo('create_post')) {
            return 'User has permission to create post';
        } else {
            return 'User does not have permission to create post';
        }
    }

    // ...
}