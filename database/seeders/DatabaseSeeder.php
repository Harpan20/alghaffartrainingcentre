<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\GaleriFoto;
use App\Models\GaleriVideo;
use App\Models\Kelas;
use App\Models\Profil;
use App\Models\Slogan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
        ]);

        Kelas::factory(3)->create();
        GaleriFoto::factory(3)->create();
        GaleriVideo::factory(3)->create();
        Profil::factory(1)->create();
        Slogan::factory(1)->create();
    }
}
