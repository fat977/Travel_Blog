<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    use ImageTrait;

    public function index()
    {
        //
        $destinations = Destination::with('parents')->get()->toArray();
        return view('dashboard.destinations.index',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $destinations = Destination::whereNull('parent_id')->orWhere('parent_id', 0)->get();
        return view('dashboard.destinations.add', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $destination = $request->all();
        $path= $this->uploadImage($request,'images');
        $destination['image'] = $path;
        Destination::create($destination);

        return redirect()->route('destination.index');

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
    public function edit(Destination $destination)
    {
        //
        $destinations = Destination::whereNull('parent_id')->orWhere('parent_id', 0)->get();
        return view('dashboard.destinations.edit', compact('destination', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
        $data = $request->all();
        if(!empty($request->image)){
            $path= $this->uploadImage($request,'images');
            $data['image'] = $path;
            $destination->update(['image' => $path]);
        }
        $destination->update($data);

        return redirect()->route('destination.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Destination::where('id',$id)->delete();
        return redirect()->back()->with(['success' => 'Destination deleted successfully']);
    }
}
