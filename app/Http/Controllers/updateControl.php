<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class updateControl extends Controller
{
    public function addProjects(Request $data) {
        $project = new Project;

        $project->proj_title = $data->title;
        $project->proj_type = $data->type;
        $project->supervisor = $data->sv;
        $project->examiner1 = $data->ex1;
        $project->examiner2 = $data->ex2;
        $project->student = $data->stud;
        $project->save();
        return redirect('/projects');
    }

    public function viewUpdate($id) {
        $project = Project::where('proj_id', '=', $id)->first();
        $typeuser=Auth::user()->usertype;
        $student = Student::all();
        
        if($typeuser == '1') {
            return view("admin.updatepage")->with(["proj"=>$project, "stud"=>$student]);
        } else {
            return view("lecturer.updatepage")->with(["proj"=>$project, "stud"=>$student]);
        }
        
    }

    public function updateProjects(Request $data) {

        $toDate = Carbon::parse($data->end);
        $fromDate = Carbon::parse($data->start);

        $months = $toDate->diffInMonths($fromDate);
        
        if($months == '') {
            $months = '0';
        } else
            $months = strval($months);

        DB::update("UPDATE projects SET proj_title = ?, proj_type = ?, student = ?, start_date = ?, end_date = ?, month_duration = ?, proj_progress = ?, proj_status = ? WHERE proj_id = ?", [$data->title,$data->type,$data->stud,$data->start,$data->end,$months,$data->progress,$data->status,$data->id]); 
        return redirect('/supervisee');

    }
}