<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * This function renders all user data on the page.
     * 
     * Users data to be fetched consists of following fields
     * id, name, email, phone, country
     * 
    */
    public function index()
    {
        $users = User::select('id','name','email','phone','country')->simplePaginate(25);
    
        $users_count = User::count();

        return view('user_records',compact('users','users_count'));
    }

    public function users()
    {
        $users = Cache::remember('users', 60, function () {
            return User::select('id','name','email','phone','country')->get();
        });

        return response($users, 200);
    }
}
