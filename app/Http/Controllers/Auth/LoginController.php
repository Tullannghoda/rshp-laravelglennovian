<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Custom login: simpan session & redirect sesuai role
     */
    protected function authenticated(Request $request, $user)
    {
        $roleUser = $user->roleUser;
        $role = $roleUser ? $roleUser->role : null;

        // Simpan ke session
        session([
            'userid'        => $user->iduser,
            'username'      => $user->nama,
            'userroleid'    => $roleUser ? $roleUser->idrole : null,
            'userrolename'  => $role ? $role->nama_role : null,
            'user_status'   => $roleUser ? $roleUser->status : null
        ]);

        // Redirect sesuai role
        if ($roleUser && $roleUser->idrole == 1) {
            return redirect('/admin/dashboard');
        } elseif ($roleUser && $roleUser->idrole == 2) {
            return redirect('/dokter/dashboard-dokter');
        } elseif ($roleUser && $roleUser->idrole == 4) {
            return redirect('/resepsionis/dashboard-resepsionis');
        } elseif ($roleUser && $roleUser->idrole == 5) {
            return redirect('/pemilik/dashboard-pemilik');
        }
        // default
        return redirect('/home');
    }
}
