<?php


namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Validator;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * @var string
     */
    protected $redirectTo = '/admin';

    public function loginView()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('admin.login', $data);
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function loginAdmin(LoginRequest $request)
    {
        $result = Auth::attempt([
            'name' => $request->name,
            'password' => $request->password
        ]);
        if ($result) {
            return $this->sendLoginResponse($request);
        }
        return $this->sendFailedLoginResponse($request);
    }

    public function confirmLogin($request)
    {

    }
}
