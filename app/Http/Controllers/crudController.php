<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class crudController extends Controller
{
    function index(){
        return view('home');
    }

    function list(){
        $data = User::all();
        return view('list',["data" => $data]);
    }

    function add(Request $req){
        // return $req->input();
        $info = new User;
        $info->name = $req->input('name');
        $info->email = $req->input('email');
        $info->address = $req->input('address');
        $info->save();
        Session::flash('status',"User Added Succesfully");
        return redirect('/list');
    }

    function delete($id){
        User::find($id)->delete();
        Session::flash('status',"User Deleted Succesfully");
        return redirect('/list');
    }
    function edit($id){
        $data = User::find($id);
        Session::flash('status',"User Deleted Succesfully");
        return view('edit',['data'=>$data]);
    }

    function update(Request $req){
        $info = User::find($req->input('id'));
        $info->name = $req->input('name');
        $info->email = $req->input('email');
        $info->address = $req->input('address');
        $info->save();
        Session::flash('status',"User Info Updated Succesfully");
        return redirect('/list');
    }

    function register(Request $req){
        // return $req->input();
        $admin = new Admin;
        $admin->name = $req->input('name');
        $admin->email = $req->input('email');
        $admin->password = Crypt::encrypt($req->input('password'));
        $admin->save();
        Session::put('admin', $req->input('name'));
        return redirect('/');
    }

    function login(Request $req){
    $admin = Admin::where('email',$req->input('email'))->get();
        if(Crypt::decrypt($admin[0]->password) == $req->input('password')){
            Session::put('admin', $admin[0]->name);
            return redirect('/');
        } 
    }
}
