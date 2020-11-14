<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    // sign Up
    public function getSignUp()
    {
        return view('pages.signUp');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required|max:255',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6'
        ]);
        $user = new User([
            'user_name' => $request->input('user_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        return redirect()->route('index');
    }

    // sign In
    public function getSignIn()
    {
        return view('pages.signIn');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        return redirect()->route('products');
        // if (Auth::attempt($user_data)) {
        //     return redirect()->route('profile');
        //     // echo "hi" ; 
        //     // exit;
        // } else {
        //     // echo "WTF" ; 
        //     // exit;
        //     return redirect()->back();
        // }
    }

    // public function getProfile(){
    //     return view('pages.profile');
    // }
}
