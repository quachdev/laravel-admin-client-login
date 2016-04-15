<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['create']]);
    }

    public function index()
    {
    	return view('admin.dashboard');
    }

    public function create()
    {
    	$user = new User;
		$user->create([
			'name' => 'John Doe',
			'email' => 'johndoe@example.com',
			'password' => bcrypt('password'),
			'admin' => true
		]);

		$newUser = new User;
		$newUser->name = 'Jane Doe';
		$newUser->email = 'janedoe@example.com';
		$newUser->password = bcrypt('password');
		$newUser->admin = false;
		$newUser->save();

		return 'generated dummy users';
    }

}
