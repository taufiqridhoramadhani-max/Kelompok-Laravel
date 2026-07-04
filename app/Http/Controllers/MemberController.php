<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'jurusan' => 'required|string|max:255',
            'skills' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('member-photos', 'public');
        }

        Member::create($data);

        return redirect('/isi');
    }

    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'jurusan' => 'required|string|max:255',
            'skills' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($member->photo_path) {
                Storage::disk('public')->delete($member->photo_path);
            }

            $data['photo_path'] = $request->file('photo')->store('member-photos', 'public');
        }

        $member->update($data);

        return redirect('/isi');
    }

    public function destroy(Member $member)
    {
        if ($member->photo_path) {
            Storage::disk('public')->delete($member->photo_path);
        }

        $member->delete();

        return redirect('/isi');
    }
}
