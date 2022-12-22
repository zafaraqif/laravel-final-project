<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class deleteControl extends Controller
{
    public function deleteProject($id)
    {
        DB::delete('DELETE FROM projects WHERE proj_id = ?', [$id]);
        return redirect('/projects');
    }

}
