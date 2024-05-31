<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $projects=Project::with('technology','types')->get();
        return response()->json($projects);
    }
}
