<?php

namespace App\Http\Controllers;

use App\Models\GaleriFoto;
use App\Models\GaleriVideo;
use App\Models\Kelas;
use App\Models\Profil;
use App\Models\Slogan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('index', [
            'slogan' => Slogan::first(),
            'galeriFoto' => GaleriFoto::get(),
            'galeriVideo' => GaleriVideo::get(),
            'profil' => Profil::first(),
            'kelas' => Kelas::get(),
        ]);
    }
}
