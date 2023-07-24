<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRules = [
            'nama' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'no_telepon' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'alamat' => ['required', 'string'],
            'kelas' => ['required', 'exists:kelas,id'],
        ];

        $customErrorMessages = [
            'required' => ':Attribute wajib diisi.',
            'string' => ':Attribute string.',
            'date' => ':Attribute harus tanggal.',
            'numeric' => ':Attribute harus angka.',
            'email' => ':Attribute harus email yang valid.',
            'alamat' => ':Attribute harus string.',
            'exist' => ':Attribute tidak valid.',
        ];

        $customNameAttributes = [
            'tanggal_lahir' => 'tanggal lahir',
            'no_telepon' => 'no telepon',
        ];

        $validated = $request->validate($validationRules, $customErrorMessages, $customNameAttributes);

        $validated['kelas_id'] = $validated['kelas'];

        Pendaftaran::create($validated);

        return redirect('/')->with('success', 'Berhasil mendaftar.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
