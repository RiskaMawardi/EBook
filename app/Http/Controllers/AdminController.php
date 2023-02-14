<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::get();

        return view('dashboard.user' , compact('data'));
    }

    public function indexEditUsers($id){
        $data = User::where('id','=',$id)->get();
        return view('dashboard.edit-user')->with('data',$data);
    }

    public function updateUsr(Request $request , $id){
        User::where('id','=',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address
        ]);

        return redirect('/users');
    }

    public function index(){
        $users = User::count();

        return view('dashboard.index')->with('users',$users);
    } 
}
