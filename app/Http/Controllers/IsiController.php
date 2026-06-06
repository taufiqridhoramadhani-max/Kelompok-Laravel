<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsiController extends Controller
{
    public function index()
    {
        $anggota = [
            [
                'nama' => 'Revalino Malikulmulki Yosep',
                'nim' => 'F1B250001',
                'jurusan' => 'Sistem Informasi',
                'skill' => ['Laravel Basic', 'HTML Basic', 'CSS Basic']
            ],
            [
                'nama' => 'Muhammad Taufiq Ridho Ramadhani',
                'nim' => 'F1B250020',
                'jurusan' => 'Sistem Informasi',
                'skill' => ['Laravel Basic', 'HTML Basic', 'CSS Basic']
            ],
            [
                'nama' => 'Soni Kurniawan',
                'nim' => 'F1B250019',
                'jurusan' => 'Sistem Informasi',
                'skill' => ['Laravel Basic', 'HTML Basic', 'CSS Basic']
            ]
        ];

        return view('isi', compact('anggota'));
    }
}
