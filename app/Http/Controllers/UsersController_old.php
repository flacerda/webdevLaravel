<?php

namespace App\Controllers\Controller;

/**
* 
*/
class UsersController extends Controller
{
	
	public function allUsers()
	{
		$users = DB::select('SELECT * FROM users');
		return view('dump', ['data'=> $users]);
	}

	public function oneUser($id)
	{
		 $user = DB::select('SELECT * FROM users where id =:id', ['id' => $id]);
   	    return view('dump', ['data'=> $user]);
	}
}