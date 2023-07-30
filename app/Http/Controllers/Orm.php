<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class Orm extends Controller
{
    public function Index() {
        $select = student::all();
        return view('home',compact('select'));
    }
    public function OnInsert(Request $req) {
        $data = new student();
        $data->name = $req->stname;
        $data->email = $req->stemail;
        $data->dept = $req->stdept;

       $insert = $data->save();

       if ($insert) {
        return redirect("/");
       } else {
        return 'Failed';
       }

    }
    public function OnDelete($id) {
       $delete = student::find($id);
       $delete->delete();
       return redirect("/");
    }
    public function OnEdit($id) {
       $data = student::find($id);
       return view('edit',compact('data'));
    }
    public function OnUpdate(Request $req,$id) {
        $data = student::find($id);

        $data->name = $req->stname;
        $data->email = $req->stemail;
        $data->dept = $req->stdept;

        $data->save();
        return redirect('/');
    }
}
