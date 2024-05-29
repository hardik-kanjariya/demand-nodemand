<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\status; 
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function showdata(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
          ],[
            'username.required' => 'This Username is required',
            'password.required' => 'This Field required',
          ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->hasrole('admin')){
              
                $data = status::all(); 
                return view('req_list', ['data' => $data]);
            }

            else{
                $data = Details::all();
                return view('list', ['data' => $data]);            }   
          }
        else{
            return redirect()->route('login');
            // ->withErrors(['login' => 'Login Details are Invalid']);
        }
    }
    public function showform(){

        if(Auth::user()){
            if(Auth::user()->hasrole('admin')){
                return view('form1');
            }

            elseif(Auth::user()->hasrole('it')){
                return view('');
            }

            elseif(Auth::user()->hasrole('tele')){
                return view('');
            }

            elseif(Auth::user()->hasrole('dc')){
                return view('');
            }

            elseif(Auth::user()->hasrole('sim')){
                return view('');
            }
        
        }
        else{
            return redirect()->route('login');
        }
    }
}

