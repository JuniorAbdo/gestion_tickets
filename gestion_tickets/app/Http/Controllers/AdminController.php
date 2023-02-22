<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function indexusers(){
        $users=DB::table('users')->paginate(10);
        
        return view('admin.indexUsers',['users'=>$users]);
    }
    public function editUsers(Request $request,$id){
        DB::table('users')->where('id',$id)->update([
            'role'=>$request->input('role'),
            'droit'=>$request->input('droit'),
        ]);
        return redirect()->route('users.index');
    }

   
}
