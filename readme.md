# Laravel Admin/Client Login

Differentiates between admin user and a client user

### Dummy Credentials
Admin: johndoe@example.com
Client: janedoe@example.com 
Password (for both): password

- `/dashboard` only for admin access
- `/home` for client/admin access

### To use
 - `composer install` to install vendor components
 - `php artisan migrate` to create schema tables
 - `php artisan serve` to boot local server
 - go to `/create` to generate two dummy users (one as admin, other as client)a
 - go to `/login` to enter credentials


### Reset Password 
 - Since no live server, reset password link will be in the directory: `storage/logs/laravel.log`
 - Copy and paste link into browser provided in log to change new password

### Custom Config
Any other config that you do can be customized by creating a `.env` file and customizing the parameters in there 


#### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
