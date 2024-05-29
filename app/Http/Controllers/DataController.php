<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\status;
use Auth;


class DataController extends Controller
{
    public function showdata(){
        $data = Details::all();
        if(Auth::user()->hasrole('user5')){
            $data = status::all();
            return view('req_list',['data'=>$data]);
        }
        else{
            $data = Details::all();
            return view('list', ['data' => $data]);
        }

    }
}
