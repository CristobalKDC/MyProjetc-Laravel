<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('login');
        }
        return view('register');
    }

    public function register(RegisterRequest $request){
        
        $user = User::create($request->validated());
        $rol = Rol::create($request->validated());
        //auth()->login($user);
        return redirect('login')->with('success', "Account successfully registered.");
        

    }
}

// namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;

// class RegistrationController extends Controller
// {
//     //Aqui vemos la view de register en pantalla
//     public function create()
//     {
//         return view('register');
//     }

//     public function store(Request $request)
//     {
//         $this->validate(request(), [
//             'name' => 'required',
//             'email' => 'required|email',
//             'password' => 'required',
//             'rol' => 'required'
//         ]);
        
//         User::create([$request->all()]);
        
//         return redirect()->to('/login');
//     }
// } 