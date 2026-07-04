<?php

namespace App\Http\Controllers;

use App\Models\Member;

class IsiController extends Controller
{
    public function index()
    {
        $anggota = Member::latest()->get();

        return view('isi', compact('anggota'));
    }
}
