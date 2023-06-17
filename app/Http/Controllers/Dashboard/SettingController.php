<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingValidation;
use App\Models\Setting;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    use ImageTrait;
    public function index()
    {
        $setting = Setting::first();
        $this->authorize('view', $setting);
        return view('Dashboard.settings');
    }
    public function update(SettingValidation $request, Setting $setting)
    {
        //dd($request);
        $data = $request->all();
        foreach (config('app.languages') as $key => $value) {
            $data[$key . '*.title'] = 'nullable|string';
            $data[$key . '*.content'] = 'nullable|string';
        }
       

        if(!empty($request->favicon)){
            $path= $this->uploadFavicon($request,'favicon');
            $data['favicon'] = $path;
            $setting->update(['favicon' => $path]); 
        } 

        if(!empty($request->logo)){
            $path= $this->uploadLogo($request,'logo');
            $data['logo'] = $path;
            $setting->update(['logo' => $path]);
        }

        $setting->update($data);
        
        return redirect()->route('settings');
    }
}
