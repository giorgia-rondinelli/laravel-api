<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index(){
        $projects=Project::with('technology','types')->get();
        return response()->json($projects);
    }
    public function technologies(){
        $technologies=Technology::with('projects')->get();
        return response()->json($technologies);
    }
    public function types(){
        $types=Type::with('projects')->get();
        return response()->json($types);
    }
    public function getProjectBySlug($slug){
        $project=Project::where('slug',$slug)->with('technology','types')->first();

            if($project->image){

                $project->image=Storage::url($project->image);
            }else{
                $project->image=null;
            }


        return response()->json($project);
    }

}
