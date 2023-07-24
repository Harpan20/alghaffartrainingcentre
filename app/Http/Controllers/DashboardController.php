<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStatusPendaftaranRequest;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'pendaftaran' => Pendaftaran::with('kelas')->paginate(10)
        ]);
    }

    public function show(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran.show', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    public function editStatus(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran.edit', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    public function updateStatus(UpdateStatusPendaftaranRequest $request, Pendaftaran $pendaftaran)
    {
        $attr = $request->all();

        $pendaftaran->update($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }
}
