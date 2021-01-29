<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserData;

class UsersController extends Controller
{
    public function index(){
        $users_data = UserData::all();
        return view('users', compact('users_data'));
    }
}
