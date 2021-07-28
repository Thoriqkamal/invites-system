<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auths.login');
    }

    public function postLogin(Request $request)
    {
        $hasil = DB::table('CMS_USERS')->select('username','password')
        ->where('username', '=', $request->username)
        ->where('password', '=', $request->password)
        ->first();
        
        if (isset($hasil->username)) {
            session()->put('username', $hasil->username);
            session()->put('position', $hasil->password);
            $checkUser = true;
        } else {
            $checkUser = false;
        }

        if ($checkUser == true) {
            return redirect('/home');
        }else {
            $reason = 'Username or password not register';
        }
        return redirect('/?notifbox=' . base64_encode('false') . '&reason=' . base64_encode($reason));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function errorPrivilegePage()
    {
        return view('auths.error_privilege');
    }
}
