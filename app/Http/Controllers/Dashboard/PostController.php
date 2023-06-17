<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\NewPostEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostValidation;
use App\Models\Destination;
use App\Models\Post;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use ImageTrait;

    protected $postmodel;
    public function __construct(Post $post) {
        $this->postmodel = $post;
    }
    public function index()
    {
        //
        $posts = Post::with('destination')->get()->toArray();
        return view('dashboard.posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $destinations = Destination::where(['parent_id'=>0])->get();
        
        
        if (count($destinations)>0) {
            return view('dashboard.posts.add' , compact('destinations'));
        }
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostValidation $request)
    {
        //
        $this->authorize('create' , $this->postmodel);
   
        $post = $request->all();
        $path= $this->uploadImage($request,'images');
        $post['image'] = $path;
        $post['admin_id'] = auth()->user()->id;
        Post::create($post);

       /*  $name =auth()->user()->name;
        //return $name;
        event(new NewPostEvent($name)); */

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        //return $post;
        $this->authorize('update' , $post);
        $destinations = Destination::all();
        return view('dashboard.posts.edit' , compact('post','destinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $this->authorize('update' , $post);
        $data = $request->all();
        if(!empty($request->image)){
            $path= $this->uploadImage($request,'images');
            $data['image'] = $path;
            $post->update(['image' => $path]);
        }
        $post->update($data);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $this->authorize('delete' , $this->postmodel->find($id));
        Post::find($id)->delete();
        return redirect()->route('post.index')
        ->with('success','Product deleted successfully');
    }
}
