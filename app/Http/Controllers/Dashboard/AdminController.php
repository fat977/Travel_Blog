<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidationRequest;
use App\Models\Admin;
use App\Models\Blogger;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    use ImageTrait;
    public function index(){
        return view('Dashboard.auth.login');
    }

    public function dashboard()
    {
        if(Auth::guard('admin')->check()){
            return view('Dashboard.index');
        }else{
            return redirect('admin/index');
        }       
    }

    public function login(LoginValidationRequest $request){
      
        $data = $request->all();
    
        if(Auth::guard('admin')->attempt(['email' =>$data['email'],'password'=> $data['password']])){

            return redirect('admin/dashboard');
        }
        else{
            return redirect()->back()->with(['error_message' => 'invalid email or password']);
        }
     
    }

    public function checkCurrentPassword(Request $request){
        $data = $request->all();
      
        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
            return "true";
        } else{
            return "false";
        }
    }

    public function updatePassword(Request $request){

        if($request->isMethod("post")){
            $data = $request->all();
            $rules =[
                //'new_password'=> ['required', 'string', 'min:8', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[*-]).{6,}$/'],
                'new_password'=> ['required', 'string', 'min:8'],
                'confirm_password'=>['required']
            ];
            $message =[
            
            'new_password.required' => 'We need to know your new password!',
            ];
            $this->validate($request,$rules,$message);
            if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
                if($data['confirm_password']=== $data['new_password']){
                    Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'
                    =>bcrypt($data['new_password'])]);

                    return redirect()->back()->with(['success' => 'Your password has been updated successfully']);
                
                 }else{
                return redirect()->back()->with(['error' => 'Your new password and confirmed password does not match']);
                }
            } else{
                return redirect()->back()->with(['error' => 'Your current password is incorrect']);
            } 
        }

        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first()->toArray();
        return view('Dashboard.settings.update-password',compact('adminDetails'));
    }

    public function updateDetails(Request $request){
        
        if($request->isMethod("post")){
            $request->validate([
                'name'=> 'required',
            ]);
            $data = $request->all();

            if(empty('image')){
                $path= $this->uploadImage($request,'images');
                $data['image'] = $path;
                Admin::where('id',Auth::guard('admin')->user()->id)->update(['image'=>$data['image']]);
                Blogger::where('id',Auth::guard('admin')->user()->blogger_id)->update(['image'=>$data['image']]);
            }

             Admin::where('id',Auth::guard('admin')->user()->id)->update(['name'=>$data['name']]); 
             Blogger::where('id',Auth::guard('admin')->user()->blogger_id)->update(['name'=>$data['name']]); 

            return redirect('admin/update-details')->with(['success' =>'your data is updated successfully']);
          
        }
        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first()->toArray(); 
        return view('Dashboard.settings.update-details',compact('adminDetails'));
    }

    
    public function logout(){
        Auth::guard('admin')->logout();
        return view('Dashboard.auth.login');
    }
}
