<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Authenticatable
{   

    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function create_user(){
        echo "hello shree";
        $role_name = new Role();
        $role_name->name         = 'owner';
        $role_name->display_name = 'Project Owner'; // optional
        $role_name->description  = 'User is the owner of a given project'; // optional
        $role_name->save();
         // $user=new User;
         // $user->cpf=1;
         // $user->password=bcrypt('12345678');
         // $user->save();
         //$user =App\Models\User::create_user()
    }

    public static function update_user(){
        $filename=public_path().'/data/user_data.csv';
        $file = fopen($filename, "r");
        $data_arr = array(); // Read through the file and store the contents as an array
        $i = 0;
        //Read the contents of the uploaded file 
        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
        $num = count($filedata);
        // echo $filedata;
        // Skip first row (Remove below comment if you want to skip the first row)
        if ($i == 0) {
            $i++;
            continue;
            }
            for ($c = 0; $c < $num; $c++) {
                // echo $filedata[$c];
                $data_arr[$i][] = $filedata[$c];
            }
            $i++;
        }

        fclose($file);
        
        foreach ($data_arr as $count => $value) {
            
            $role_name = new Role();
            $role_name->name         = $value[0];  
            $role_name->display_name = $value[0];; // optional
            $role_name->description  = 'User can access '.$value[0];; // optional
            $role_name->save();

            $user=new User();
            $user->username=$value[0];
            $user->password=bcrypt($value[1]);
            $user->id=$value[2];
            $user->save();
            $user->attachRole($role_name);
            echo "user ".$value[0]." added successfully\n";

        }
       
    }


    // $device = Device::find($id);
    
    // $device->device_name = $request->device_name;
    // $device->user_id = $request->user_id;
    // $device->password = $request->password;

    // Device::where('id', 'FR 900')->first();
      
    



}
