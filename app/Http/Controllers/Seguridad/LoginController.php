<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//use App\Models\Seguridad\Usuario;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');  //son usuarios invitados guest y con permiso logout
    }
    public function index()
    {
        return view('seguridad.index');
    }

    protected function authenticated(Request $request, $user)
    {
        $roles = $user->roles()->where('estado', 1)->get();
        if ($roles->isNotEmpty()) {
            //auth()->user()->setSession();
            $user->setSession($roles->toArray());
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('seguridad/login')->withErrors(['error' => 'Este Usuario no tiene un Rol activo']);
        }
    }

    public function username()
    {
        return 'usuario';
    }


}
