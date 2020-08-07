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
        notify()->success('New task added successfully!');
        $tasks = tasks::create([
            'Tname' => $request->Tname,
            'Tdescription' => $request->Tdescription,
            'project_pid' => $pid->pid,
            'created_at' => Carbon::now() ,
            'updated_at' => NULL,
        ]);
        $id = User::find($id);
        return redirect()->route('userproject.details', compact('id' , 'pid'));
    }

}
