<?php

namespace Modules\Project\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Project\Entities\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('updated_at', 'DESC')->paginate(10000);;
        return view('project::index',compact('projects'));
    }

    public function create()
    {
        return view('project::create');
    }

    public function store(ProjectRequest $request)
    {
        try {
            $project = new Project();
            $project->title = $request->title;
            $project->overview = $request->overview;
            $project->publish = $request->publish ? 1 : 0;
            $project->activities = $request->activities;
            $project->donor_partners = $request->donor_partners;
            $project->status = $request->status;
            $project->final_outcomes = $request->final_outcomes;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/project', $filename);
                $project->image = $path;
            }
            $project->save();
            return redirect()->route('projects.index')->with('success', 'projects created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('project::show');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('project::edit', compact('project'));
    }

    public function update(ProjectRequest $request, $id)
    {
        $project =  Project::findOrFail($id);
        try {
            $project->title = $request->title;
            $project->overview = $request->overview;
            $project->publish = $request->publish ? 1 : 0;
            $project->activities = $request->activities;
            $project->donor_partners = $request->donor_partners;
            $project->status = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/project', $filename);
                $project->image = $path;
            }
            $project->save();
            return redirect()->route('projects.index')->with('success', 'project updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'project deleted successfully');
    }

}
