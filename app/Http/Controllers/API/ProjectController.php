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
            // Project::create($data);
            // store to project language asso table
            $p_l_data = [
                'project_id' => $project_id,
                'lang_id' => $request->lang_id,
            ];
            // ProjectLanguage::create($p_l_data); // store to the database
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                for(int $i = 0; $i < count($files); $i++) {
                    if ($file->isValid()) {
                        $cloudinaryImage = $file->storeOnCloudinary('projects');
                        $url = $cloudinaryImage->getSecurePath();
                        $public_id = $cloudinaryImage->getPublicId();
                        // store file information to the covers table
                        Cover::create([
                            'name' => $file->getClientOriginalName(), // store the URL of the uploaded file
                            'project_id' => $project_id,
                            'url' => $url,
                            'public_id' => $public_id,
                        ]);
                    }
                }
            } else {
                return response()->json(['success' => false, 'message' => 'No files received'], 400); // file upload testing
            }
            return response()->json(['success' => true, 'data' => $data, $p_l_data], 200); // success response
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500); // fail response
        }
    }

    // public function store(Request $request)
    // {
    //     // dd($request->toArray());
    //     $this->validateProject($request); // validation stage
    //     $project_id = mt_rand(1000, 9999); // for project id

    //     // collect stage
    //     $p_data = $this->getProjectInfo($request, $project_id); // collect project info
    //     Project::create($p_data);

    //     // store image
    //     foreach ($request->fileUpload as $file) {
    //         if ($file->isValid()) {
    //             $filename = uniqid() . $file->getClientOriginalName(); // rename file with unique id
    //             $file->storeAs('public', $filename);  // store the file to storage
    //             Cover::create(['name' => $filename, 'project_id' => $project_id]); // store to the cover database
    //         }
    //     }
    //     // store to project language asso table
    //     $p_l_data = [
    //         'project_id' => $project_id,
    //         'lang_id' => $request->lang,
    //     ];
    //     ProjectLanguage::create($p_l_data); // store to the database
    //     // if all done return to home
    //     return redirect()->route('project.list')->with(['success' => 'Inserted new project.']);
    // }

}
