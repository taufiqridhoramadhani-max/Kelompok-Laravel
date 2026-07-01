<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreProjectRequest;
use App\Http\Requests\Api\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProjectApiController extends Controller
{
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $projects = Project::latest()->paginate(10);

        return ProjectResource::collection($projects)
            ->additional(['message' => 'Daftar project berhasil diambil.']);
    }

    public function store(StoreProjectRequest $request): JsonResponse
    {
        $project = Project::create($request->validated());

        return (new ProjectResource($project))
            ->additional(['message' => 'Project berhasil dibuat.'])
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Project $project): ProjectResource
    {
        return (new ProjectResource($project))
            ->additional(['message' => 'Detail project berhasil diambil.']);
    }

    public function update(UpdateProjectRequest $request, Project $project): ProjectResource
    {
        $project->update($request->validated());

        return (new ProjectResource($project))
            ->additional(['message' => 'Project berhasil diperbarui.']);
    }

    public function destroy(Project $project): JsonResponse
    {
        $project->delete();

        return response()->json([
            'message' => 'Project berhasil dihapus.',
        ], Response::HTTP_OK);
    }
}
