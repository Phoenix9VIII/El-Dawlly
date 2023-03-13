<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\signup;
class host extends Controller
{
    public function l_savedata(Request $req){
        $req->validate([
            't_email'=>'required|email',
            't_password'=>'required',
         ]);
         $email=$req->input('t_email');
         $password=$req->input('t_password');
         $check=signup::where('email','=',$email)->count();
         if($check > 0){
            $hash_password=signup::where('email','=',$email)->value('password');
            if(Hash::check($password,$hash_password)){  // True
                $req->session()->put('t_email',$email);
                return redirect('index');
            }else{
                $req->session()->flash('check_login','exist');
                return redirect('login');
    
            }
         }else{
            $req->session()->flash('check_login','exist');
            return redirect('login');
        
         }
        
    }

    public function savedata(Request $req){
        $req->validate([
            't_name'=>'required',
            't_email'=>'required',
            't_password'=>'required',
         ]);
         
        $email=$req->input('t_email');
        $check=signup::where('email','=',$email)->count();
        if($check > 0){
            $req->session()->flash('check_email','exist');
            return redirect('login');

        }else{ 

            $b=new signup;
            $b->name=$req->input('t_name');
            $b->email=$req->input('t_email');
            $b->password=Hash::make($req->input('t_password'));
            $b->save();
            // session part here \\
            $email=$req->input('t_email');
            $req->session()->put('t_email',$email);
            return redirect('index');

        }

        
    }


}