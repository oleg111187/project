<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 11.03.2019
 * Time: 20:56
 */


namespace App\Http\Controllers;

use app\User;
use ClassPreloader\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function validationUsers()
    {
        session_start();
        $user = User::where('name', '=', Input::get('username'))->first();
        if (!$user) {
            return back()->withErrors(['Wrong login or password']);
        }
        if ($user->role === Config::get('constants.role.admin') && Hash::check(Input::get('password'), $user->password)) {
            $_SESSION['user'] = 'admin';
            return redirect()->intended('/articles'); //redirect to admin panel
        }
        return back()->withErrors(['Wrong login or password!']);
    }
}