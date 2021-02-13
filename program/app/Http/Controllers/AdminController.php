<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    function createAdmin(){
        return view::make('admin.adminCreate');
    }
    function storeAdmin(Request $req){
        $req->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required',
            
            
            
        ],[
            'name.required' => ' Admin Name is Required',
            'email' => 'Email is required',
            'password' => 'Password is required',
    
        ]);
        $admin = new User;
        $admin ->name = $req->name;
        $admin ->email = $req->email;
        $admin ->password = Hash::make($req->password);
        $admin ->roleid = config('role.role.Admin');   
        $admin ->save();
        return redirect()->route('listAdmin')->with("success",'Updated Successfully');
    }
    function listAdmin()
    {
        $admin = User::orderBy('id', 'asc')->where('roleid',config('role.role.Admin'))->paginate(config('role.pagination'));
        return view::make('admin.adminList',['admins'=>$admin]);

    }
    function editAdmin($id){
        $admin = User::find($id);
        return view::make('admin.adminEdit',['admin'=> $admin]);

    }
    function updateAdmin(Request $req, $id){
        $req->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required',
            
            
            
        ],[
            'name.required' => ' Admin Name is Required',
            'email' => 'Email is required',
            'password' => 'Password is required',
    
        ]);
        $admin = User::find($id);
        $admin ->name = $req->name;
        $admin ->email = $req->email;
        $admin ->password = Hash::make($req->password);
        $admin ->roleid = config('role.role.Admin');   
        $admin ->save();
        return redirect()->route('listAdmin')->with("success",'Updated Successfully');
    }
    function destroyAdmin($id){
        $product = User::find($id);
        $product->delete();
        return redirect()->route('listAdmin')->with("success",'file is deleted');

    }
}
