<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_project' => 'required',
            'deskripsi' => 'required',
            'teknologi' => 'required',
        ]);

        Project::create([
            'nama_project' => $request->nama_project,
            'deskripsi' => $request->deskripsi,
            'teknologi' => $request->teknologi,
        ]);

        return redirect('/project');
    }

    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'nama_project' => 'required',
            'deskripsi' => 'required',
            'teknologi' => 'required',
        ]);

        $project->update([
            'nama_project' => $request->nama_project,
            'deskripsi' => $request->deskripsi,
            'teknologi' => $request->teknologi,
        ]);

        return redirect('/project');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/project');
    }
}