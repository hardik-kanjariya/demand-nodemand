<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\status; 
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function approve($cpf){
        $user=Auth::user();
        $status = status::where('cpf', $cpf)->first();
        if($user->hasrole('it')){
            $status->it="Approved";
            return view('list');
        }

            elseif($user->hasrole('tele')){
                $status->tele="Approved";
                return view('list');
            }

            elseif($user->hasrole('dc')){
                $status->dc="Approved";
                return view('list');
            }

            elseif($user->hasrole('sim')){
                $status->sim="Approved";
                return view('list');
            }
    }
}
