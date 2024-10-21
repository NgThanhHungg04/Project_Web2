<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login_index()
    {
        return view('auth.login');
    }
    public function login_post(Request $request){
        $user = $this->user->where([
            ['email',$request->email],
            ['password',$request->password]
        ])->get();
        if ($user) {
            Session::put('user_admin', $user);
            return redirect('/admin');
        }

        return View();
    }
}