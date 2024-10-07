<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indext(){
        $users = DB  ::table('users')->get();
        return view ('welcome',compact('users'));
    }

    public function create(){
        $users = DB::table('users')
                 ->insert([
                    [
                        'name'=>'Raihan',
                        'email'=>'Raihan@gmail.com',
                        'number'=>'089987689729'
                    
                    ]
                 ]);
    }
}
