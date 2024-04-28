<?php

namespace App\Http\Controllers;

use App\Models\Cover;
use App\Models\Project;
use App\Models\Language;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectLanguage;
use App\Models\Project_Language;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\CommonMarkConverter;
use GrahamCampbell\Markdown\Facades\Markdown;

class ProjectController extends Controller
{

    // home page
    public function index()
    {
        $projects = Project::with('covers', 'languages')->get();
        return view('backend.work', compact('projects'));
    }

    // create page
    public function create()
    {
        $languages = Language::all();
        return view('backend.project.create', compact('languages'));
    }

    // store project
    public function store(Request $request)
    {
        // dd($request->toArray());
        $this->validateProject($request); // validation stage
        $project_id = mt_rand(1000, 9999); // for project id
        // collect stage
        $p_data = $this->getProjectInfo($request, $project_id); // collect project info
        Project::create($p_data);

        // store image
        foreach ($request->fileUpload as $file) {
            if ($file->isValid()) {
                $filename = uniqid() . $file->getClientOriginalName(); // rename file with unique id
                $file->storeAs('public', $filename);  // store the file to storage
                Cover::create(['name' => $filename, 'project_id' => $project_id]); // store to the cover database
            }
        }
        // store to project language asso table
        $p_l_data = [
            'project_id' => $project_id,
            'lang_id' => $request->lang,
        ];
        ProjectLanguage::create($p_l_data); // store to the database
        // if all done return to home
        return redirect()->route('project.list')->with(['success' => 'Inserted new project.']);
    }

    // collect project info
    private function getProjectInfo(Request $request, $id)
    {
        return [
            'id' => $id,
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'content' => $request->content,
            'github' => $request->github,
            'demo' => $request->demo ?? null
        ];
    }

    // destroy project
    public function destroy($id)
    {
        // First - delete project language relations
        ProjectLanguage::where('project_id', $id)->delete();
        // Second - remove images
        $images = Cover::select('name')->where('project_id', $id)->get()->toArray();
        foreach($images as $file)
        {
            if($file != null){
                Storage::delete('public/'.$file['name']);
            }
        }
        // Third - delete covers
        Cover::where('project_id', $id)->delete();
        // Fourth - delete project
        Project::destroy($id);
        // Optionally, you can return a response or redirect after deletion
        return redirect()->route('project.list')->with('success', 'Project deleted successfully!');
    }


    // get by id
    public function get($id)
    {
        $project = Project::with('covers', 'languages')->find($id);
        $converter = new CommonMarkConverter();
        $content = $converter->convertToHtml($project->content);
        return view('backend.project.detail', compact('project', 'content'));
    }




    // validate the project form
    private function validateProject(Request $request)
    {
        $rule = [
            'title' => 'required|string|max:255',
            'short_desc' => 'required|string|min:10',
            'lang' => 'required',
            'content' => 'required|string|min:10',
            'github' => 'required',
            'fileUpload' => 'required'
        ];
        $message = [
            'title.required' => 'Project title can not be blank!',
            'short_desc.required' => 'Describe your project brief.',
            'lang.required' => 'Select the language of your project.',
            'content.required' => 'Describe your project.',
            'github.required' => 'Enter your github link.',
            'fileUpload.required' => 'Upload your project file.'
        ];
        Validator::make($request->all(), $rule, $message)->validate();
    }
}
