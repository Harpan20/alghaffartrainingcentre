<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSloganRequest;
use App\Models\Slogan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SloganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slogan.index', [
            'slogan' => Slogan::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Slogan $slogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slogan $slogan)
    {
        return view('admin.slogan.edit', compact('slogan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSloganRequest $request, Slogan $slogan)
    {
        $attr = $request->all();
        if ($request->file('gambar')) {
            Storage::delete($slogan->gambar);
            $gambar = $request->file('gambar')->store('images/slogan');
        } else {
            $gambar = $slogan->gambar;
        }
        $attr['gambar'] = $gambar;

        $slogan->update($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slogan $slogan)
    {
        //
    }
}
