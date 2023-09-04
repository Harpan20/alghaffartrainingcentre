<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStatusPendaftaranRequest;
use App\Mail\UserRegisteredNotify;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        // dd($pendaftaran->kelas->nama);

        $pendaftaran->update($attr);

        $data = [
            'nama' => $pendaftaran['nama'],
            'kelas' => $pendaftaran->kelas->nama,
        ];

        if ($attr['terdaftar'] === 1 || $attr['terdaftar'] === '1') {
            Mail::to($pendaftaran['email'])->send(new UserRegisteredNotify($data));
        }

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }
}
