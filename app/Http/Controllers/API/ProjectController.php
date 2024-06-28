<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Cover;
use App\Models\ProjectLanguage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProjectController extends Controller
{

    // get all project
    public function get()
    {
        try{
            $data = Project::get();
            return response()->json(['success' => true, 'data' => $data], 200);
        }catch(\Exception $e){
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    // create new project
    public function store(Request $request)
    {
        try {
            $project_id = mt_rand(1000, 9999); // generate a project id
            $data = [ // project content
                '_id' => $project_id,
                'title' => $request->title,
                'short_desc' => $request->short_desc,
                'content' => $request->content,
                'github' => $request->github,
                'demo' => $request->demo,
            ];
            // create the project in the database
            $project = Project::create($data);
            // Attach languages to the project
            $project->languages()->attach($request->languages);
            return response()->json(['success' => true, 'data' => $data], 200); // success response
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500); // fail response
        }
    }
    
    public function handleUpload(Request $request)
    {
        // Validate the request
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif',
            'project_id' => 'required|exists:projects,id'
        ]);
        dd($request->toArray());
        // Check if the request has a file
        if ($request->hasFile('file')) {
            // Retrieve the file from the request
            $file = $request->file('file');
            // Check if the file is valid
            if ($file->isValid()) {
                // Get file content as binary
                $fileContent = file_get_contents($file->getRealPath());
                // Store the file in the Cover model
                $cover = Cover::create([
                    'project_id' => $request->project_id,
                    'filename' => $file->getClientOriginalName(),
                    'filedata' => $fileContent,
                    'mime_type' => $file->getMimeType(),
                ]);

                return response()->json(['success' => true, 'cover' => $cover], 201);
            } else {
                return response()->json(['success' => false, 'message' => 'Invalid file']);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'No file uploaded']);
        }
    }
}
