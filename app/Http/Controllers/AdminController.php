<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\status; 
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function approve($cpf){
        $user = Auth::user();
        $status = status::where('cpf', $cpf)->first(); // Assuming Status model is capitalized
        // dd($status);
        if(!$status) {
            // Handle case where status is not found for the given CPF
            return redirect()->back()->with('error', 'Status not found for the given CPF.');
        }
    
        if($user->hasRole('it')){
            $status->it = "Approved";
        } elseif($user->hasRole('tele')){
            $status->tele = "Approved";
        } elseif($user->hasRole('dc')){
            $status->dc = "Approved";
        } elseif($user->hasRole('sim')){
            $status->sim = "Approved";
        } else {
            // Handle case where user role is not recognized
            return redirect()->back()->with('error', 'User role not recognized.');
        }
    
        $status->save(); // Save the changes to the status object
        // dd('hello');
        return redirect()->route('showdata');
    }
    
}
