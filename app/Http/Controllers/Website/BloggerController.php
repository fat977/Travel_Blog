<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidationRequest;
use App\Http\Requests\RegisterBloggerValidation;
use App\Http\Requests\RegisterUserValidation;
use App\Mail\Verify;
use App\Models\Admin;
use App\Models\Blogger;
use App\Models\Country;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BloggerController extends Controller
{
    //
    use ImageTrait;

    public function register_login(){
        $countries = Country::where('status',1)->get()->toArray();
        return view('website.bloggers.register_login',compact('countries'));
    }

    public function bloggerRegister(RegisterBloggerValidation $request){
        $blogger = $request->all();
        //echo "<pre>"; print_r($data); die;
        //if(!empty($request->image)){
            $path= $this->uploadImage($request,'images');
            $blogger['image'] = $path;
        //}
        Blogger::create($blogger);

        $blogger_id = DB::getPdo()->lastInsertId();

        // insert vendor details in admins table
        $admin = new Admin();
        $admin->type ='blogger';
        $admin->blogger_id = $blogger_id;
        $admin->name =$blogger['name'];
        $admin->email =$blogger['email'];
        $admin->image =$blogger['image'];
        $admin->password = bcrypt($blogger['password']);
        $admin->status =0;
        $admin->save();

        $name = $blogger['name'];
        $code = base64_encode($blogger['email']);
        Mail::to($blogger['email'])->send(new Verify($name,$code));


        return redirect()->route('blogger.register.login')->with(['success_message' => 'please confirm
        your email to activate your account']);
    }

    public function bloggerConfirm($code){
        $email=base64_decode($code);
        $bloggerAccount = Blogger::where('email',$email)->count();
        if($bloggerAccount>0){
            $bloggerDetails = Blogger::where('email',$email)->first();
            if($bloggerDetails->status==1){
                return redirect('blogger/register/login')->with(['success_message'=>
                'Your account is already activated . You can login now']);
            }else{
                Blogger::where('email',$email)->update(['status'=>1]);
                Admin::where('email',$email)->update(['status'=>1]);
           
                return redirect('blogger/login-register')->with(['success_message'=>
                'Your account is activated . You can login now']);

            }

        }
    }

    public function bloggerLogin(Request $request){
         $data = $request->all();

        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            if(Auth::blogger()->status==0){
                Auth::logout();
                return redirect()->route('blogger.register.login')->with(['error' => 'Your account is inactive']);
            }
    
            return redirect()->route('website');

        }else{
            return redirect()->route('blogger.register.login')->with(['error' => 'invalid email or password']);
        } 
        
    }

    /* public function userUpdatePassword(Request $request){
        if($request->ajax()){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $validator = Validator::make($request->all(), [
                'current_password'=>'required',
                'new_password'=>'required|min:6',
                'confirm_password'=>'required|min:6|same:new_password',
               
            ]);
            if($validator->passes()){
               $current_password = $data['current_password'];
               $checkPassword = User::where('id',Auth::user()->id)->first();
               if(Hash::check($current_password,$checkPassword->password)){
                //update user current password
                $user = User::find(Auth::user()->id);
                $user->password = bcrypt($data['new_password']);
                $user->save();
                return response()->json(['type'=>'success','message'=>'Your password has been updated successfully']);
               }else{
                 return response()->json(['type'=>'incorrect','message'=>'Your current password is not correct ']);
               }
               return response()->json(['type'=>'success','message'=>'Your contact details has been updated successfully']);

            }else{

                return response()->json(['type'=>'error','errors'=>$validator->messages()]);

            }

        }else{
            //$countries = Country::where('status',1)->get()->toArray();
            return view('front.users.user_account');
        }
    }

    public function checkCurrentPassword(Request $request){
        $data = $request->all();
        $checkPassword = User::where('id',Auth::user()->id)->first();
        if(Hash::check($data['current_password'],$checkPassword->password)){
            return "true";
        } else{
            return "false";
        }
    }

    public function forgotPassword(Request $request){
        if($request->ajax()){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $validator = Validator::make($request->all(), [
                'email'=>'required|email|max:100|exists:users',
            ],
            [
                'email.exists'=>'Email does not exist'
            ]);
            if($validator->passes()){
               
                // send email to user 
                $userDetails = User::where('email',$data['email'])->first()->toArray();
                $email = $data['email'];
                $name = $userDetails['name'];

                Mail::to($email)->send(new ForgotPassword($name,$email));
                
                return response()->json(['type'=>'success','message'=>'New Password sent to registered email']);
            }else{
                return response()->json(['type'=>'error','errors'=>$validator->messages()]);

            }
        }else{
            return view('front.users.forgot_password');
        }
       
    }

    public function changePassword(){
        return view('front.users.change_password');
    }

    public function createNewPassword(Request $request){
        $data = $request->all();
            //echo "<pre>"; print_r($data); die;
        $request->validate([
            'new_password'=>'required|min:6',
            'confirm_password'=>'required|min:6|same:new_password',
        ]);
         
        //update user current password
        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($data['new_password']);
        $user->save();
        return redirect()->back()->with(['success_message'=>'Your New password has been created successfully']);

        
    } */

    public function userLogout(){
        Auth::logout();
        return redirect('/');
    }
}
