<?php
namespace App\Traits;
use Illuminate\Http\Request;

trait ImageTrait
{

    public function uploadImage(Request $request ,$folderName){
        if($request->image){
            $image = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs($folderName,$image,'fatma');
            return $path;
        }
    }

    public function uploadFavicon(Request $request ,$folderName){
        $favicon = $request->file('favicon')->getClientOriginalName();
        $path = $request->file('favicon')->storeAs($folderName,$favicon,'fatma');
        return $path;
    }

    public function uploadLogo(Request $request ,$folderName){
        $logoo = $request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs($folderName,$logoo,'fatma');
        return $path;
    }

}
