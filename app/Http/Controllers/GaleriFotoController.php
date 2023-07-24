<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGaleriFotoRequest;
use App\Http\Requests\UpdateGaleriFotoRequest;
use App\Models\GaleriFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.galeri-foto.index', [
            'galeriFoto' => GaleriFoto::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri-foto.create', [
            'galeriFoto' => new GaleriFoto()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleriFotoRequest $request)
    {
        $attr = $request->all();
        $attr['gambar'] = $request->file('gambar')->store('images/galeri-foto');

        GaleriFoto::create($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriFoto $galeriFoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriFoto $galeriFoto)
    {
        return view('admin.galeri-foto.edit', compact('galeriFoto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriFotoRequest $request, GaleriFoto $galeriFoto)
    {
        $attr = $request->all();
        if ($request->file('gambar')) {
            Storage::delete($galeriFoto->gambar);
            $gambar = $request->file('gambar')->store('images/galeri-foto');
        } else {
            $gambar = $galeriFoto->gambar;
        }
        $attr['gambar'] = $gambar;

        $galeriFoto->update($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriFoto $galeriFoto)
    {
        $galeriFoto->delete();
        Storage::delete($galeriFoto->gambar);

        return redirect()->back()->with('deleted', __('Data berhasil dihapus'));
    }
}
