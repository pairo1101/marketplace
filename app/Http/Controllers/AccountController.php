<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAccountRequest;
use App\Models\Account;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(){
        return view('index');
    }

    public function userRegistration(){
        return view('register');
    }

    public function postUser(RegisterAccountRequest $request){
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        $newUser = Account::create($data);

        return redirect(route('index'));
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only(['email','password']))) {
            $request->session()->regenerate();

            $user = Auth::user();


 
            return redirect(route('user.home', [
                'user' => $user
            ])
            );
    }


    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

    
}


    public function home(Account $user){
        $listings = Listing::all();
        return view('home.dashboard', [
            'user' => $user,
            'listings' => $listings
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }
}
