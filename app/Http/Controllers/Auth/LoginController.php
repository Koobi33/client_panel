<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/my/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        try {
                $this->validate($request, [
                    'email'     => 'required|min:3|max:255',
                    'password'  => 'required|min:6|'
]);
    $remember = $request->has('remember') ? true : false;
    if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember)){
        return redirect(route('companies'))->with('success', trans('Вы успешно вошли!'));
    }

    return back()->with('error', trans('Что-то пошло не так!'));
        }catch (ValidationException $e){
            \Log::error($e->getMessage());
            return back()->with('error', trans('Данные введены неверно!'));
        }
    }
}
