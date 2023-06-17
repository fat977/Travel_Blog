<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $destinations_with_posts = Destination::with(['posts'=>function ($q){
            $q->limit(2);
        }])->get();
       return view('website.index' , compact('destinations_with_posts'));
    }
}
