<?php



namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class sinuplogcontoller extends Controller
{


function index () {
        return view('pages/SignUp');

}


function store( Request $request) {
     $user=new User();
     $user->create( $request->except('sigup')    );
     return redirect()->intended('/question');

}


function lo () {
    return view('pages/login');
}
public function ogd( Request $request) {


    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/home');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}

}

