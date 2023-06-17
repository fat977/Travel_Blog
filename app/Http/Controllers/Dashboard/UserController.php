<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::all();
        return view('dashboard.users.index',compact('users'));

    }

    public function delete($id)
    {
        //$this->authorize('delete', $this->user);
        User::find($id)->delete();
        return redirect()->route('dashboard.users.index');
    }
}
