<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\status; 
use App\Models\Datacard; 
use App\Models\Mobile; 
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
            }
            elseif(Auth::user()->hasrole('dc') || Auth::user()->hasrole('mob') ){
                $data = Details::all();
                $status=status::all();
               return view('file_list', ['data' => $data],['status' => $status]);
       }
        else {
                $data = Details::all();
                $status=status::all();
                return view('list', ['data' => $data],['status' => $status]);
            }
        }
        if(Auth::user()){
        if (Auth::user()->hasRole('admin')) {
            $data = status::all();
            return view('req_list', ['data' => $data]);
        } 
        elseif(Auth::user()->hasrole('dc') || Auth::user()->hasrole('mob') ){
            $data = Details::all();
            $status=status::all();

           return view('file_list', ['data' => $data],['status' => $status]);
        }

        else {
            $data = Details::all();
            $status=status::all();
            return view('list', ['data' => $data],['status' => $status]);
        }
    }

        return redirect()->route('login')->with('error', 'Invalid login credentials.');
    }
    public function showform($cpf){

        if(Auth::user()){
            if(Auth::user()->hasrole('admin')){
                $data= Details::where('cpf',$cpf)->first();
                $status=status::where('cpf',$cpf)->first();
                return view('admin_form',['data' => $data],['status'=>$status]);
            }

            elseif(Auth::user()->hasrole('it')){
                $data=Details::where('cpf',$cpf)->first();
                $status=status::where('cpf',$cpf)->first();
                return view('it_form',['data'=>$data],['status'=>$status]);
            }

            elseif(Auth::user()->hasrole('tele')){
                $data=Details::where('cpf',$cpf)->first();
                $status=status::where('cpf',$cpf)->first();
                return view('tele_form',['data'=>$data],['status'=>$status]);      
            }

            elseif(Auth::user()->hasrole('dc')){
                $data=Details::where('cpf',$cpf)->first();  
                $status=status::where('cpf',$cpf)->first();
                return view('dc_form',['data'=>$data],['status'=>$status]);      
            }

            elseif(Auth::user()->hasrole('mob')){
                $data=Details::where('cpf',$cpf)->first();
                $status=status::where('cpf',$cpf)->first();
                return view('mob_form',['data'=>$data],['status'=>$status]);
            }
        
        }
        else{
            return redirect()->route('login');
        }
    }
    public function uploadfile(Request $request){

        $filename=$request->file('datacard_file');

        if (!file_exists($filename) || !is_readable($filename)) {
            echo ("File not found or is not readable: $filename");
            return;
        }

        $file = fopen($filename, "r");
        $dataArr = [];
        $i = 0;

        while (($filedata = fgetcsv($file,10000, ",")) !== FALSE) {
            if ($i++ == 0) continue; // Skip header row
            $dataArr[] = $filedata;
        }

        fclose($file);
        if(Auth::user()->hasrole('dc')){

        $i=1;
        Datacard::truncate();
        foreach ($dataArr as $value) {
             $dc = Datacard::Create([
                'id' => $i,
                'cpf' => $value[2],
                'provider' => $value[0],
                'number' => $value[3],
            ]);
            $i++;
        }
    }
    elseif(Auth::user()->hasrole('mob')){
        $i=1;
        Mobile::truncate();
        foreach ($dataArr as $value) {
             $dc = Mobile::Create([
                'id' => $i,
                'cpf' => $value[2],
                'service_pro' => $value[0],
                'mobile_no' => $value[3],
            ]);
            $i++;
        }
    }
        return redirect('showdata');
    }

}


