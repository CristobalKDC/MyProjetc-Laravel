<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use app\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    function guardar(Request $request)
    {
        $user = new User;
        $user->user = $request->input("name");
        $user->email = $request->input("email");
        $user->password = $request->input("password");
        $result=$user->save();

        // $user->save();
        if ($result){
            return ['Result'=>'Datos añadidos'];
            $user = User::all();
            return view("login");
        } else {
            return ['Result'=>'Datos no añadidos'];
            return view("register");
        }
        
        
}
}