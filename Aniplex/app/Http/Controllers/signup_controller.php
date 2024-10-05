<?php

namespace App\Http\Controllers;

use App\Models\Nerd;
use Illuminate\Http\Request;



class signup_controller extends Controller
{
    public function get_signup_page(){
        return view('signup');
    }

    public function post_signup_data(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required', 
            'password_confirmation' => 'required|same:password'
        ]);

        $nerd = new Nerd();
        $nerd->name = $request->name;
        $nerd->email = $request->email;
        $nerd->password = md5($request->password);
        $nerd->save();
        return redirect('/login');
    }

}
