<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\status; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    public function showdata(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'The username is required.',
            'password.required' => 'The password is required.',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->route('login')->withErrors($validator)->withInput();
        // }

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->hasRole('admin')) {
                $data = status::all();
                return view('req_list', ['data' => $data]);
            } else {
                $data = Details::all();
                return view('list', ['data' => $data]);
            }
        }
        if(Auth::user()){
        if (Auth::user()->hasRole('admin')) {
            $data = status::all();
            return view('req_list', ['data' => $data]);
        } else {
            $data = Details::all();
            return view('list', ['data' => $data]);
        }
    }

        return redirect()->route('login')->with('error', 'Invalid login credentials.');
    }
    public function showform($cpf){

        if(Auth::user()){
            if(Auth::user()->hasrole('admin')){
                $data= status::where('cpf',$cpf);
                return view('admin_form',['data' => $data]);
            }

            elseif(Auth::user()->hasrole('it')){
                $data=Details::where('cpf',$cpf);
                return view('it_form',['data'=>$data]);
            }

            elseif(Auth::user()->hasrole('tele')){
                $data=Details::where('cpf',$cpf);
                return view('tele_form',['data'=>$data]);      
            }

            elseif(Auth::user()->hasrole('dc')){
                $data=Details::where('cpf',$cpf)->first();
                return view('dc_form',['data'=>$data]);      
            }

            elseif(Auth::user()->hasrole('sim')){
                $data=Details::where('cpf',$cpf);
                return view('mob_form',['data'=>$data]);
            }
        
        }
        else{
            return redirect()->route('login');
        }
    }
}

