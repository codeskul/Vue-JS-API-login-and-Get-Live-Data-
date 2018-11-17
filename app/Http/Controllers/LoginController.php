<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        // return $request->all();
        
        if($request->username == 'user' && $request->password == 'pass')
        {
            return "
                [
                    data : 
                        { message: 'login success'}
                ]
            ";    
        }
        else
        {
            return "
                {  message: 'login failed'}
            ";    
        } 
    }

    public function getData(){
        return '{
            "data" : [
                {name : "admin" },
                {name : "editor" },
            ]   {name : "contributor"}
        } ';
    }
}
