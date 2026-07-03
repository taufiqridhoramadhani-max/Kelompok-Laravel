<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_project' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'teknologi' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_project.required' => 'Nama project wajib diisi.',
            'deskripsi.required' => 'Deskripsi project wajib diisi.',
            'teknologi.required' => 'Teknologi project wajib diisi.',
        ];
    }
}
