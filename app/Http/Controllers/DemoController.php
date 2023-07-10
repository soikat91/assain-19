<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    // function createdUser(){
        
    //     $user=new User;

    //     $user->name="soikat";
    //     $user->email="soikat@gmail.com";
    //     return  $user->save();
    // }
    function createdUser(Request $request){
        
        return User::create($request->input());
         
    }
    function updatedUser(Request $request){

      return  User::where('id',$request->id)->update($request->input());
    }

    function userUpateOrCreate(Request $request){

        return User::updateOrCreate(
            ['name'=>$request->name],
            $request->input()

        );
    }
}
