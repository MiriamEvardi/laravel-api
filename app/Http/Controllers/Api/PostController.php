<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $project = Project::with(['type', 'technologies'])->paginate(2);

        return response()->json([
            "success" => true,
            "results" => $project
        ]);
    }
}
