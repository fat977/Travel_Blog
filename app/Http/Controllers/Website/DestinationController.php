<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Post;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function show(Destination $destination)
    {
        $destination = $destination->load('children');
        $posts = Post::where('destination_id' , $destination->id)->paginate(2);
        
        return view('website.destination' , compact('destination','posts'));
    }
}
