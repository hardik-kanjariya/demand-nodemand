<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use App\Models\Role; // Import the Role model

class User extends Authenticatable
{   
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Function to create a user
    public static function create_user()
    {
        $role_name = new Role();
        $role_name->name         = 'owner';
        $role_name->display_name = 'Project Owner'; // optional
        $role_name->description  = 'User is the owner of a given project'; // optional
        $role_name->save();
        
        // You might want to create a user here if needed
    }

    // Function to update user data from a CSV file
    public static function updateUser()
    {
        $filename = public_path('data/user_data.csv');

        if (!file_exists($filename) || !is_readable($filename)) {
            echo ("File not found or is not readable: $filename");
            return;
        }

        $file = fopen($filename, "r");
        $dataArr = [];
        $i = 0;

        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            if ($i++ == 0) continue; // Skip header row
            $dataArr[] = $filedata;
        }

        fclose($file);

        foreach ($dataArr as $value) {
            if (count($value) < 3) {

                echo "Invalid data format in CSV: " . implode(',', count($value));
                continue;
            }

            $user = User::firstOrCreate([
                'username' => $value[0],
                'password' => bcrypt($value[1]),
                'role' => $value[2],
            ]);

            $roleName = $value[2];
            
            $role = Role::firstOrCreate(
                ['name' => $roleName],
                ['display_name' => $roleName, 'description' => 'User can access ' . $value[0]],
            );

            $user->attachRole($role);
            echo ("User with username {$user->username} added successfully");
        }
    }
}
