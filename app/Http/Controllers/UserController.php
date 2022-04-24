<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        //如果不存在user或者密码错了
        if (empty($user) || !(Hash::check($req->password, $user->password))) {
            return "Username or password is wrong";
        } else {
            // 把user放在session里面
            $req->session()->put('user', $user);
            return redirect("/");
        }
    }
}
