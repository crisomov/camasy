<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;



class RegisterController extends Controller
{
    public function show(){

        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        

        $validated=$request->validated();

        $user = User::create($request->validated());
   
        $users=User::all();

        return redirect ('/login')->with('success','Account created successfully');
   
    

    }
    
}

