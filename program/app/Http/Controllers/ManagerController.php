<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ManagerController extends Controller
{
    function createManager(){
        return view::make('manager.createManager');


    }
    function storeManager(Request $req){
        $req->validate([
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Name is Required',
            'email' => 'Email is required',
            'password' => 'Password is required',
    
        ]);
        $manager = new User;
        $manager ->name = $req->name;
        $manager ->email = $req->email;
        $manager ->password = Hash::make($req->password);
        $manager ->roleid = config('role.role.Manager'); 
        $manager ->save();
        return redirect()->route('listManager')->with("success",'Updated Successfully');

    }
    function listManager(){
        $manager = User::orderBy('id', 'desc')->where('roleid',config('role.role.Manager'))->paginate(config('role.pagination'));
        return view::make('manager.listManager',['managers'=>$manager]);

    }
    function editManager($id){
        $manager = User::find($id);
        return view::make('manager.editManager',['manager'=> $manager]);

    }
    function updateManager(Request $req, $id){
        $req->validate([
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Name is Required',
            'email' => 'Email is required',
            'password' => 'Password is required',
    
        ]);
        $manager = User::find($id);
        $manager ->name = $req->name;
        $manager ->email = $req->email;
        $manager ->password = Hash::make($req->password);
        $manager ->roleid = config('role.role.Manager'); 
        $manager ->save();
        return redirect()->route('listManager')->with("success",'Updated Successfully');

    }
    function destroyManager($id){
        $manager = User::find($id);
        if(!empty($manager)){
        $manager->delete();
        }
        return redirect()->route('listManager')->with("success",'file is deleted');

    }
}
