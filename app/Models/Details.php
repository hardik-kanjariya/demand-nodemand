<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Model;




class Details extends Model
{
    use HasFactory;

    protected $fillable = ['id','cpf','iom_ref_no','iom_ref_date','name','section','designation','reason','transfer_to','relleving_date','epabx_o','epabx_r','landline_o','landline_r','sim_no','sim_provider','dc_no','dc_provider','l_make','l_model','l_srno','remark' ];
}
