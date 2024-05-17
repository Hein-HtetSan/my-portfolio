<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //

    public function get()
    {
        $data = Project::get();
        return response()->json($data, 204);
    }
}
