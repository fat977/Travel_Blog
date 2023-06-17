<?php

namespace App\Http\Controllers\Website;

use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidationRequest;
use App\Http\Requests\RegisterUserValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register_login(){
        return view('website.users.register_login');
    }

    public function userRegister(RegisterUserValidation $request){
        $user = $request->all();
        //echo "<pre>"; print_r($data); die;
        User::create($user);

        /* $name =$request->name;
        event(new UserRegisterEvent($name)); */


       return redirect()->route('website');
    }

    public function userLogin(LoginValidationRequest $request){
        $data = $request->all();

        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
    
            return redirect()->route('website');

        }else{
            return redirect()->route('register.login')->with(['error' => 'invalid email or password']);
        }
        
    }

    public function userLogout(){
        Auth::logout();
        return redirect('/');
    }
}
