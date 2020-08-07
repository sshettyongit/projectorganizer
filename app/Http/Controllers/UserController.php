<?php

namespace App\Http\Controllers;
use App\User;
use App\project;
use App\project_user;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userpanel($id){
        $users = User::find($id);
        $user = User::find($id);
        $proj = $users->projects()->get(array('pid', 'Pname' ,'description'));
        return view('userwelcome',compact('proj','user'));
    }
    public function profileedit($id){
        $details = User::find($id);
        return view('profiledetails', compact('details'));
    }
    public function profileupdate(Request $request , $id){
        $detail = User::find($id);
        $detail->name = $request->name;
        $detail->email = $request->email;
        notify()->success('Updated Profile successfully⚡️');
        $detail->save();
        return redirect()->route('user.homepage',compact('detail'));
    }

    public function projectsdetails($id , $pid){
        $proj = project::find($pid);
        $users = User::find($id);
        $tasks = project::find($pid)->tasks()->where('project_pid' , $pid)->get();
        
        return view('userproject-details',compact('proj' , 'users' ,'tasks'));
    }

    public function addTasks($id ,$pid){
        $proj = project::find($pid);
        $users = User::find($id);
        
        //$tasks = project::find($pid)->tasks()->where('project_pid' , $pid)->get();
        return view('addtask-toproject' , compact('proj' , 'users'));
    }

}
