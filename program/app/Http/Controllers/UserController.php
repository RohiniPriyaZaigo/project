<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function create(){
        return view::make('backends.dashboard');
    }
    function store(Request $req){
        $req->validate([
            'name' => 'required|min:6|max:10',
            'email' => 'required',
            'password' => 'required|min:6|regex:/[@!$%]/',
        ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters',
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required',
            'password.min' => 'Password should be atleast :min characters',
            'password.regex' => 'Special character is Required',
        ]);
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user ->roleid = config('role.role.User'); 
        $user->save();
        return redirect()->route('listCustomer')->with("success",'Updated Successfully');

    }
    function createCustomer(){
       
        return view::make('customer.createCustomer');
    }
    function listCustomer(){
        $customer = User::orderBy('id', 'asc')->where('roleid',config('role.role.User'))->paginate(config('role.pagination'));
        return view::make('customer.listCustomer',['customers'=>$customer]);
    }
    function editCustomer($id){
        $customer = User::find($id);
        return view::make('customer.editCustomer',['customer'=> $customer]);
    }
    function updateCustomer(Request $req, $id){
        $req->validate([
            'name' => 'required|min:6|max:10',
            'email' => 'required',
            'password' => 'required|min:6|regex:/[@!$%]/',
        ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters',
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required',
            'password.min' => 'Password should be atleast :min characters',
            'password.regex' => 'Special character is Required',
        ]);
        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user ->roleid = config('role.role.User'); 
        $user->save();
        return redirect()->route('listCustomer')->with("success",'Updated Successfully');

    }
    function destroyCustomer($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('listCustomer')->with("success",'file is deleted');
    }
    
}
