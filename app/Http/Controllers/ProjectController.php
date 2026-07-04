<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('project.index', compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_project' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'teknologi' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail_path'] = $request->file('thumbnail')->store('project-thumbnails', 'public');
        }

        Project::create($data);

        return redirect('/project');
    }

    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'nama_project' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'teknologi' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail_path) {
                Storage::disk('public')->delete($project->thumbnail_path);
            }

            $data['thumbnail_path'] = $request->file('thumbnail')->store('project-thumbnails', 'public');
        }

        $project->update($data);

        return redirect('/project');
    }

    public function destroy(Project $project)
    {
        if ($project->thumbnail_path) {
            Storage::disk('public')->delete($project->thumbnail_path);
        }

        $project->delete();

        return redirect('/project');
    }
}