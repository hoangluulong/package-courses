<?php

namespace Courses\Courses\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    //tên bảng
    protected $table = 'users';

    //khóa chính
    protected $primaryKey = 'user_id';

    //các cột được phép thay đổi
    protected $fillable = [
        'user_name',
        'user_email',
        'usertype_id',
        'status',
        'group_id',
        'user_password',
        'faculty_id'
    ];

    public function getAuthPassword()
    {
        return $this->user_password;
    }

    static function getUsers()
    {
        return User::all();
    }

    static function getUserById($id)
    {
        return User::find($id);
    }

    static function insertUser($request)
    {
        return User::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'usertype_id' => 4,
            'user_password' => bcrypt($request->password),
            'faculty_id' => 1,
            'group_id' => 1,
            'status' => 1,
        ]);
    }

    static function updateUser($request)
    {
        $user = User::getUserById($request->user_id);
        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->usertype_id = $request->usertype_id;
        $user->status = $request->status;
        $user->user_password = $request->user_password;
        $user->faculty_id = $request->faculty_id;
        $user->save();
    }
}
