<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view ('sessions.create');
 
}

public function store()
{
   $this->validate(request(),[       //validating 
     'name'=>'required',
     'email'=>'required| email',
     'password'=>'required'


   ]);

   $user=User::create(request(['name','email','password']));

    auth()->login($user);  //sing in 


    return redirect()->home();   //redirect user to home 
}


}
