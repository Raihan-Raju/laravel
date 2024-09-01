<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class UserController extends Controller 
{
    public function show(){
        $users = User::with('roles')->get();
        // return $users;   
        return view('view', compact('users'));   
      }
}
