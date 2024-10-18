<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showData(){
        $users = DB::table('users')->get();
        return view ('data',compact('users'));
    }

    public function createData(){



        $users = DB::table('users')
                        ->insert([
                           [
                            'name'=>'molla Raju',
                            'email' =>'raju@gmail.com',
                            'number'=>'01516125589',
                            'address'=>' Dhaka',

                           ],
                           [
                            'name'=>'tuhin',
                            'email' =>'tuhin@gmail.com',
                            'number'=>'45656534',
                            'address'=>'Dhaka',

                        ]

                        ]);

    return redirect()->route('viewData');


}

 public function updateData(){
    $users  = DB::table('users')
                    ->where('id',1)
                    ->update([
                        'number'=>'44444',
                        'name'=>'Raihan Molla Raju',

                    ]);

     if($users){
        echo "<h1>Data Updated Successfully</h1>";
     } else {
        echo "<h1>Data Not Updated</h1>";
     }
 }

 public function deleteData(string $id){
    $users = DB::table('users')
                ->where('id', $id)
                ->delete();

     return redirect()->route('viewData');
 }


}
