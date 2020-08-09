<?php

namespace App\Http\Controllers;
use App\User;
use App\project;
use App\project_user;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminpanel(){
        $userdata = User::where('is_admin', 0)->get();
        return view('AdminPage', compact('userdata'));
    }
    public function update($id){
        $category = User::findorFail($id);
        return view ('update-user',compact('category'));
    }

    public function edit(Request $request, $id){
        $category = User::findorFail($id);
        $category->name = $request->name;
        $category->email = $request->email ;
        $category->save();
        notify()->success('Updated successfully ⚡️');
        return redirect()->route('admin.panel');
    }
    
    public function adminrights($id){
        $category = User::findorFail($id);

        return view ('admin-update', compact('category'));
    }

    public function adminupdate(Request $request , $id){
        $category = User::findorFail($id);
        $category->is_admin = $request->admin;
        $category->save();
        notify()->success('Made Admin successfully ⚡️');
        return redirect()->route('admin.panel');
    }

    public function userdelete($id){
        $category = User::find($id)->delete();
        notify()->success('Deleted deleted successfully ⚡️');
        return back();
        }
    
    public function projectdetails(){
        $projectdetails = project::all();
        return view('Project-dashboard', compact('projectdetails'));
    }

    public function renameproject($pid){
        $projectdetails = project::findorFail($pid);
        return view('Project-rename', compact('projectdetails'));
    }
    
    public function updateproject(Request $request, $pid){
        $details = project::findorFail($pid);
        $details->Pname = $request->Pname;
        $details->description = $request->Pdescription;
        $details->save();
        notify()->success('Updated successfully ⚡️');
        return redirect()->route('project.details');
    }

    public function deleteproject($pid){
        $detail = project::findorFail($pid)->delete();
        notify()->success('Project Deleted successfully');
        return back();
    }

    public function createproject(){
        return view('New-project');
    }

    public function store(Request $request){
       $project = project::create([
            'Pname' =>  $request->Pname,
            'description' => $request->Pdescription,
       ]);
       return redirect()->route('project.details');
    }

   public function data($pid){
        $projects = project::find($pid);
        $pro = project::find($pid);
        $userdata =  $projects->users()->get(array('id','name','email'));
        $projuser = array();
        
        foreach($userdata as $p){
            array_push($projuser, $p->id);
        }
        $user = User::whereNotIn('id',$projuser)->where('is_admin',0)->get();
        
        return view('users-in-project', compact('user','userdata','pro'));
   }

   public function relationdelete($id,$pid){
        $projects = project::findorFail($pid);
        $projects->users()->detach($id);
        notify()->emotify('success','User deleted successfully');
        return back();
   }

   public function addnewmember($id,$pid){
       $projects = project::find($pid);
       $projects->users()->syncWithoutDetaching($id);
       notify()->emotify('success','User added successfully');
       return back();
   }

}
