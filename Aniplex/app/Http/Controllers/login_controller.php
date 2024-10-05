<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nerd;

class login_controller extends Controller
{
    public function get_login_page(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $nerd = Nerd::where('email', $request->email)->where('password', md5($request->password))->first();
        if($nerd){
            session(['nerd_id' => $nerd->id]);
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
    }
    
    public function get_dashboard_page(){
        if(session('nerd_id') == null){
            return redirect('/login');
        }else{
            return view('dashboard');
        }
        
    }

    public function logout(){
        session()->flush();
        return redirect('/login');
    }
    
}
