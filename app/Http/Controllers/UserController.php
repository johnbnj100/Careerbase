<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function signup(){
        return view('resource.signup');
    }

    public function store(Request $request){
        $formfield= $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
            'number' => ['required', 'min:14'],
            'location' => ['required', 'min:3'],
        ]);

            //Hash Password
            $formfield['password'] = bcrypt($formfield['password']);

            //Create User
            $user = User::create($formfield);

            //login
            auth()->login($user);

            return redirect('/')->with('message', 'Signup Successfully');

    }

    //login

    public function login(){
        return view('resource.login');
    }

      //logout
      public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout Successfully');
    }

    //login authentication

    public function authenticate(Request $request){
        $formfield= $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formfield)){
            $request->session()->regenerate();

            return redirect('/')->with('message','You are now logged in');
        }
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }


}
