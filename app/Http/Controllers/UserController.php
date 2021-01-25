<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    /**
     * This function renders all user data on the page.
     * 
     * Users data consists of following fields
     * id, name, email, phone, country, created_at, updated_at
     * 
    */
    public function users()
    {
        $users = User::simplePaginate(25);
        $users_count = User::count();

        return view('user_records',compact('users','users_count'));
    }


    /**
     * This function renders user login page.
     * 
     * Login form consists of 2 fields
     * email & password
     * 
    */
    public function login()
    {
        return view('login');
    }
}
