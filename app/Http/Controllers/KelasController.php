<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Models\Kelas;
use Illuminate\Support\Facades\Storage;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kelas.index', [
            'kelas' => Kelas::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kelas.create', [
            'kelas' => new Kelas()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request)
    {
        $attr = $request->all();
        $attr['gambar'] = $request->file('gambar')->store('images/kelas');

        Kelas::create($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        return view('admin.kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        return view('admin.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        $attr = $request->all();
        if ($request->file('gambar')) {
            Storage::delete($kelas->gambar);
            $gambar = $request->file('gambar')->store('images/kelas');
        } else {
            $gambar = $kelas->gambar;
        }
        $attr['gambar'] = $gambar;

        $kelas->update($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        Storage::delete($kelas->gambar);

        return redirect()->back()->with('deleted', __('Data berhasil dihapus'));
    }
}
