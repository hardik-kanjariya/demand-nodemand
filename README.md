#### Author:Shreekant Sureliya

## Laravel cheat sheet 

#### Create model,migration and Controller

php artisan make:model XyzModelname -mc

#### Tinker commands
php artisan tinker(first run)

call function inside model

`$user =App\Models\User::upload_user()`

call function inside controller
`$user=App\Http\Contollers\AuthContoller::upload_csv()`

#### migration related commands

for refresh specifi database table

`php artisan migrate:refresh --path=/database/migrations/2014_10_12_000000_create_users_table.php`

#### Clear cache and config


`php artisan config:cache`

`php artisan cache:clear`