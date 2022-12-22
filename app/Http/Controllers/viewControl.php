<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\User;
use App\Models\Student;

class viewControl extends Controller
{
    public function viewStudents(){
        $student = Student::paginate(10);
        return view("admin.studentpage", ["data"=>$student]);
    }

    public function viewLecturers() {
        $lecturer = User::paginate(10);
        return view("admin.lecturerpage")->with(["data"=>$lecturer]);
    }

    public function viewProjects() {
        $project = Project::paginate(10);
        return view("admin.adminpage", ["data"=>$project]);
    }

    public function addProjects() {
        $lecturer = User::all();
        $student = Student::all();
        return view("admin.addprojectpage")->with(["lect"=>$lecturer, "stud"=>$student]);
    }

    public function viewSupervisee() {
        $lecturer=Auth::user()->name;
        $typeuser=Auth::user()->usertype;
        $supervisee = Project::where('supervisor', $lecturer)->get();

        if($typeuser == '1') {
            return view("admin.supervisee", ["sv"=>$supervisee]);
        } else {
            return view("lecturer.supervisee", ["sv"=>$supervisee]);
        }
        
    }

    public function viewExaminee() {
        $lecturer=Auth::user()->name;
        $typeuser=Auth::user()->usertype;
        $examiner1 = Project::where('examiner1', $lecturer)->get();
        $examiner2 = Project::where('examiner2', $lecturer)->get();

        if($typeuser == '1') {
            return view("admin.examinee")->with(["ex1"=>$examiner1, "ex2"=>$examiner2]);
        } else {
            return view("lecturer.examinee")->with(["ex1"=>$examiner1, "ex2"=>$examiner2]);
        }
    }

}