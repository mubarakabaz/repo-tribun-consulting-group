<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |----------------------------------------------
    | Login Controller
    |----------------------------------------------
    |
    | Controller ini menangani otentikasi pengguna yang sudah ada.
    | kami menggunakannya untuk mengarahkan semua pengguna ke rute /home (login)
    | dan kami mengarahka pengguna setelah berhasil login.
    |
    */

    protected $redirectTo = RouteServiceProvider::HOME;

    public function username(){
        return 'email';
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function __construct(){
        // Hanya tamu yang dapat mengakses form login dan proses login
        $this->middleware('guest')->except('logout');
    }
}
