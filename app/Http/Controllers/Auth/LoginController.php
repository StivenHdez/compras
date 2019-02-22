<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{



    public function __construct(){
        $this->middleware('guest', ['only'=>'showloginform']);
    }

    public function showloginform(){
        return view('compra.login');
    }

    public function login(){

      $credentials = $this->validate(request(),[
           'email' =>'email|required|string',
           'password'=>'required|string' 
        ]);


        if (Auth::attempt($credentials)) {
            // return "Tu sesión a iniciado correctamente";
            $usuario =  Auth::check();
            echo $usuario;
            // return redirect()->route('compras.index');
            // $id = Auth::id();
            // print($id);
        }

        return back()
        ->withErrors(['email'=>'El email o contraseña no coinciden con nuestros registros.'])
        ->withInput(request(['email']));
    }

    public function logout(){
        
        Auth::logout();

        return redirect()->route('compras.index');
    }

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // *
    //  * Create a new controller instance.
    //  *
    //  * @return void
     
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
