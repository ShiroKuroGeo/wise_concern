<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authenticationController extends Controller
{

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('user_id', Auth::user()->id);

            if($user != null){
                return redirect('/admin');
            }

            // if ($user->role == 1) {
            //     return redirect('/admin');
            // } elseif ($user->role == 2) {
            //     return redirect('/admin');
            // } else {
            //     return back()->with('error', 'Invalid role');
            // }
        }

        return back()->with('error', 400);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user_id');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin-login')
            ->withSuccess('You have logged out successfully!');;
    }
}
