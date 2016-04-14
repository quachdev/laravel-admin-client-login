<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'AdminController@index');

Route::get('generate', function() {
	$user = new App\User;

	$user->create([
		'name' => 'John Doe',
		'email' => 'johndoe@example.com',
		'password' => bcrypt('password'),
		'admin' => true
	]);

	$user2 = new App\User;
	$user2->name = 'Jane Doe';
	$user2->email = 'janedoe@example.com';
	$user2->password = bcrypt('password');
	$user2->admin = false;
	$user2->save();

	return 'generated dummy users';
});
