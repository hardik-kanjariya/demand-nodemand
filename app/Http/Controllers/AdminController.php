<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\status; 
use App\Models\Mobile;
use App\Models\Datacard;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function approve($cpf,Request $request){
        $user = Auth::user();
        $status = status::where('cpf', $cpf)->first(); 
        $remark=$request->input('remark');
        // dd($status);
        if(!$status) {
            // Handle case where status is not found for the given CPF
            return redirect()->back()->with('error', 'Status not found for the given CPF.');
        }
    
        if($user->hasRole('it')){
            $status->it = "Approved";
            $status->it_remark=$remark;
        } elseif($user->hasRole('tele')){
            $status->tele = "Approved";
            $status->tele_remark=$remark;

        } elseif($user->hasRole('dc')){
            $status->dc = "Approved";
            $status->dc_remark=$remark;

        } elseif($user->hasRole('mob')){
            $status->mob = "Approved";
            $status->mob_remark=$remark;

        } else {
            // Handle case where user role is not recognized
            return redirect()->back()->with('error', 'User role not recognized.');
        }
    
        $status->save(); // Save the changes to the status object
        // dd('hello');
        return redirect()->route('showdata');
    }


    public function newreq(Request $request){
        $demo=['name','section','designation','reason','transfer to','relleving date','epabx_o','epabx_r','landline_o','landmine_r','l make','l_model','l_srno','remark'];
        $cpf = $request->input('cpfNumber');
        $dc = Datacard::where('cpf',$cpf)->first();
        $mob = Mobile::where('cpf',$cpf)->first();
        $req = new Details();
        $req->cpf = $cpf;
        $req->iom_ref_no = $request->input('iomnumber');
        $req->name = $demo[0];
        $req->section = $demo[1];
        $req->designation = $demo[2];
        $req->reason = $request->input('reason');
        $req->transfer_to = $request->input('transferTo');
        $req->relleving_date = $request->input('relievingDate');
        $req->epabx_o = $demo[6];
        $req->epabx_r = $demo[7];
        $req->landline_o = $demo[8];
        $req->landline_r = $demo[9];
        $req->mob_no = $mob->mobile_no;
        $req->sim_provide = $mob->service_pro;
        $req->dc_no = $dc->number;
        $req->dc_provider = $dc->provider;
        $req->l_make = $demo[10];
        $req->l_model = $demo[11];
        $req->l_srno = $demo[12];
        $req->remark= $demo[13];
        $req->save();
        $st = new status();
        $st->cpf = $cpf;
        $st->iom_ref_no = $request->input('iomnumber');
        $st->save();
        return redirect()->route('showdata');
    }
    // public function download($cpf)
    // {
    //     $data = Details::where('cpf', $cpf)->first();
    //     $status = Status::where('cpf', $cpf)->first(); 
    

    //     if (!$data || !$status) {
 
    //         return response()->json(['error' => 'Data not found'], 404);
    //     }
    
    //     $html = View::make('document', compact('data', 'status'))->render();
    

    //     $options = new Options();
    //     $options->set('isHtml5ParserEnabled', true);
    //     $options->set('isRemoteEnabled', true);
    

    //     $dompdf = new Dompdf($options);
    

    //     $dompdf->loadHtml($html);
    

    //     $dompdf->setPaper('A4', 'portrait');
    

    //     $dompdf->render();

    //     return $dompdf->stream("test_pdf.pdf");
    // }
    public function download($cpf)
    {
        $data = Details::where('cpf', $cpf)->first();
        $status = status::where('cpf', $cpf)->first();
        
        return view('document', compact('data', 'status'));
    }
    
}
