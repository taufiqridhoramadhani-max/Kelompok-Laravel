<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MemberAndProjectCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_project_can_be_created_with_thumbnail(): void
    {
        Storage::fake('public');

        $user = User::factory()->create();
        $file = UploadedFile::fake()->image('project-thumb.jpg', 640, 480);

        $response = $this->actingAs($user)->post('/project', [
            'nama_project' => 'Project Baru',
            'deskripsi' => 'Deskripsi project',
            'teknologi' => 'Laravel',
            'thumbnail' => $file,
        ]);

        $response->assertRedirect('/project');
        $project = Project::latest()->first();
        $this->assertNotNull($project);
        $this->assertNotNull($project->thumbnail_path);
        Storage::disk('public')->assertExists($project->thumbnail_path);
    }

    public function test_member_can_be_created_with_photo(): void
    {
        Storage::fake('public');

        $user = User::factory()->create();
        $file = UploadedFile::fake()->image('member-photo.jpg', 640, 480);

        $response = $this->actingAs($user)->post('/members', [
            'nama' => 'Anggota Baru',
            'nim' => 'F1B250099',
            'jurusan' => 'Sistem Informasi',
            'skills' => 'Laravel, Vue',
            'photo' => $file,
        ]);

        $response->assertRedirect('/isi');
        $this->assertDatabaseHas('members', [
            'nim' => 'F1B250099',
        ]);
    }
}
