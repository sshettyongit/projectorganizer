<?php

namespace App\Http\Controllers;

use App\User;
use App\project;
use App\tasks;
use Carbon\Carbon;


use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function createtask(Request $request , $id , $pid ){
        $pd = project::find($pid);
        //return $pd;
        $pid = project::find($pid);
        notify()->success('Task added successfully⚡️');
        $tasks = tasks::create([
            'Tname' => $request->Tname,
            'Tdescription' => $request->Tdescription,
            'project_pid' => $pid->pid,
            'created_at' => Carbon::now() ,
            'updated_at' => NULL,
        ]);
        $id = User::find($id);
        notify()->success('Task added successfully⚡️');
        return redirect()->route('userproject.details', compact('id' , 'pid'));
    }

    public function editStatus($id , $pid , $tid){
        $users = User::find($id);
        $proj = project::find($pid);
        $tasks = tasks::find($tid);
        if($tasks->task_status == 'Completed'){
            notify()->emotify('error','Those tasks whose status have been marked as "completed" their status cannoted be changed ');
        }
        return view('Task-Status' , compact('users' , 'proj' , 'tasks'));
        //return $tasks->task_status;
    }

    public function changeStatus(Request $request , $id , $pid , $tid){
        $users = User::find($id);
        $proj = project::find($pid);
        $tasks = tasks::find($tid);
        $tasks->task_status = $request->tstatus ;
        $tasks->save();
        return redirect()->route('userproject.details' , compact('users','proj'));
    }
}
